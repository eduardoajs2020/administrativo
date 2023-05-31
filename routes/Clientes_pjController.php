<?php

require_once('../utils/Conexao.php');
require_once('../dao/Clientes_pjDAO.php');


class Clientes_pjController {

    private $clientes_pjDAO;

    public function __construct() {

        $this->clientes_pjDAO = new Clientes_pjDAO(Conexao::getConnection());
    
    }

    public function criarCliente_pj($id, $nome, $cnpj, $email, $telefone, $endereco) {
       
        return $this->clientes_pjDAO->create($id, $nome, $cnpj, $email, $telefone, $endereco);
    }


    public function buscarCliente_pj($id, $nome, $cnpj, $email, $telefone, $endereco) {
        
        return $this->clientes_pjDAO->read($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    }

    public function atualizarCliente_pj($id, $nome, $cnpj, $email, $telefone, $endereco) {
       
        return $this->clientes_pjDAO->update($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    }

    public function deletarCliente_pj($id) {

       return $this->clientes_pjDAO->delete($id);
       
    }
}

?>
