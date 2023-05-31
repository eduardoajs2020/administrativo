<?php

require_once('../utils/Conexao.php');
require_once('../dao/ClientesDAO.php');


class ClientesController {

    private $clientesDAO;

    public function __construct() {

        $this->clientesDAO = new ClientesDAO(Conexao::getConnection());

    }

    public function criarCliente($id, $nome, $cpf, $email, $telefone, $endereco) {
        
        return $this->clientesDAO->create($id, $nome, $cpf, $email, $telefone, $endereco);
    
    }

    public function buscarCliente($id, $nome, $cpf, $email, $telefone, $endereco) {
        
        return $this->clientesDAO->read($id, $nome, $cpf, $email, $telefone, $endereco);
    
    }

    public function atualizarCliente($id, $nome, $cpf, $email, $telefone, $endereco) {
      
        return $this->clientesDAO->update($id, $nome, $cpf, $email, $telefone, $endereco);
    
    }

    public function deletarCliente($id) {

       return $this->clientesDAO->delete($id);

    }
    
}

?>
