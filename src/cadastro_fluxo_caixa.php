<?php
session_start();

require_once('../routes/Fluxo_caixaController.php');
require_once('../utils/Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $data = $_POST["data"];
    $descricao = $_POST["descricao"];

   /* var_dump($data_lancamento);

    $data = date_create_from_format('m-d-Y', $data_lancamento);

    if ($data !== false) {

    $data_formatada = $data->format('d/m/Y');

        echo "Data de lançamento: " . $data_formatada;

        var_dump($data_formatada);

    } else {

        echo "A data fornecida é inválida.";

    }*/

    $Fluxo_caixaController = new Fluxo_caixaController();

    // Chamada dos métodos do Fluxo_caixaController

    $CadSentenca = filter_input(INPUT_POST, 'CadSentenca');

    if (isset ($CadSentenca)) {

        $Fluxo_caixaController->criarFluxo($tipo, $valor, $data, $descricao);

    }

    $ListaSentenca = filter_input(INPUT_POST, 'ListaSentenca');

    if (isset ($ListaSentenca)) {

        $Fluxo_caixaController->buscarFluxo($tipo, $valor, $data, $descricao );

    }

    $AltSentenca = filter_input(INPUT_POST, 'AltSentenca');

    if (isset($AltSentenca)) {

         $Fluxo_caixaController->atualizarFluxo($id, $tipo, $valor, $data, $descricao );

    }

    $DelSentenca = filter_input(INPUT_POST, 'DelSentenca');

    if (isset ($DelSentenca)) {

        $Fluxo_caixaController->deletarFluxo($id);

    }

}

?>
