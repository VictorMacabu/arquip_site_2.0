<?php

class Pesquisa
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function buscar($q)
    {
        $sql = "
        SELECT 
            pagina,
            termo,
            trecho,
            COUNT(*) as frequencia
        FROM \"INDICE\"
        WHERE unaccent(termo) ILIKE unaccent(:q)
        GROUP BY pagina, termo, trecho
        ORDER BY frequencia DESC
        LIMIT 50
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':q' => "%$q%"
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}