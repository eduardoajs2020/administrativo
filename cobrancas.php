<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="StyleSheet" href="/css/styles.css">
    <title>Cobranças</title>
</head>
<div class="container">

<div class="imagem-lateral">
    <img src= "/assets/img/foto6.jpeg" alt="Lateral">
</div>

<div class="form-container">

<form action="/src/cadastro_cobranca.php" method="post">

    <h3>COBRANÇA</h3>

<div class="form-cobrancas">
    <label for="nome" hidden>id:</label>
    <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" hidden>
</div>
    
<div class="form-cobrancas">
    <label for="cliente_id">CLIENTE:</label>
    <input type="text" name="cliente_id" value="<?php echo $_POST['cliente_id'] ?? ''; ?>" id="cliente_id" >
</div>

<div class="form-cobrancas">
    <label for="valor">VALOR:</label>
    <input type="text" name="valor" value="<?php echo $_POST['valor'] ?? ''; ?>" id="valor" >
</div>
    
<div class="form-cobrancas">
    <label for="modo_pagamento"></label>
    <input type="text" name="modo_pagamento" value="<?php echo $_POST['modo_pagamento'] ?? ''; ?>" hidden>
</div>
    
<div class="form-cobrancas">

   <h4>SELECIONE A FORMA DE PAGAMENTO</h4>

  <!--form id="paymentForm" action="" method="post"-->
  <div class="form-cobranca-pagamento">

    <label for="modo_pagamento"></label>
    <select name="modo_pagamento" id="modo_pagamento">

      <option value="" selected></option>
      <option value="a_vista">À Vista</option>

    </select>

    <select name= "vista">
      <option value="" selected></option>
      <option value="boleto">Boleto</option>
      <option value="debito">Débito</option>
      <option value="pix">Pix</option>
    </select>

    </select>

  </div>
    
<div class="form-cobranca-pagamento">

  <label for="sub_modo_pagamento"></label>

    <select>
      <option value="" selected></option>
      <option value="a_prazo">À Prazo</option>
    </select>
    
    <select>
      <option value="" selected></option>
      <option value="credito">Crédito</option>
      <option value="boleto">Boleto</option>
      <option value="cash_back">Cash_back</option>
      <option value="pix_parcelado">Pix Parcelado</option>
    </select>

</div>
    
</div>
   
<div class="datas-container">

  <div class="datas-individuais">
      <label for="data_vencimento">VENCIMENTO:</label>
      <input type="date" name="data_vencimento" value="<?php echo $_POST['data_vencimento'] ?? ''; ?>" id="data_vencimento" >
  </div>
  
  <div class="datas-indviduais">
      <label for="data_pagamento">PAGAMENTO:</label>
      <input type="date" name="data_pagamento" value="<?php echo $_POST['data_pagamento'] ?? ''; ?>" id="data_pagamento" >
  </div>

</div>
    
    <div class="buttons">
    <input class="buttom" name="CadSentenca" type="submit" value="Cadastrar">
    <input class="buttom" name="AltSentenca" type="submit" value="Alterar">
    <input class="buttom" name="DelSentenca" type="submit" value="Excluir">
    <input class="buttom" name="ListaSentenca" type="submit" value="Lista Todos">
    </div>

</form>
  </div>
</div>
