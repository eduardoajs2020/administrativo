<?php

require_once('../utils/Conexao.php');
require_once('../dao/UsuariosDAO.php');


class UsuariosController {

    private $usuariosDAO;

    public function __construct() {

        $this->usuariosDAO = new UsuariosDAO(Conexao::getConnection());

    }

    public function criarUsuario($username, $password) {
        
        return $this->usuariosDAO->create($username, $password);
    
    }

    public function buscarUsuario($username, $password) {
        
        return $this->usuariosDAO->read($username, $password);
    
    }

    public function atualizarUsuario($username, $password,  $id) {
    
        return $this->usuariosDAO->update($username, $password,  $id);
    
    }

    public function deletarUsuario($id) {

       return $this->usuariosDAO->delete($id);
       
    }

    public function loginUsuario($username, $password) {

       return $this->usuariosDAO->login($username, $password);
       
    }
}

?>
