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

        return strtr($texto, [
            'á'=>'a','à'=>'a','ã'=>'a','â'=>'a','ä'=>'a',
            'é'=>'e','è'=>'e','ê'=>'e','ë'=>'e',
            'í'=>'i','ì'=>'i','î'=>'i','ï'=>'i',
            'ó'=>'o','ò'=>'o','õ'=>'o','ô'=>'o','ö'=>'o',
            'ú'=>'u','ù'=>'u','û'=>'u','ü'=>'u',
            'ç'=>'c'
        ]);
    }

    public function buscar($q)
    {
        $qNormalizado = $this->normalizar($q);

        $stopWords = [
            'a','o','e','i','u',
            'de','da','do','das','dos',
            'para','por','em',
            'um','uma','os','as'
        ];

        $termos = array_filter(explode(" ", $qNormalizado));

        $termosFiltrados = array_filter($termos, function ($t) use ($stopWords) {
            return strlen($t) >= 3 && !in_array($t, $stopWords);
        });

        if (empty($termosFiltrados)) {
            $termosFiltrados = $termos;
        }

        $conditions = [];
        $params = [];

        foreach ($termosFiltrados as $i => $termo) {

            if (strlen($termo) < 3) continue;

            $conditions[] = "unaccent(termo) ILIKE unaccent(:t$i)";
            $params[":t$i"] = "%$termo%";
        }

        if (empty($conditions)) {
            $conditions[] = "unaccent(termo) ILIKE unaccent(:fallback)";
            $params[":fallback"] = "%$qNormalizado%";
        }

        $where = implode(" OR ", $conditions);

        $params[':frase'] = "%$q%";

        $sql = "
        SELECT 
            pagina,
            MIN(trecho) AS trecho,

            SUM(
                CASE 
                    WHEN $where THEN 1
                    ELSE 0
                END
            ) AS frequencia,

            COUNT(DISTINCT termo) FILTER (
                WHERE $where
            ) AS termos_encontrados,

            MAX(
                CASE 
                    WHEN unaccent(trecho) ILIKE unaccent(:frase) THEN 1
                    ELSE 0
                END
            ) AS frase_match

        FROM \"INDICE\"

        WHERE $where

        GROUP BY pagina

        ORDER BY 
            frase_match DESC,        
            termos_encontrados DESC, 
            frequencia DESC          

        LIMIT 50
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);

        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return [
            'resultados' => $resultados,
            'sugestao' => null
        ];
    }

    public function sugerirTermo($termo)
    {
        $sql = "
        SELECT termo_original
        FROM \"INDICE\"
        WHERE unaccent(termo) ILIKE unaccent(:q)
        ORDER BY LENGTH(termo_original)
        LIMIT 1
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':q' => "%$termo%"
        ]);

        return $stmt->fetchColumn();
    }
}