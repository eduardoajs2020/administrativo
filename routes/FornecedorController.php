<?php

require_once('../utils/Conexao.php');
require_once('../dao/FornecedorDAO.php');


class FornecedorController {

    private $fornecedorDAO;

    public function __construct() {

        $this->fornecedorDAO = new FornecedorDAO(Conexao::getConnection());
    
    }

    public function criarFornecedor($id, $nome, $cnpj, $email, $telefone, $endereco) {
        
        return $this->fornecedorDAO->create($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    }

    public function buscarFornecedor($id, $nome, $cnpj, $email, $telefone, $endereco) {
       
        return $this->fornecedorDAO->read($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    }

    public function atualizarFornecedor($id, $nome, $cnpj, $email, $telefone, $endereco) {
    
        return $this->fornecedorDAO->update($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    }

    public function deletarFornecedor($id) {

       return $this->fornecedorDAO->delete($id);
       
    }
}

?>
