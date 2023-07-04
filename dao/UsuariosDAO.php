<?php

require_once('UsuariosDAOinterface.php');


class UsuariosDAO implements UsuariosDAOinterface {

    private $connection;

    public function __construct($connection) {

        $this->connection = $connection;

    }

public function create($username, $password) {

    // Tokenização e criptografia da senha
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    // Lógica para criar um registro no banco de dados

    $sql = "INSERT INTO usuarios (    username
                                    , password
                                    )
                            VALUES (  :username
                                    , :password
                                    )";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":username", $username);

    $stmt->bindParam(":password", $hashedPassword);

    if ($stmt->execute()) {

        echo "Usuário cadastrado com sucesso!";

    } else {

        echo "Erro ao cadastrar o usuário: " . $stmt->errorInfo()[2];

    }
}

    public function read($username, $password) {

    // Lógica para ler um registro do banco de dados

        $sql = "SELECT * FROM usuarios";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
       
        require_once '../usuarios.php';
?>
        <link rel="StyleSheet" href="/css/styles.css">
        
        <table class="cabecalho">
        <tr>
        <th><strong>NUMERO</strong></th>
        <th><strong>USUARIO</strong></th>
        </tr>
<?php
        foreach ($result as $row) {

            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
?>
<?php
            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$username</td>";
            echo "</tr>";
        }
?>
         </table class="cabecalho">
<?php
    } else {

        return null;

    }
}

    public function update($username, $password, $id) {

     // Tokenização da senha
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Lógica para atualizar um registro no banco de dados

    $sql = "UPDATE usuarios SET 
                                username = :username
                              , password = :password 
                              
                              WHERE id = :id";

    $stmt = $this->connection->prepare($sql);

    $stmt->bindParam(":username", $username);

    $stmt->bindParam(":password", $hashedPassword);

    $stmt->bindParam(":id", $id); // Substitua o valor de $id com o ID do usuário a ser atualizado

    if ($stmt->execute()) {

        echo "Usuário atualizado com sucesso!";

    } else {

        echo "Erro ao atualizar o usuário: " . $stmt->errorInfo()[2];
    }
}

    public function delete($id) {

    // Lógica para deletar um registro do banco de dados

        $sql = "DELETE FROM usuarios WHERE id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {

        echo " Usuário excluido com sucesso!";

    } else {
        
        echo "Erro ao excluir usuario: " . $stmt->errorInfo()[2];
        
    }
 }

    public function login($username, $password) {

    // Lógica para buscar o registro do usuário no banco de dados
        $sql = "SELECT password FROM usuarios 
                                WHERE 
                                username = :username";

        $stmt = $this->connection->prepare($sql);

        $stmt->bindParam(":username", $username);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {

            $hashedPassword = $row['password'];

        // Verifica se a senha digitada corresponde ao hash armazenado
        if (password_verify($password, $hashedPassword)) {

            // Senha correta, faça o login
            echo "Login realizado com sucesso!";
           // header('Location:');

        } else {
            // Senha incorreta

            echo "Senha incorreta. Tente novamente.";
        }
    } else {
        // Usuário não encontrado

        echo "Usuário não encontrado.";
    }
}


}
