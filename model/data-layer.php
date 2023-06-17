<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');
try {
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}

function getDBPlayer()
{
    return new DBPlayer($this->dbh);
}

function getPlayers($dbPlayer)
{
    $dbPlayer->getAllPlayers();
}


function addPlayer()
{

}