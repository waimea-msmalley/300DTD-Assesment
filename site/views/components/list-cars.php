<!-- Generate a list of things, e.g. from a database -->

<?php
    
    $db = connectToDB();

    $query = ' SELECT id, year, make, model
               FROM cars ORDER by price DESC';

    try{
        $stmt = $db->prepare($query);
        $stmt->execute();
        $cars = $stmt->fetchAll();
    }

    catch (PDOException $e) {
        consoleLog($e->getMessage(), 'DB Fetch Cars');
        die('There was an error when getting cars from the database');
    }


    foreach ($cars as $car) {
        $previewURL = '/car/' . $car['id'];

        echo '<article
                hx-trigger="click"
                hx-get="' . $previewURL . '"
            >';
        echo    $car ['year'];
        echo ' ';
        echo    $car['make'];
        echo ' ';
        echo    $car['model'];
        echo   '<img src="/load-car-image.php?id=' . $car['id'] . '">';

        echo '</article>';
    }

?>

