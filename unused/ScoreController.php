<?php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
class ScoreController
{
    private $score;

    public function __construct()
    {
        $this->score = new DBScore();
    }

    public function getAllScores()
    {
        $scores = $this->score->getAllScores();
        // Render the view to display the scores
        // Example: $view = new Template(); echo $view->render('views/scores.html', ['scores' => $scores]);
    }

    public function getScoreById($scoreId)
    {
        $score = $this->score->getScoreById($scoreId);
        // Render the view to display the score details
        // Example: $view = new Template(); echo $view->render('views/score_details.html', ['score' => $score]);
    }

    public function addScore($scoreValue, $category)
    {
        $this->score->addScore($scoreValue, $category);
        // Redirect to the appropriate page after adding the score
        // Example: $f3->reroute('/scores');
    }
}
