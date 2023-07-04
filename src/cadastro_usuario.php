<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);

include_once('../routes/UsuariosController.php');
require_once('../utils/Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    



    $usuariosController = new UsuariosController();

    // Chamada dos métodos do UsuariosController

    $CadSentenca = filter_input(INPUT_POST, 'CadSentenca');

    if (isset ($CadSentenca)) {

        $usuariosController->criarUsuario($username, $password);
    
    }

    $ListaSentenca = filter_input(INPUT_POST, 'ListaSentenca');

    if (isset ($ListaSentenca)) {

        $usuariosController->buscarUsuario($username, $password);
    
    }

    $AltSentenca = filter_input(INPUT_POST, 'AltSentenca');

    if (isset($AltSentenca)) {

         $usuariosController->atualizarUsuario($username, $password,  $id);
    
    }

    $DelSentenca = filter_input(INPUT_POST, 'DelSentenca');

    if (isset ($DelSentenca)) {

        $usuariosController->deletarUsuario($id);
    
    }

    $LogarUsuario = filter_input(INPUT_POST, 'LogarUsuario');

    if (isset ($LogarUsuario)) {

        $usuariosController->loginUsuario($username, $password);
    
    }
   
}

?>
