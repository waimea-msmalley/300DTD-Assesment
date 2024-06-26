<?php

require_once 'lib/db.php';

//Connect
$db = connectToDB();
//Add user account
$query = 'INSERT INTO cars (year,) VALUES(?)';

$stmt = $db->prepare($query);
$stmt->execute([$name]);
?>

<h2>Thing added Successfully!</h2>