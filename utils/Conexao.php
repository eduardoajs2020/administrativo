<?php
// Configurações de acesso ao banco de dados 

class Conexao {
    private static $db_host = "localhost";
    private static $db_user = "root";
    private static $db_pass = "10205618";
    private static $db_name = "administrativo";

    public static function getConnection() {
        $conn = "mysql:host=" . self::$db_host . ";dbname=" . self::$db_name;
         
        try {
            $conexao = new PDO($conn, self::$db_user, self::$db_pass);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        } catch (PDOException $e) {
            die("Falha na conexão com o banco de dados: " . $e->getMessage());
        }
    }
        
}



?>