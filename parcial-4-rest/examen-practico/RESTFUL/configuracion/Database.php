<?php

use PDO;
use PDOException;


class Database {
    private string $host = "127.0.0.0";
    private string $db_name = "productos";
    private string $username = "root";
    private string $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO (
                "mysql:host=". $this->host."dbname=".$this->db_name,
                $this->username, 
                $this->password
            );
            $this->conn->exec("set names utf8");

        } catch (PDOException $exception) {
            echo "Error en conexion a la base de datos: ". $exception->getMessage();
        }

        return $this->conn;
    }
}
?>