<?php
session_start();

include_once('../routes/FornecedorController.php');
require_once('../utils/Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"] ?? null;
    $nome = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];


    $fornecedorController = new FornecedorController();

    // Chamada dos métodos do FornecedorController

    $CadSentenca = filter_input(INPUT_POST, 'CadSentenca');

    if (isset ($CadSentenca)) {

        $fornecedorController->criarFornecedor($id, $nome, $cnpj, $email, $telefone, $endereco);
    }

    $ListaSentenca = filter_input(INPUT_POST, 'ListaSentenca');

    if (isset ($ListaSentenca)) {

        $fornecedorController->buscarFornecedor($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    }

    $AltSentenca = filter_input(INPUT_POST, 'AltSentenca');

    if (isset($AltSentenca)) {

         $fornecedorController->atualizarFornecedor($id, $nome, $cnpj, $email, $telefone, $endereco);
    
    }

    $DelSentenca = filter_input(INPUT_POST, 'DelSentenca');

    if (isset ($DelSentenca)) {

        $fornecedorController->deletarFornecedor($id);

    }

}



?>
