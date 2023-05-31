
<form action="/src/cadastro_produto.php" method="post">

    <label for="nome">id:</label>
    <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" >
    
    <label for="nome">NOME:</label>
    <input type="text" name="nome" value="<?php echo $_POST['nome'] ?? ''; ?>" id="nome" >

    <label for="descricao">DESCRIÇÃO:</label>
    <textarea type="text" name="descricao" rows="5" cols ="33" value="<?php echo $_POST['descricao'] ?? ''; ?>" id="descricao" ></textarea>

    <label for="preco">PRECO:</label>
    <input type="number" step="0.01" name="preco" value="<?php echo $_POST['preco'] ?? ''; ?>" id="preco" >

    <label for="data_lancamento">DATA LANÇAMENTO:</label>
    <input type="date" name="data_lancamento" value="<?php echo isset($_POST['data_lancamento']) ? $_POST['data_lancamento'] : ''; ?>" id="data_lancamento" >

    <br><br>
    <input class="buttom" name="CadSentenca" type="submit" value="Cadastrar">
    <input class="buttom" name="AltSentenca" type="submit" value="Alterar">
    <input class="buttom" name="DelSentenca" type="submit" value="Excluir">
    <input class="buttom" name="ListaSentenca" type="submit" value="Lista Todos">

</form>
