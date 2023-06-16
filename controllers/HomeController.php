<?php
// controllers/HomeController.php
/*@author Sajal Khadgi
Description: For learboard database and quiz*/
/**
 * Class HomeController
 * Responsible for handling actions related to the home, leaderboard, quiz, comment, and pitch pages.
 * @author : Sajal Khadgi
 */
class HomeController
{
    /**
     * Displays the home page.
     */
    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Displays the leaderboard page.
     */
    public function leaderboard()
    {
        $view = new Template();
        echo $view->render('views/leaderboard.html');
    }

    /**
     * Displays the quiz page.
     */
    public function quiz()
    {
        $view = new Template();
        echo $view->render('views/quiz.html');
    }

    /**
     * Displays the comment page.
     */
    public function comment()
    {
        $view = new Template();
        echo $view->render('views/comment.html');
    }

    /**
     * Displays the pitch page.
     */
    public function pitch()
    {
        $view = new Template();
        echo $view->render('views/piano.html');
    }
}
?>
