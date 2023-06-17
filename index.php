<?php

/*
 * Sajal Khadgi, Ethan Deister
 * 5/13/2023
 * 328/ear_training_app/index.php
 * Final Project
 */

//Turn on error reports
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload and datalayer
require_once('vendor/autoload.php');
require_once('model/data-layer.php');

//Create an instance of the Base class
$f3 = Base::instance();
$con = new Controller($f3);


// Define all routes using the controller methods
$f3->route('GET /', function() {
    $GLOBALS['con']->home();
});
$f3->route('GET /home', function() {
    $GLOBALS['con']->home();
});
$f3->route('GET /leaderboard', function() {
    $GLOBALS['con']->leaderboard();
});
$f3->route('GET|POST /quiz', function() {
    $GLOBALS['con']->quiz();
});
$f3->route('GET /pitch', function() {
    $GLOBALS['con']->pitch();
});
$f3->route('GET /comment', function() {
    $GLOBALS['con']->comment();
});

//Run fat free
$f3->run();
