<?php

require_once('nomedoarquivoDAOinterface.php');

class nomedaclasse1 {
    private $nomedoarquivoDAO;

    public function __construct(nomedoarquivoDAOInterface $nomedoarquivoDAO) {
        $this->nomedoarquivoDAO = $nomedoarquivoDAO;
    }

    // Métodos públicos da classe
    public function listar() {
        // Lógica para listar registros da tabela
    }

    public function buscar($id) {
        // Lógica para buscar um registro pelo ID
    }

    public function cadastrar($data) {
        // Lógica para cadastrar um novo registro na tabela
    }

    public function atualizar($id, $data) {
        // Lógica para atualizar um registro na tabela
    }

    public function excluir($id) {
        // Lógica para excluir um registro da tabela
    }
}
