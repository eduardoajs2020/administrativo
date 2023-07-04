<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="StyleSheet" href="/css/styles.css">
    <title>Fluxo de Caixa</title>
</head>
<div class="container">
<div class="imagem-lateral">
    <img src= "/assets/img/foto6.jpeg" alt="Lateral">
</div>

<div class="form-container">

<form  action="/src/cadastro_fluxo_caixa.php" method="post">
    <h3>FLUXO DE CAIXA</h3>

    <div class="form-input-caixa">
        <label for="id" hidden>id:</label>
        <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" hidden>
    </div>
    
    <div class="form-input-caixa">
        <label for="tipo">TIPO:</label>
        <input type="text" name="tipo" value="<?php echo $_POST['tipo'] ?? ''; ?>" id="tipo" >
    </div>
    
    <div class="form-input-caixa">
        <label for="valor">VALOR:</label>
        <input type="text" name="valor" value="<?php echo $_POST['valor'] ?? ''; ?>" id="valor" >
    </div>
    
    <div class="form-input-caixa">
        <label for="data">DATA:</label>
        <input type="date" name="data" value="<?php echo $_POST['data'] ?? ''; ?>" id="data" >
    </div>
    
    <div class="form-input-caixa-1">
        <label for="descricao">DESCRIÇÃO:</label>
        <textarea type="text" name="descricao" rows="3" cols ="70" value="<?php echo $_POST['descricao'] ?? ''; ?>" id="descricao" ></textarea>
    </div>
    
    
    <div class="buttons">
    <input class="buttom" name="CadSentenca" type="submit" value="Cadastrar">
    <input class="buttom" name="AltSentenca" type="submit" value="Alterar">
    <input class="buttom" name="DelSentenca" type="submit" value="Excluir">
    <input class="buttom" name="ListaSentenca" type="submit" value="Lista Todas">
    </div>
</form>
</div>
</div>
