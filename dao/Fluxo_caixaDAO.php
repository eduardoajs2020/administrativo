<?php

require_once('Fluxo_caixaDAOinterface.php');


class Fluxo_caixaDAO implements Fluxo_caixaDAOinterface {

    private $connection;

    public function __construct($connection) {

        $this->connection = $connection;

    }


public function create($tipo, $valor, $data, $descricao) {

    // Lógica para criar um registro no banco de dados

    $sql = "INSERT INTO fluxo_de_caixa (    tipo
                                          , valor
                                          , data
                                          , descricao
                                        )
                                VALUES (  :tipo
                                        , :valor
                                        , :data
                                        , :descricao
                                        )";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":tipo", $tipo);

    $stmt->bindParam(":valor", $valor);

    $stmt->bindParam(":data", $data);

    $stmt->bindParam(":descricao", $descricao);

    if ($stmt->execute()) {

        echo "Lançamento cadastrado com sucesso!";

    } else {

        echo "Erro ao cadastrar Lançamento: " . $stmt->errorInfo()[2];

    }
}


    public function read($tipo, $valor, $data, $descricao) {

    // Lógica para ler um registro do banco de dados

        $sql = "SELECT * FROM fluxo_de_caixa";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {

        echo "<table>";
        echo "<tr>";
        echo "<th><strong>NUMERO</strong></th>";
        echo "<th><strong>TIPO</strong></th>";
        echo "<th><strong>VALOR</strong></th>";
        echo "<th><strong>DATA</strong></th>";
        echo "<th><strong>DESCRIÇÃO</strong></th>";
        echo "</tr>";

        foreach ($result as $row) {

            $id = $row['id'];
            $tipo = $row['tipo'];
            $valor = $row['valor'];
            $data = $row['data'];
            $descricao = $row['descricao'];


            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$tipo</td>";
            echo "<td>$valor</td>";
            echo "<td>$data</td>";
            echo "<td>$descricao</td>";
            echo "</tr>";
        }

        echo "</table>";

    } else {

        return null;

    }
}


    public function update($id, $tipo, $valor, $data, $descricao) {

    // Lógica para atualizar um registro no banco de dados

    $sql = "UPDATE fluxo_de_caixa SET
                                tipo = :tipo
                              , valor = :valor
                              , data = :data
                              , descricao = :descricao

                              WHERE id = :id";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":tipo", $tipo);

    $stmt->bindParam(":valor", $valor);

    $stmt->bindParam(":data", $data);

    $stmt->bindParam(":descricao", $descricao);

    $stmt->bindParam(":id", $id);

    if ($stmt->execute()) {

        echo "Lançamento atualizado com sucesso!";

    } else {

        echo "Erro ao atualizar lançamento: " . $stmt->errorInfo()[2];
    }
}


    public function delete($id) {

    // Lógica para deletar um registro do banco de dados

        $sql = "DELETE FROM fluxo_de_caixa WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {

        echo " Lançamento deletado com sucesso!";

    } else {

        echo "Erro ao excluir lançamento: " . $stmt->errorInfo()[2];

    }
}



}
