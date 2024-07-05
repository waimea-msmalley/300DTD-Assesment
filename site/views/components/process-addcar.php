<?php

require 'lib/db.php';

[
    'data' => $imgD,
    'type' => $imgT
] = uploadedImageData();

//Connect
$db = connectToDB();
//Add user account
$query = 'INSERT INTO cars (year, make, model, phototype, photodata, descrip, price) VALUES(?, ?, ?, ?, ?, ?, ?)';

$stmt = $db->prepare($query);
$stmt->execute([$imgT, $imgD]);
?>

<h2>Thing added Successfully!</h2>