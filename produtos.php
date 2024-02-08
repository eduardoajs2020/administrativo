<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="StyleSheet" href="/css/styles.css">
    <title>Cadastro de Produtos</title>
</head>

<div class="container">
<div class="imagem-lateral">
    <img src= "/assets/img/foto6.jpeg" alt="Lateral">
</div>

<div class="form-container">

<form action="/src/cadastro_produto.php" method="post">

    <h3>CADASTRO DE PRODUTOS</h3>

    <div  class="buttom-icon">
       <a href="../../index.php" ><img src= "/assets/img/icons8_menu_32.png" alt="botton"></a> 
    </div>

    <div class="form-cad-produtos">
        <label for="nome" hidden>id:</label>
        <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" hidden>
    </div>
    
    <div  class="form-cad-produtos">
        <label for="nome">NOME:</label>
        <input type="text" name="nome" value="<?php echo $_POST['nome'] ?? ''; ?>" id="nome" >
    </div>
    
    <div  class="form-cad-produtos-1">
        <label for="descricao">DESCRIÇÃO:</label>
        <textarea type="text" name="descricao" rows="4" cols ="73" value="<?php echo $_POST['descricao'] ?? ''; ?>" id="descricao" ></textarea>
    </div>
       
    <div  class="form-cad-produtos">
        <label for="preco">PRECO:</label>
        <input type="number" step="0.01" name="preco" value="<?php echo $_POST['preco'] ?? ''; ?>" id="preco" >
    </div>
    
    <div  class="form-cad-produtos">
        <label for="data_lancamento">DATA LANÇAMENTO:</label>
        <input type="date" name="data_lancamento" value="<?php echo isset($_POST['data_lancamento']) ? $_POST['data_lancamento'] : ''; ?>" id="data_lancamento" >
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
