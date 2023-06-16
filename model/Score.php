<?php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class Score
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllScores()
    {
        $query = "SELECT * FROM Score";
        $result = $this->db->executeQuery($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getScoreById($scoreId)
    {
        $query = "SELECT * FROM Score WHERE score_id = :scoreId";
        $params = [':scoreId' => $scoreId];
        $result = $this->db->executeQuery($query, $params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function addScore($scoreValue, $category)
    {
        $query = "INSERT INTO Score (score_value, category) VALUES (:scoreValue, :category)";
        $params = [
            ':scoreValue' => $scoreValue,
            ':category' => $category
        ];
        $this->db->executeQuery($query, $params);
    }
}
