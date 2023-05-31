<?php
require_once('ClientesDAOinterface.php');


class ClientesDAO implements ClientesDAOinterface {

    private $connection;

    public function __construct($connection) {

        $this->connection = $connection;

    }


public function create($id, $nome, $cpf, $email, $telefone, $endereco) {

    // Lógica para criar um registro no banco de dados

    $sql = "INSERT INTO clientes (nome
                                    , cpf
                                    , email
                                    , telefone
                                    , endereco
                                    )
                            VALUES (:nome
                                    , :cpf
                                    , :email
                                    , :telefone
                                    , :endereco
                                    )";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":nome", $nome);

    $stmt->bindParam(":cpf", $cpf);

    $stmt->bindParam(":email", $email);

    $stmt->bindParam(":telefone", $telefone);

    $stmt->bindParam(":endereco", $endereco);

    if ($stmt->execute()) {

        echo "Cliente cadastrado com sucesso!";

    } else {

        echo "Erro ao cadastrar cliente: " . $stmt->errorInfo()[2];
        
    }
}


    public function read($id, $nome, $cpf, $email, $telefone, $endereco) {

    // Lógica para ler um registro do banco de dados

        $sql = "SELECT * FROM clientes";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {

        echo "<table>";
        echo "<tr>";
        echo "<th><strong>NUMERO</strong></th>";
        echo "<th><strong>NOME</strong></th>";
        echo "<th><strong>CPF</strong></th>";
        echo "<th><strong>EMAIL</strong></th>";
        echo "<th><strong>TELEFONE</strong></th>";
        echo "<th><strong>ENDEREÇO</strong></th>";
        echo "</tr>";

        foreach ($result as $row) {

            $id = $row['id'];
            $nome = $row['nome'];
            $cpf = $row['cpf'];
            $email = $row['email'];
            $telefone = $row['telefone'];
            $endereco = $row['endereco'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$cpf</td>";
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


    public function update($id, $nome, $cpf, $email, $telefone, $endereco) {

    // Lógica para atualizar um registro no banco de dados

    $sql = "UPDATE clientes SET 
                                nome = :nome
                              , cpf = :cpf
                              , email = :email
                              , telefone = :telefone
                              , endereco = :endereco 
                              
                              WHERE id = :id";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":nome", $nome);

    $stmt->bindParam(":cpf", $cpf);

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

        $sql = "DELETE FROM clientes WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {

        echo "Cliente deletado com sucesso!";

    } else {
        
        echo "Erro ao deletar cliente: " . $stmt->errorInfo()[2];
        
    }
}



}
