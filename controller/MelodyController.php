<?php

class MelodyController
{
    private $melody;

    public function __construct()
    {
        $this->melody = new Melody();
    }

    public function getAllMelodies()
    {
        $melodies = $this->melody->getAllMelodies();
        // Render the view to display the melodies
        // Example: $view = new Template(); echo $view->render('views/melodies.html', ['melodies' => $melodies]);
    }

    public function getMelodyById($melodyId)
    {
        $melody = $this->melody->getMelodyById($melodyId);
        // Render the view to display the melody details
        // Example: $view = new Template(); echo $view->render('views/melody_details.html', ['melody' => $melody]);
    }

    public function addMelody($playerId, $scoreId)
    {
        $this->melody->addMelody($playerId, $scoreId);
        // Redirect to the appropriate page after adding the melody
        // Example: $f3->reroute('/melodies');
    }
}
