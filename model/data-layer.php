<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
try {
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
}
$dbPlayer = new DBPlayer($dbh);
$dbMelody = new DBMelody($dbh);
$dbScore = new DBScore($dbh);

function getScores($dbScore)
{
    $dbScore->getAllScores();
}

function getPlayers($dbPlayer)
{
    $dbPlayer->getAllPlayers();
}

function getMelodies($dbMelody)
{
    $dbMelody->getAllMelodies();
}

function getAllRecords()
{

}