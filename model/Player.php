<?php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class Player
{
    private $_db;

    public function __construct()
    {
        $this->_db = new Database();
    }

    public function getAllPlayers()
    {
        //Define
        $sql = "SELECT * FROM Player";
        //Prepare
        $statement = $this->_db->prepare($sql);
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
        $statement = $this->_db->prepare($sql);
        //Bind
        $statement->bindParams(':playerId', $playerId, PDO::PARAM_INT);
        //Execute
        $statement->execute();
        //Process
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function addPlayer($name, $age, $instrument)
    {
        //Define
        $sql = "INSERT INTO Player (name, age, instrument) 
                VALUES (:name, :age, :instrument)";
        //Prepare
        $statement = $this->_db->prepare($sql);
        //Bind
        $statement->bindParams(':name',$name,PDO::PARAM_STR);
        $statement->bindParams(':age',$age,PDO::PARAM_INT);
        $statement->bindParams(':instrument',$instrument,PDO::PARAM_STR);
        //Execute
        $statement->execute();
    }
}
