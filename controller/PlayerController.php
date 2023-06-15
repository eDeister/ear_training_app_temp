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
        // Render the view to display the players
        // You can use the Template class to render the view
        // Example: $view = new Template(); echo $view->render('views/players.html', ['players' => $players]);
    }

    public function getPlayerById($playerId)
    {
        $player = $this->player->getPlayerById($playerId);
        // Render the view to display the player details
        // Example: $view = new Template(); echo $view->render('views/player_details.html', ['player' => $player]);
    }

    public function addPlayer($name, $age, $instrument)
    {
        $this->player->addPlayer($name, $age, $instrument);
        // Redirect to the appropriate page after adding the player
        // Example: $f3->reroute('/players');
    }
}
