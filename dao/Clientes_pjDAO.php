<?php

require_once('Clientes_pjDAOinterface.php');


class Clientes_pjDAO implements Clientes_pjDAOinterface {

    private $connection;

    public function __construct($connection) {

        $this->connection = $connection;

    }


public function create($id, $nome, $cnpj, $email, $telefone, $endereco) {

    // Lógica para criar um registro no banco de dados

    $sql = "INSERT INTO clientes_pj (nome
                                    , cnpj
                                    , email
                                    , telefone
                                    , endereco
                                    )
                            VALUES (:nome
                                    , :cnpj
                                    , :email
                                    , :telefone
                                    , :endereco
                                    )";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":nome", $nome);

    $stmt->bindParam(":cnpj", $cnpj);

    $stmt->bindParam(":email", $email);

    $stmt->bindParam(":telefone", $telefone);

    $stmt->bindParam(":endereco", $endereco);

    if ($stmt->execute()) {

        echo "Cliente cadastrado com sucesso!";

    } else {

        echo "Erro ao cadastrar Cliente: " . $stmt->errorInfo()[2];

    }
}


    public function read($id, $nome, $cnpj, $email, $telefone, $endereco) {

    // Lógica para ler um registro do banco de dados

        $sql = "SELECT * FROM clientes_pj";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {

        require_once '../clientes_pj.php';
 ?>
        <link rel="StyleSheet" href="/css/styles.css">

        <table class="cabecalho">
        <tr>
        <th><strong>NUMERO</strong></th>
        <th><strong>NOME</strong></th>
        <th><strong>CNPJ</strong></th>
        <th><strong>EMAIL</strong></th>
        <th><strong>TELEFONE</strong></th>
        <th><strong>ENDEREÇO</strong></th>
        </tr>
<?php
        foreach ($result as $row) {

            $id = $row['id'];
            $nome = $row['nome'];
            $cnpj = $row['cnpj'];
            $email = $row['email'];
            $telefone = $row['telefone'];
            $endereco = $row['endereco'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$cnpj</td>";
            echo "<td>$email</td>";
            echo "<td>$telefone</td>";
            echo "<td>$endereco</td>";
            echo "</tr>";
        }

        echo "</table>";

    } else {

        return null;

    }

}


    public function update($id, $nome, $cnpj, $email, $telefone, $endereco) {

    // Lógica para atualizar um registro no banco de dados

    $sql = "UPDATE clientes_pj SET 
                                nome = :nome
                              , cnpj = :cnpj
                              , email = :email
                              , telefone = :telefone
                              , endereco = :endereco 
                              
                              WHERE id = :id";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":nome", $nome);

    $stmt->bindParam(":cnpj", $cnpj);

    $stmt->bindParam(":email", $email);

    $stmt->bindParam(":telefone", $telefone);

    $stmt->bindParam(":endereco", $endereco);

    $stmt->bindParam(":id", $id);

    if ($stmt->execute()) {

        echo "Cliente atualizado com sucesso!";

    } else {

        echo "Erro ao atualizar cliente: " . $stmt->errorInfo()[2];

    }

}


    public function delete($id) {

    // Lógica para deletar um registro do banco de dados

        $sql = "DELETE FROM clientes_pj WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {

        echo "Cliente deletado com sucesso!";

    } else {
        
        echo "Erro ao deletar cliente: " . $stmt->errorInfo()[2];

    }

}

}
