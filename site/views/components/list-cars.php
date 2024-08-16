<!-- Generate a list of things, e.g. from a database -->

<?php
    //Connecting to DB
    $db = connectToDB();

    //Selecting required fields from database
    $query = ' SELECT id, year, make, model
               FROM cars ORDER by price DESC';

    try{
        $stmt = $db->prepare($query);
        $stmt->execute();
        $cars = $stmt->fetchAll();
    }

    //Error message in case of issue
    catch (PDOException $e) {
        consoleLog($e->getMessage(), 'DB Fetch Cars');
        die('There was an error when getting cars from the database');
    }

    //Showing Car information from DB
    foreach ($cars as $car) {
        $previewURL = '/car/' . $car['id'];

        echo '<article>';

        echo '<a href="'.$previewURL.'">';
        echo    '<h2>';
        echo    $car ['year'];
        echo    ' ';
        echo    $car['make'];
        echo    ' ';
        echo    $car['model'];
        echo    '</h2>';
        echo   '<img src="/load-car-image.php?id=' . $car['id'] . '">';
        echo '</a>';
        echo '</article>';
    }

?>

