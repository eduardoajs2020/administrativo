
<form action="/src/cadastro_cobranca.php" method="post">

    <label for="nome" hidden>id:</label>
    <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" hidden>

    <label for="cliente_id">CLIENTE:</label>
    <input type="text" name="cliente_id" value="<?php echo $_POST['cliente_id'] ?? ''; ?>" id="cliente_id" >

    <label for="valor">VALOR:</label>
    <input type="text" name="valor" value="<?php echo $_POST['valor'] ?? ''; ?>" id="valor" >

    <label for="modo_pagamento"></label>
    <input type="text" name="modo_pagamento" value="<?php echo $_POST['modo_pagamento'] ?? ''; ?>" hidden>

    <h3>SELECIONE A FORMA DE PAGAMENTO</h3>
  <!--form id="paymentForm" action="" method="post"-->
    <label for="modo_pagamento">MODALIDADE DE PAGAMENTO:</label><br>
    <select name="modo_pagamento" id="modo_pagamento">
      <option value="a_vista">À Vista</option>
      <option value="a_prazo">À Prazo</option>
    </select><br><br>

    <label for="sub_modo_pagamento">FORMA DE PAGAMENTO:</label><br>
    <select name="sub_modo_pagamento" id="sub_modo_pagamento">



      <?php
        // Sub options based on selected payment mode
        $subOptions = array(
          'a_vista' => array('dinheiro', 'cartao_debito', 'boleto', 'pix', 'cash_back'),
          'a_prazo' => array('cartao_credito', 'boleto', 'cash_back')
        );

        // Iterate through the sub options and generate the select options
        foreach ($subOptions['a_vista'] as $option) {
          echo "<option value='$option'>$option</option>";
        }
      ?>
    </select><br><br>

    <label for="data_vencimento">VENCIMENTO:</label>
    <input type="date" name="data_vencimento" value="<?php echo $_POST['data_vencimento'] ?? ''; ?>" id="data_vencimento" >

    <label for="data_pagamento">PAGAMENTO:</label>
    <input type="date" name="data_pagamento" value="<?php echo $_POST['data_pagamento'] ?? ''; ?>" id="data_pagamento" >

    <br><br>
    <input class="buttom" name="CadSentenca" type="submit" value="Cadastrar">
    <input class="buttom" name="AltSentenca" type="submit" value="Alterar">
    <input class="buttom" name="DelSentenca" type="submit" value="Excluir">
    <input class="buttom" name="ListaSentenca" type="submit" value="Lista Todos">

</form>
