<?php
require_once '../model/player.php';
require_once 'validation.php';
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
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
        // Perform server-side validation
        $errors = Validation::validatePlayerData($name, $age, $instrument);

        if (!empty($errors)) {
            // Handle validation errors (e.g., display error messages to the user)
            // ...
            return;
        }

        // Continue with adding the player
        $this->player->addPlayer($name, $age, $instrument);
        // Redirect to the appropriate page after adding the player
        // ...
    }
}
