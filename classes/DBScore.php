<?php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class DBScore
{
    private $_dbh;

    public function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

    public function getAllScores()
    {
        $query = "SELECT * FROM Score";
        $result = $this->_dbh->executeQuery($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getScoreById($scoreId)
    {
        $query = "SELECT * FROM Score WHERE score_id = :scoreId";
        $params = [':scoreId' => $scoreId];
        $result = $this->_dbh->executeQuery($query, $params);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function addScore($scoreValue, $category)
    {
        $query = "INSERT INTO Score (score_value, category) VALUES (:scoreValue, :category)";
        $params = [
            ':scoreValue' => $scoreValue,
            ':category' => $category
        ];
        $this->_dbh->executeQuery($query, $params);
    }
}
