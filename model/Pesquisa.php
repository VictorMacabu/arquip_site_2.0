<?php

class Pesquisa
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    private function normalizar($texto)
    {
        if (!$texto) return '';

        $texto = mb_strtolower($texto, 'UTF-8');

        $texto = strtr($texto, [
            'á'=>'a','à'=>'a','ã'=>'a','â'=>'a','ä'=>'a',
            'é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
            'í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
            'ó'=>'o','ò'=>'o','õ'=>'o','ô'=>'o','ö'=>'o',
            'ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
            'ç'=>'c'
        ]);

        return $texto;
    }

    public function buscar($q)
    {
        $qNormalizado = $this->normalizar($q);

        $stopWords = [
            'a','o','e','i','u','de','da','do','das','dos',
            'para','por','em','um','uma','os','as'
        ];

        $termos = array_filter(explode(" ", $qNormalizado));

        $termosFiltrados = array_filter($termos, function($t) use ($stopWords) {
            return strlen($t) >= 3 && !in_array($t, $stopWords);
        });

        if (empty($termosFiltrados)) {
            $termosFiltrados = $termos;
        }

        $sqlSug = '
        SELECT termo
        FROM "INDICE"
        ORDER BY similarity(termo, :q) DESC
        LIMIT 1
        ';

        $stmtSug = $this->pdo->prepare($sqlSug);
        $stmtSug->execute([
            ':q' => $qNormalizado
        ]);

        $sugestao = $stmtSug->fetchColumn();

        if ($sugestao === $qNormalizado) {
            $sugestao = null;
        }

        $conditions = [];
        $scoreParts = [];
        $params = [];

        foreach ($termosFiltrados as $i => $termo) {

            if (strlen($termo) < 3) continue;

            $conditions[] = "
                unaccent(termo) ILIKE unaccent(:termo$i)
                OR unaccent(termo) % unaccent(:termoExato$i)
            ";

            $scoreParts[] = "
                CASE 
                    WHEN unaccent(termo) ILIKE unaccent(:termo$i) THEN 10
                    WHEN unaccent(termo) % unaccent(:termoExato$i) THEN 5
                    ELSE 0
                END
            ";

            $params[":termo$i"] = "%$termo%";
            $params[":termoExato$i"] = $termo;
        }

        $where = !empty($conditions) ? implode(" OR ", $conditions) : "1=1";
        $scoreSQL = !empty($scoreParts) ? implode(" + ", $scoreParts) : "0";

        $sql = "
        SELECT 
            pagina,
            MIN(trecho) AS trecho,
            COUNT(*) AS frequencia,

            SUM($scoreSQL) AS score,

            COUNT(DISTINCT termo) FILTER (
                WHERE $where
            ) AS termos_encontrados

        FROM \"INDICE\"

        WHERE $where

        GROUP BY pagina

        ORDER BY 
            termos_encontrados DESC,
            score DESC,
            frequencia DESC

        LIMIT 50
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return [
            'resultados' => $resultados,
            'sugestao' => $sugestao
        ];
    }
}