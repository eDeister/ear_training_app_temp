<?php
/**
 *
 * Controller Class
 *
 * Responsible for routing and logic for the home, leaderboard, quiz, comment, and pitch pages.
 * @author : Sajal Khadgi, Ethan Deister
 */
class Controller
{
    private $_f3;
    private $_dbPlayer;

    function __construct($f3)
    {
        $this->_f3 = $f3;
        $this->_dbPlayer = getDBPlayer();
    }

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
        $this->_f3->set('players', $this->_dbPlayer->getAllPlayers());
        $view = new Template();
        echo $view->render('views/leaderboard.html');
    }

    /**
     * Displays the quiz page.
     */
    public function quiz()
    {
        //If the user just completed a quiz...
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            //And the appropriate data is set...
            if(!empty($_POST['name']) && !empty($_POST['score'])){
                //TODO: Populate with current date
                //Get the current date
                $date = '';
                //Create object of appropriate class depending on whether they are an instrumentalist or not
                if(!empty($_POST['instrument'])) {
                    $user = new Instrumentalist($_POST['name'], $_POST['score'], $date, $_POST['instrument']);
                } else {
                    $user = new Player($_POST['name'], $_POST['score'], $date);
                }
                //Add player to the database then reroute to leaderboard
                $this->_dbPlayer->addPlayer($user);
                $this->_f3->reroute('leaderboard');
            }
        }
        //Render the page
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

