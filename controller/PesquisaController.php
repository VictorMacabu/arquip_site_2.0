<?php

require_once __DIR__ . "/../model/Pesquisa.php";

class PesquisaController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Pesquisa($pdo);
    }

    public function buscar($q)
    {
        if (empty($q)) {
            return [
                'resultados' => [],
                'sugestao' => null
            ];
        }

        $resultadoBusca = $this->model->buscar($q);

        return [
            'resultados' => $resultadoBusca['resultados'] ?? [],
            'sugestao' => $resultadoBusca['sugestao'] ?? null
        ];
    }
}