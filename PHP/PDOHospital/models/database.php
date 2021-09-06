<?php

class Database
{

    private $dbname = 'hospitalE2N';
    private $username = 'root';
    private $password = 'root';
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->db;
        } catch (PDOException $errorMessage) {
            die('error : ' . $errorMessage->getMessage());
        }
    }

    /**
     * Get the value of db
     */ 
    public function getDb()
    {
        return $this->db;
    }
}
