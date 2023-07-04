<?php

require_once('CobrancasDAOinterface.php');


class CobrancasDAO implements CobrancasDAOinterface {

    private $connection;

    public function __construct($connection) {

        $this->connection = $connection;

    }


public function create($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento ) {

    // Lógica para criar um registro no banco de dados

    $sql = "INSERT INTO cobrancas (  cliente_id
                                    , valor
                                    , modo_pagamento
                                    , data_vencimento
                                    , data_pagamento
                                    )
                            VALUES (  :cliente_id
                                    , :valor
                                    , :modo_pagamento
                                    , :data_vencimento
                                    , :data_pagamento
                                    )";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":cliente_id", $cliente_id);

    $stmt->bindParam(":valor", $valor);

    $stmt->bindParam(":modo_pagamento", $modo_pagamento);

    $stmt->bindParam(":data_vencimento", $data_vencimento);

    $stmt->bindParam(":data_pagamento", $data_pagamento);

    if ($stmt->execute()) {

        echo "Cobrança cadastrada com sucesso!";

    } else {

        echo "Erro ao cadastrar cobrança: " . $stmt->errorInfo()[2];

    }
}


    public function read($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento ) {

    // Lógica para ler um registro do banco de dados

        $sql = "SELECT * FROM cobrancas";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {

        require_once '../cobrancas.php';
?>
        <link rel="StyleSheet" href="/css/styles.css">
        
        <table class="cabecalho">
        <tr>
        <th><strong>CLIENTE</strong></th>
        <th><strong>VALOR</strong></th>
        <th><strong>MODALIDADE DE PAGAMENTO</strong></th>
        <th><strong>VENCIMENTO</strong></th>
        <th><strong>PAGAMENTO</strong></th>
        </tr>
<?php
        foreach ($result as $row) {

            $cliente_id = $row['cliente_id'];
            $valor = $row['valor'];
            $modo_pagamento = $row['modo_pagamento'];
            $data_vencimento = $row['data_vencimento'];
            $data_pagamento= $row['data_pagamento'];

            echo "<tr>";
            echo "<td>$cliente_id</td>";
            echo "<td>$valor</td>";
            echo "<td>$modo_pagamento</td>";
            echo "<td>$data_vencimento</td>";
            echo "<td>$data_pagamento</td>";
            echo "</tr>";
        }

        echo "</table>";

    } else {

        return null;

    }
}


    public function update($cliente_id, $valor, $modo_pagamento, $data_vencimento, $data_pagamento ) {

    // Lógica para atualizar um registro no banco de dados

    $sql = "UPDATE cobrancas SET
                                cliente_id = :cliente_id
                              , valor = :valor
                              , modo_pagamento = :modo_pagamento
                              , data_vencimento = :data_vencimento
                              , data_pagamento = :data_pagamento

                              WHERE id = :id";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":cliente_id", $cliente_id);

    $stmt->bindParam(":valor", $valor);

    $stmt->bindParam(":modo_pagamento", $modo_pagamento);

    $stmt->bindParam(":data_vencimento", $data_vencimento);

    $stmt->bindParam(":data_pagamento", $data_pagamento);

    //$stmt->bindParam(':id', $id);

    if ($stmt->execute()) {

        echo "Cobrança atualizada com sucesso!";

    } else {

        echo "Erro ao atualizar produto: " . $stmt->errorInfo()[2];
    }
}


    public function delete($id) {

    // Lógica para deletar um registro do banco de dados

        $sql = "DELETE FROM cobrancas WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {

        echo " Dados da cobrança deletados com sucesso!";

    } else {

        echo "Erro ao deletar dados da cobrança! " . $stmt->errorInfo()[2];

    }
}



}
