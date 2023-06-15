<?php

class PlayerController
{
    private $player;

    public function __construct()
    {
        $this->player = new Player();
    }

    public function getAllPlayers()
    {
        $players = $this->player->getAllPlayers();
        $view = new Template();
        echo $view->render('views/players.html', ['players' => $players]);
    }

    public function getPlayerById($playerId)
    {
        $player = $this->player->getPlayerById($playerId);
        $view = new Template();
        echo $view->render('views/player_details.html', ['player' => $player]);
    }

    public function addPlayer($name, $age, $instrument)
    {
        $this->player->addPlayer($name, $age, $instrument);
        //$f3->reroute('/players'); // Redirect to the appropriate page after adding the player
    }
}
