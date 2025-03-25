<?php
class Database {
    public $connection;
    public function  __construct($config, $username = 'root', $password = '') {
        $dsn = 'mysql:' . http_build_query(data: $config, numeric_prefix: '', arg_separator: ';');
        $this->connection = new PDO($dsn, username: $username, password: $password, options: [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
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