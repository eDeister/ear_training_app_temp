<?php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class DBPlayer
{
    private $_dbh;

    public function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

    public function getAllPlayers()
    {
        //Define
        $sql = "SELECT * FROM Player";
        //Prepare
        $statement = $this->_dbh->prepare($sql);
        //Execute
        $statement->execute();
        //Process
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPlayerById($playerId)
    {
        //Define
        $sql = "SELECT * FROM Player 
                WHERE player_id = :playerId";
        //Prepare
        $statement = $this->_dbh->prepare($sql);
        //Bind
        $statement->bindParams(':playerId', $playerId, PDO::PARAM_INT);
        //Execute
        $statement->execute();
        //Process
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function addPlayer($player)
    {
        //Define
        if(get_class($player) == "Instrumentalist") {
            $sql = "INSERT INTO Player (name, score, date, instrument) 
                    VALUES (:name, :score, :date, :instrument)";
        } else {
            $sql = "INSERT INTO Player (name, score, date)
                    VALUES (:name, :score, :date)";
        }
        //Prepare
        $statement = $this->_dbh->prepare($sql);
        //Bind
        $statement->bindParams(':name', $player->getName(), PDO::PARAM_STR);
        $statement->bindParams(':score', $player->getScore(), PDO::PARAM_INT);
        $statement->bindParams(':date', $player->getDate(), PDO::PARAM_STR);
        if(get_class($player) == "Instrumentalist") {
            $statement->bindParams(':instrument', $player->getInstrument(), PDO::PARAM_STR);
        }
        //Execute
        $statement->execute();
    }
}
