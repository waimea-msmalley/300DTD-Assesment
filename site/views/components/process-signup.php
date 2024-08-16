<?php

// Get data from form
$fore = $_POST['forename'];
$sur  = $_POST['surname'];
$user = $_POST['user'];
$pass = $_POST['pass'];
// Hash the supplied password
$hash = password_hash($pass, PASSWORD_DEFAULT);
consoleLog($hash, 'Hashed Password');

//Connect
$db = connectToDB();
//Add user account
$query = 'INSERT INTO users (forename, surname, username, hash) VALUES(?, ?, ?, ?)';

$stmt = $db->prepare($query);
$stmt->execute([$fore, $sur, $user, $hash]);

echo '<h2>Account Created!</h2>';
