<?php
class PlayerController
{
private $player;
private $database;

public function __construct()
{
$this->player = new Player();
$this->database = new Database();
}

public function getAllPlayers()
{
$players = $this->database->getAllData('player');
$view = new Template();
echo $view->render('views/players.html', ['players' => $players]);
}

public function getPlayerById($playerId)
{
$player = $this->database->executeQuery("SELECT * FROM player WHERE player_id = ?", [$playerId])->fetch(PDO::FETCH_ASSOC);
$view = new Template();
echo $view->render('views/player_details.html', ['player' => $player]);
}

public function addPlayer($name, $age, $instrument)
{
$data = [
'name' => $name,
'age' => $age,
'instrument' => $instrument
];
$this->database->insertData('player', $data);
//$f3->reroute('/players'); // Redirect to the appropriate page after adding the player
}
}
