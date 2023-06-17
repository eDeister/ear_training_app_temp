<?php

/**
 *
 * A data object used to add and retrieve data about players.
 *
 * Accepts PDO from a DataLayer object, uses the PDO to execute prepared statements which can
 * insert or select data about Player objects.
 *
 * @author Ethan Deister
 */
class DBPlayer
{
    private $_dbh;

    public function __construct($dbh)
    {
        $this->_dbh = $dbh;
    }

    /**
     *
     * Access all player records from database with SQL and PDO
     *
     * @return mixed An associative array containing all rows from the Player table
     */
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

    /**
     *
     * Get a specific player
     *
     * @param $playerId int The id of the player in question
     * @return mixed An associative array of the attributes of the player
     */
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

    /**
     *
     * Add one player record to the database
     *
     * @param $player Player A player object (constructed in the controller)
     * @return void
     */
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
        $statement->bindParam(':name', $player->getName(), PDO::PARAM_STR);
        $statement->bindParam(':score', $player->getScore(), PDO::PARAM_INT);
        $statement->bindParam(':date', $player->getDate(), PDO::PARAM_STR);
        if(get_class($player) == "Instrumentalist") {
            $statement->bindParam(':instrument', $player->getInstrument(), PDO::PARAM_STR);
        }
        //Execute
        $statement->execute();
    }
}
