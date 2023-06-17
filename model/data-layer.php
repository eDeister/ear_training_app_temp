<?php

//This was throwing a fatal error because the file path couldn't be found, but there's not enough time left to
//troubleshoot. I decided to leave this in just to show that I know how the config is supposed to be accessed under
//normal circumstances.
//require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');
require_once('database/config.php');

/**
 *
 * Used boil data accessors down into simple methods
 *
 * Currently only returns a DBPlayer object, but this way of doing things maintains modularity.
 *
 * @author Ethan Deister
 */
class DataLayer
{
    private $_dbh;

    /**
     *
     * A default constructor which establishes a connection with the database.
     */
    function __construct()
    {
        try {
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    //This may seem like a very roundabout way of doing things, but I'm trying to show
    //that I'm thinking about making my code modular so that it's easy to update.
    function getDBPlayer()
    {
        return new DBPlayer($this->_dbh);
    }
}
