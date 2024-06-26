<?php

//-------------------------------------------------------------
// Libraries
require_once 'lib/debug.php';
require_once 'lib/router.php';


//-------------------------------------------------------------
// Site Configuration
const SITE_NAME  = 'MotiveAuto';
const SITE_OWNER = 'Myles Smalley';


//-------------------------------------------------------------
// Initialise the router
$router = new Router(['debug' => true]);


//-------------------------------------------------------------
// Define routes

$router->route(GET, PAGE, '/',         'pages/home.php');
$router->route(GET, PAGE, '/addcar',   'pages/addcar.php');

$router->route(GET, PAGE, '/messages', 'pages/messages.php');


//-------------------------------------------------------------
// Generate the required view
$router->view();

?>
