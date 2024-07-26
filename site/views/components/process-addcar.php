
<?php

require_once 'lib/db.php';

//----------------------------------------------------------------------------

if(empty($_POST) && empty($_FILES)) die ('There was a problem uploading the file (probably too large)');

//----------------------------------------------------------------------------
// Get image data and type of uploaded file from the $_FILES super-global
consoleLog($_FILES);

[
    'data' => $imageData,
    'type' => $imageType
] = uploadedImageData($_FILES['image']);

//----------------------------------------------------------------------------
// Get other data from form via the $_POST super-global.
consoleLog($_POST);

$year = $_POST['year'];
$make = $_POST['make'];
$model = $_POST['model'];
$description = $_POST['descrip'];
$price = $_POST['price'];

$userid = $_SESSION['user']['id'];

//----------------------------------------------------------------------------
// Insert the thing data and image into the database

$db = connectToDB();

$query = 'INSERT INTO cars
         (user, year, make, model, phototype, photodata, descrip, price) 
         VALUES(?, ?, ?, ?, ?, ?, ?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$userid, $year, $make, $model, $imageType, $imageData, $description, $price]);
}
catch (PDOException $e) {
    consoleError($e->getMessage(), 'DB Upload');
    die('There was an error adding picture to the database');
}

//----------------------------------------------------------------------------
// Back to see the new thing

header('hx-redirect: ' . SITE_BASE . '/home');
