<?php

//-------------------------------------------------------------
// Libraries
require_once 'lib/debug.php';
require_once 'lib/router.php';
require_once 'lib/db.php';

//-------------------------------------------------------------
// Site Configuration
const SITE_NAME  = 'MotiveAuto';
const SITE_OWNER = 'Myles Smalley';

//-------------------------------------------------------------
// Setup our session
session_name('MotiveAuto');
session_start();

//-------------------------------------------------------------
// Initialise the router
$loggedIn = $_SESSION['user']['loggedIn'] ?? false;

//-------------------------------------------------------------
// Initialise the router
$router = new Router(['debug' => true]);


//-------------------------------------------------------------
// Define routes
//Starting Page
$router->route(GET, PAGE,  '/',         'pages/welcome.php');

//Log in-------------------------------------------------------------------
$router->route(GET, PAGE,  '/login',    'pages/login.php');
$router->route(POST, HTMX, '/login',    'components/process-login.php');

//Log out------------------------------------------------------------------
$router->route(GET, PAGE,  '/logout',    'components/process-logout.php');

//Sign-up Page-------------------------------------------------------------
$router->route(GET, PAGE,  '/signup',   'pages/signup.php');
$router->route(POST, HTMX, '/signup',   'components/process-signup.php');

//Home Page----------------------------------------------------------------
$router->route(GET, PAGE,  '/home',     'pages/home.php');
$router->route(GET, HTMX,  '/cars',     'components/list-cars.php');

//Add Car Page-------------------------------------------------------------
$router->route(GET, PAGE,  '/addcar',   'pages/addcar.php');
$router->route(POST, HTMX, '/addcar',   'components/process-addcar.php');

//Messages-----------------------------------------------------------------
$router->route(GET, PAGE, '/messages',  'pages/messages.php');
$router->route(GET, HTMX, '/messages',  'components/list-messages.php');
//Send Messages
$router->route(GET, PAGE, '/sendmessages',  'pages/send-message.php');
$router->route(GET, HTMX, '/sendmessages',  'components/process-sent-message.php');

//Car Info------------------------------------------------------------------
$router->route(GET, PAGE, '/carinfo',  'pages/car-info.php');

//-------------------------------------------------------------
// Generate the required view
$router->view();

?>
