<?php
// controllers/HomeController.php

class HomeController
{
    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }


    public function leaderboard()
    {
        $view = new Template();
        echo $view->render('views/leaderboard.html');
    }

    public function quiz()
    {
        $view = new Template();
        echo $view->render('views/quiz.html');
    }
    public function comment()
    {
        $view = new Template();
        echo $view->render('views/comment.html');
    }

    public function pitch()
    {
        $view = new Template();
        echo $view->render('views/piano.html');
    }
}
?>
