<?php
//Turn on error reports
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

// Include the HomeController
require_once('controllers/HomeController.php');

//Create an instance of the Base class
$f3 = Base::instance();

// Create an instance of the HomeController
$homeController = new HomeController();

// Define the routes using the controller methods
$f3->route('GET /', [$homeController, 'home']);
$f3->route('GET /home', [$homeController, 'home']);
$f3->route('GET /leaderboard', [$homeController, 'leaderboard']);
$f3->route('GET /quiz', [$homeController, 'quiz']);
$f3->route('GET /pitch', [$homeController, 'pitch']);
$f3->route('GET /comment', [$homeController, 'comment']);

//Run fat free
$f3->run();
