<?php 

class Database {

    private $dbname = 'PDO';
    private $username = 'root';
    private $password = 'root';

    protected function connectDatabase() {
        try {
            $database = new PDO("mysql:host=localhost;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            return $database;
        } catch(PDOException $errorMessage) {
            die('error : ' . $errorMessage->getMessage());
        }
    }
}