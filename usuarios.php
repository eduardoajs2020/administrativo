
<form action="/src/cadastro_usuario.php" method="post">

    <label for="nome" hidden>id:</label>
    <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" hidden>
    
    <label for="username">USUARIO:</label>
    <input type="text" name="username" value="<?php echo $_POST['username'] ?? ''; ?>" id="username" >


    <label for="senha">SENHA:</label>
    <input type="password" name="senha" value="<?php echo $_POST['senha'] ?? ''; ?>" id="senha" >

    <label for="confirmasenha">CONFIRMAÇÃO DE SENHA:</label>
    <input type="password" name="confirmasenha" value="<?php echo $_POST['confirmasenha'] ?? ''; ?>" id="confirmasenha" >

    <br><br>
    <input class="buttom" name="CadSentenca" type="submit" value="Cadastrar">
    <input class="buttom" name="AltSentenca" type="submit" value="Alterar">
    <input class="buttom" name="DelSentenca" type="submit" value="Excluir">
    <input class="buttom" name="ListaSentenca" type="submit" value="Lista Todos">

</form>
