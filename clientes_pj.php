<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="StyleSheet" href="/css/styles.css">
    <title>Clientes PJ</title>
</head>
<div class="container">
<div class="imagem-lateral">
    <img src= "/assets/img/foto6.jpeg" alt="Lateral">
</div>

<div class="form-container">
<form action="/src/cadastro_clientes_pj.php" method="post">

    <h3>CLIENTE PJ</h3>

    <div  class="buttom-icon">
       <a href="../../index.php" ><img src= "/assets/img/icons8_menu_32.png" alt="botton"></a> 
    </div>

    <div class="form-cliente-pf">
    <label for="nome" hidden>id:</label>
    <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" hidden>
    </div>
    
    <div class="form-cliente-pf">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $_POST['nome'] ?? ''; ?>" id="nome" >
    </div>

    <div class="form-cliente-pf">
    <label for="cnpj">CNPJ:</label>
    <input type="text" name="cnpj" value="<?php echo $_POST['cnpj'] ?? ''; ?>" id="cnpj" >
    </div>

    <div class="form-cliente-pf">
    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" id="email" >
    </div>

    <div class="form-cliente-pf">
    <label for="telefone">Telefone:</label>
    <input type="tel" name="telefone" value="<?php echo $_POST['telefone'] ?? ''; ?>" id="telefone" >
    </div>

    <div class="form-cliente-pf">
    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" value="<?php echo $_POST['endereco'] ?? ''; ?>" id="endereco" >
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