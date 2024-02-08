<?php

require_once('ProdutoDAOinterface.php');


class ProdutoDAO implements ProdutoDAOinterface {

    private $connection;

    public function __construct($connection) {

        $this->connection = $connection;

    }


public function create($nome, $descricao, $preco, $data_lancamento) {

    // Lógica para criar um registro no banco de dados

    $sql = "INSERT INTO produtos (    nome
                                    , descricao
                                    , preco
                                    , data_lancamento
                                    )
                            VALUES (  :nome
                                    , :descricao
                                    , :preco
                                    , :data_lancamento
                                    )";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":nome", $nome);

    $stmt->bindParam(":descricao", $descricao);

    $stmt->bindParam(":preco", $preco);

    $stmt->bindParam(":data_lancamento", $data_lancamento);

    if ($stmt->execute()) {
?>
        <link rel="StyleSheet" href="/css/styles.css">
        <table class="cabecalho">
        <tr>
        <th><strong>Produto cadastrado com sucesso!</strong></th>
        <br>
        <th><button><a href="../produtos.php">Retornar</a></button></th>
        </tr>
        </table>
<?php

    } else {

        echo "Erro ao cadastrar produto: " . $stmt->errorInfo()[2];

    }
}


    public function read($nome, $descricao, $preco, $data_lancamento) {

    // Lógica para ler um registro do banco de dados

        $sql = "SELECT * FROM produtos";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        require_once '../produtos.php';
?>
        <link rel="StyleSheet" href="/css/styles.css">
        
        <table class="cabecalho">
        <tr>
        <th><strong>NUMERO</strong></th>
        <th><strong>NOME</strong></th>
        <th><strong>DESCRIÇÃO</strong></th>
        <th><strong>PREÇO</strong></th>
        <th><strong>DATA LANÇAMENTO</strong></th>
        </tr>
<?php
        foreach ($result as $row) {

            $id = $row['id'];
            $nome = $row['nome'];
            $descricao = $row['descricao'];
            $preco = $row['preco'];
            $data_lancamento = $row['data_lancamento'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$descricao</td>";
            echo "<td>$preco</td>";
            echo "<td>$data_lancamento</td>";
            echo "</tr>";
        }

        echo "</table>";

    } else {

        return null;

    }
}


    public function update($nome, $descricao, $preco, $data_lancamento) {

    // Lógica para atualizar um registro no banco de dados

    $sql = "UPDATE produtos SET 
                                nome = :nome
                              , descricao = :descricao
                              , preco = :preco
                              , data_lancamento = :data_lancamento 
                              
                              WHERE id = :id";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":nome", $nome);

    $stmt->bindParam(":descricao", $descricao);

    $stmt->bindParam(":preco", $preco);

    $stmt->bindParam(":data_lancamento", $data_lancamento);

    if ($stmt->execute()) {

    ?>
        <link rel="StyleSheet" href="/css/styles.css">
        <table class="cabecalho">
        <tr>
        <th><strong>Produto Atualizado com sucesso!</strong></th>
        <br>
        <th><button><a href="../produtos.php">Retornar</a></button></th>
        </tr>
        </table>
<?php


    } else {

        echo "Erro ao atualizar produto: " . $stmt->errorInfo()[2];
    }
}


    public function delete($id) {

    // Lógica para deletar um registro do banco de dados

        $sql = "DELETE FROM produtos WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {

?>
        <link rel="StyleSheet" href="/css/styles.css">
        <table class="cabecalho">
        <tr>
        <th><strong>Produto excluído com sucesso!</strong></th>
        <br>
        <th><button><a href="../produtos.php">Retornar</a></button></th>
        </tr>
        </table>
<?php

    } else {
        
        echo "Erro ao deletar produto: " . $stmt->errorInfo()[2];
        
    }
}



}
