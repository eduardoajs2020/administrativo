
<form action="/src/cadastro_fluxo_caixa.php" method="post">

    <label for="id">id:</label>
    <input type="text" name="id" value="<?php echo $_POST['id'] ?? ''; ?>" id="id" >
    
    <label for="tipo">TIPO:</label>
    <input type="text" name="tipo" value="<?php echo $_POST['tipo'] ?? ''; ?>" id="tipo" >

    <label for="valor">VALOR:</label>
    <input type="text" name="valor" value="<?php echo $_POST['valor'] ?? ''; ?>" id="valor" >

    <label for="data">DATA:</label>
    <input type="date" name="data" value="<?php echo $_POST['data'] ?? ''; ?>" id="data" >

    <label for="descricao">DESCRIÇÃO:</label>
    <textarea type="text" name="descricao" rows="3" cols ="33" value="<?php echo $_POST['descricao'] ?? ''; ?>" id="descricao" ></textarea>
    

    <br><br>
    <input class="buttom" name="CadSentenca" type="submit" value="Cadastrar">
    <input class="buttom" name="AltSentenca" type="submit" value="Alterar">
    <input class="buttom" name="DelSentenca" type="submit" value="Excluir">
    <input class="buttom" name="ListaSentenca" type="submit" value="Lista Todas">

</form>
