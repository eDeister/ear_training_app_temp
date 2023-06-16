<?php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class Melody
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllMelodies()
    {
        $query = "SELECT * FROM Melody";
        $result = $this->db->executeQuery($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMelodyById($melodyId)
    {
        $query = "SELECT * FROM Melody WHERE melody_id = :melodyId";
        $params = [':melodyId' => $melodyId];
        $result = $this->db->executeQuery($query, $params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function addMelody($playerId, $scoreId)
    {
        $query = "INSERT INTO Melody (player_id, score_id) VALUES (:playerId, :scoreId)";
        $params = [
            ':playerId' => $playerId,
            ':scoreId' => $scoreId
        ];
        $this->db->executeQuery($query, $params);
    }
}
