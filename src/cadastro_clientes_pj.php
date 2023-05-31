<?php
session_start();

include_once('../routes/Clientes_pjController.php');
require_once('../utils/Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"] ?? null;
    $nome = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];


    $clientes_pjController = new Clientes_pjController();

    // Chamada dos métodos do Clientes_pjController

    $CadSentenca = filter_input(INPUT_POST, 'CadSentenca');

    if (isset ($CadSentenca)) {

        $clientes_pjController->criarCliente_pj($id, $nome, $cnpj, $email, $telefone, $endereco);
    }

    $ListaSentenca = filter_input(INPUT_POST, 'ListaSentenca');

    if (isset ($ListaSentenca)) {

        $clientes_pjController->buscarCliente_pj($id, $nome, $cnpj, $email, $telefone, $endereco);
    }

    $AltSentenca = filter_input(INPUT_POST, 'AltSentenca');

    if (isset($AltSentenca)) {

         $clientes_pjController->atualizarCliente_pj($id, $nome, $cnpj, $email, $telefone, $endereco);
    }

    $DelSentenca = filter_input(INPUT_POST, 'DelSentenca');

    if (isset ($DelSentenca)) {

        $clientes_pjController->deletarCliente_pj($id);
    }

    
}



?>
