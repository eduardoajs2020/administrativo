<?php
session_start();

include_once('../routes/CobrancasController.php');
require_once('../utils/Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cliente_id = $_POST["cliente_id"];
    $valor = $_POST["valor"];
    $modo_pagamento = $_POST["modo_pagamento"];
    $data_vencimento = $_POST["data_vencimento"];
    $data_pagamento = $_POST["data_pagamento"];

   /* var_dump($data_lancamento);
 
    $data = date_create_from_format('m-d-Y', $data_lancamento);
    
    if ($data !== false) {
    
    $data_formatada = $data->format('d/m/Y');
    
        echo "Data de lançamento: " . $data_formatada;

        var_dump($data_formatada);

    } else {
    
        echo "A data fornecida é inválida.";

    }*/

    $cobrancasController = new CobrancasController();

    // Chamada dos métodos do CobrancasController

    $CadSentenca = filter_input(INPUT_POST, 'CadSentenca');

    if (isset ($CadSentenca)) {

        $cobrancasController->criarCobranca($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento );
    
    }

    $ListaSentenca = filter_input(INPUT_POST, 'ListaSentenca');

    if (isset ($ListaSentenca)) {

        $cobrancasController->buscarCobranca($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento );
    
    }

    $AltSentenca = filter_input(INPUT_POST, 'AltSentenca');

    if (isset($AltSentenca)) {

         $cobrancasController->atualizarCobranca($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento );
    
    }

    $DelSentenca = filter_input(INPUT_POST, 'DelSentenca');

    if (isset ($DelSentenca)) {

        $cobrancasController->deletarCobranca($id);
    
    }
   
}

?>
