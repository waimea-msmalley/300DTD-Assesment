<?php
    //-----------------------------------------------------------------
    // Load image from DB, responding with the data and correct MIME type
    //-----------------------------------------------------------------

    require_once 'lib/db.php';

    //--------------------------------------------------------------------------
    // ID of image should be in URL
    $id = $_GET['id'] ?? null;

    //--------------------------------------------------------------------------
    $db = connectToDB();

    // Get the image type and binary data
    $query = 'SELECT phototype, photodata FROM cars WHERE id=?';

    try {
        $stmt = $db->prepare($query);
        $stmt->execute([$id]);
        $car = $stmt->fetch();

        // Failed to get an image back?
        if (!$car) throw new Exception();
    }
    catch (Exception $e) {
        // Failed, so 404
        http_response_code(404);
        die();
    }

    //--------------------------------------------------------------------------
    // Got here, so all went well. Pass back the image data as a response
    header('Content-type: ' . $car['phototype']);
    echo $car['photodata'];

?>