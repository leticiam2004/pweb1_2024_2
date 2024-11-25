<?php

class db {

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $port = "3307";
    private $dbname ="db_pweb1_2024_2_blog";


    function conn(){

        try{
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->password,
                [
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND =>" SET NAMES utf8"
                ]
            );

            return $conn;

        } catch(PDOException $e){
            echo "Erro: ". $e->getMessage();
        }
    }
    public function insert($dados): void {
        $conn = $this->conn();
        $sql = "INSERT INTO categoria(nome) VALUES(?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$dados['nome']]);
    }

    public function all(){
        $conn = $this->conn();
        $sql = "SELECT * FROM categoria";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}