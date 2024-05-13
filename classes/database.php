<?php

class database {
    protected $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USERNAME, PASSWORD);
            echo "Database connected.";
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }
}

?>