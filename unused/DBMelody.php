<?php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class DBMelody
{
    private $_dbh;

    public function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

    public function getAllMelodies()
    {
        //Define
        $sql = "SELECT * FROM Melody";
        //Prepare
        $statement = $this->_dbh->prepare($sql);
        //Execute
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMelodyById($melodyId)
    {
        //Define
        $sql = "SELECT * FROM Melody 
                WHERE melody_id = :melodyId";
        //Prepare
        $statement = $this->_dbh->prepare($sql);
        //Bind
        $statement->bindParams(':melodyId', $melodyId, PDO::PARAM_INT);
        //Execute
        $statement->execute();
        //Process
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function addMelody($playerId, $scoreId)
    {
        //Define
        $sql = "INSERT INTO Melody (player_id, score_id) 
                VALUES (:playerId, :scoreId)";
        //Prepare
        $statement = $this->_dbh->prepare($sql);
        //Bind
        $statement->bindParam(':playerId', $playerId, PDO::PARAM_INT);
        $statement->bindParam(':scoreId', $scoreId, PDO::PARAM_INT);
        //Execute
        $statement->execute();
    }
}
