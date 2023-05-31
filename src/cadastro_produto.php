<?php
session_start();

include_once('../routes/ProdutoController.php');
require_once('../utils/Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $data_lancamento = $_POST["data_lancamento"];

   /* var_dump($data_lancamento);
 
    $data = date_create_from_format('m-d-Y', $data_lancamento);
    
    if ($data !== false) {
    
    $data_formatada = $data->format('d/m/Y');
    
        echo "Data de lançamento: " . $data_formatada;

        var_dump($data_formatada);

    } else {
    
        echo "A data fornecida é inválida.";

    }*/

    $produtoController = new ProdutoController();

    // Chamada dos métodos do ProdutoController

    $CadSentenca = filter_input(INPUT_POST, 'CadSentenca');

    if (isset ($CadSentenca)) {

        $produtoController->criarProduto($nome, $descricao, $preco, $data_lancamento);
    
    }

    $ListaSentenca = filter_input(INPUT_POST, 'ListaSentenca');

    if (isset ($ListaSentenca)) {

        $produtoController->buscarProduto($nome, $descricao, $preco, $data_lancamento);
    
    }

    $AltSentenca = filter_input(INPUT_POST, 'AltSentenca');

    if (isset($AltSentenca)) {

         $produtoController->atualizarProduto($nome, $descricao, $preco, $data_lancamento);
    
    }

    $DelSentenca = filter_input(INPUT_POST, 'DelSentenca');

    if (isset ($DelSentenca)) {

        $produtoController->deletarProduto($id);
    
    }
   
}

?>
