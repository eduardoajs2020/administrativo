<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="StyleSheet" href="/css/styles.css">
    <title>Cadastro de Usuários</title>
</head>
<div class="container">
<div class="imagem-lateral">
    <img src= "/assets/img/foto6.jpeg" alt="Lateral">
</div>

<div class="form-container">

    <form  action="/src/cadastro_usuario.php" method="post">

    <h3>CADASTRO DE USUÁRIOS</h3>

    <div  class="buttom-icon">
       <a href="../../index.php" ><img src= "/assets/img/icons8_menu_32.png" alt="botton"></a> 
    </div>

    <div>
        <label for="nome" hidden>id:</label>
        <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" hidden>
    </div>
    
    <div class="menu-senha">
        <label for="username">USUARIO:</label>
        <input type="text" name="username" value="<?php echo $_POST['username'] ?? ''; ?>" id="username" >
    </div>
    
    <div class="menu-senha">
        <label for="senha">SENHA:</label>
        <input type="password" name="senha" value="<?php echo $_POST['senha'] ?? ''; ?>" id="senha" >
    </div>

    <div class="menu-senha">
        <label for="confirmasenha">CONFIRMAÇÃO DE SENHA:</label>
        <input type="password" name="confirmasenha" value="<?php echo $_POST['confirmasenha'] ?? ''; ?>" id="confirmasenha" >
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

