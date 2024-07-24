
<?php

require_once 'lib/db.php';

//----------------------------------------------------------------------------

if(empty($_POST) && empty($_FILES)) die ('There was a problem uploading the file (probably too large)');

//----------------------------------------------------------------------------
// Get image data and type of uploaded file from the $_FILES super-global

[
    'data' => $imageData,
    'type' => $imageType
] = uploadedImageData($_FILES['image']);

//----------------------------------------------------------------------------
// Get other data from form via the $_POST super-global.

$year = $_POST['year'];
$make = $_POST['make'];
$model = $_POST['model'];
$description = $_POST['descrip'];
$price = $_POST['price'];


//----------------------------------------------------------------------------
// Insert the thing data and image into the database

$db = connectToDB();

$query = 'INSERT INTO cars
         (year, make, model, phototype, photodata, descrip, price) 
         VALUES(?, ?, ?, ?, ?, ?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$year, $make, $model, $description, $imageType, $imageData, $price]);
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Upload');
    die('There was an error adding picture to the database');
}

//----------------------------------------------------------------------------
// Back to see the new thing

header("Location: index.php");
