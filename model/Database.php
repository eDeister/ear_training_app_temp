<?php

class Database
{
    private $host = 'localhost';
    private $dbname = 'sajalgre_ear_training';
    private $username = 'sajalgre_sajal';
    private $password = 'P@ssword1234';
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            die();
        }
    }

    public function executeQuery($query, $params = [])
    {
        try {
            $statement = $this->db->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            echo 'Query execution failed: ' . $e->getMessage();
            die();
        }
    }
}
