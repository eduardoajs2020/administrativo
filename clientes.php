
<form action="/src/cadastro_clientes.php" method="post">

    <label for="nome">id:</label>
    <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" >
    
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $_POST['nome'] ?? ''; ?>" id="nome" >

    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" value="<?php echo $_POST['cpf'] ?? ''; ?>" id="cpf" >

    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>" id="email" >

    <label for="telefone">Telefone:</label>
    <input type="tel" name="telefone" value="<?php echo $_POST['telefone'] ?? ''; ?>" id="telefone" >

    <label for="endereco">Endereço:</label>
    <input type="text" name="endereco" value="<?php echo $_POST['endereco'] ?? ''; ?>" id="endereco" >

    <br><br>
    <input class="buttom" name="CadSentenca" type="submit" value="Cadastrar">
    <input class="buttom" name="AltSentenca" type="submit" value="Alterar">
    <input class="buttom" name="DelSentenca" type="submit" value="Excluir">
    <input class="buttom" name="ListaSentenca" type="submit" value="Lista Todas">

</form>
