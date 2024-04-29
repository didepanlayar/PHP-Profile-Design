<?php

class database {
    public $host            = "localhost";
    public $database_name   = "database_name";
    public $username        = "username";
    public $password        = "password";
    protected $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
            echo "Database connected.";
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
}

?>