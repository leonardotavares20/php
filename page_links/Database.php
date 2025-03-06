<?php
class Database {
    public $connection;
    public function  __construct($host, $port, $dbname, $username, $password) {
        $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4;";
        $this->connection = new PDO($dsn, username: $username, password: $password);
    }

    public function executeQuery($query): mixed {
       $statement = $this->connection->prepare($query);
       $sucess = $statement->execute();
       return $sucess ? $statement : false;
    }

    public function query($query): mixed {
        $statement = $this->executeQuery($query);
        return $statement ? $statement : [];
    }
}