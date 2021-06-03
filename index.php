<?php
//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
require_once ('model/data-layer.php');
require_once ('model/validation.php');

//Instantiate the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET|POST /Home', function($f3){

    //create data-layer and validation for login to workout tracker on home.html

    $view = new Template();
    echo $view->render('views/home.html');
});


$f3->route('GET|POST /', function($f3){

    //

    $view = new Template();
    echo $view->render('views/workoutType.html');
});

//Run fat free
$f3->run();