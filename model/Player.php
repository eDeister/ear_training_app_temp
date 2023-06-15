<?php

class Player
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllPlayers()
    {
        $query = "SELECT * FROM Player";
        $result = $this->db->executeQuery($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPlayerById($playerId)
    {
        $query = "SELECT * FROM Player WHERE player_id = :playerId";
        $params = [':playerId' => $playerId];
        $result = $this->db->executeQuery($query, $params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function addPlayer($name, $age, $instrument)
    {
        $query = "INSERT INTO Player (name, age, instrument) VALUES (:name, :age, :instrument)";
        $params = [
            ':name' => $name,
            ':age' => $age,
            ':instrument' => $instrument
        ];
        $this->db->executeQuery($query, $params);
    }
}
