<?php
//Turn on error reports
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    $view = new Template();
    echo $view->render('views/home.html');
});

//Define a route for the leaderboard
$f3->route('GET /leaderboard', function() {
    $view = new Template();
    echo $view->render('views/leaderboard.html');
});

//Define a route for the quiz
$f3->route('GET /quiz', function() {
    $view = new Template();
    echo $view->render('views/quiz.html');
});

//Run fat free
$f3->run();
