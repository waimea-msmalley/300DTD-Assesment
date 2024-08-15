<!-- Generate a list of things, e.g. from a database -->

<?php
    
    $db = connectToDB();

    $query = ' SELECT id, user, year, make, model, descrip, price
               FROM cars 
               WHERE id=?';

    try{
        $stmt = $db->prepare($query);
        $stmt->execute([$id]);   // Note, ID comes from router
        $car = $stmt->fetch();
    }

    catch (PDOException $e) {
        consoleLog($e->getMessage(), 'DB Fetch Cars');
        die('There was an error when getting cars from the database');
    }

        consoleLog($car);

        echo '<article>';
        echo    '<h2>';
        echo    $car ['year'];
        echo    ' ';
        echo    $car['make'];
        echo    ' ';
        echo    $car['model'];
        echo    '</h2>';
        echo   '<img src="/load-car-image.php?id=' . $car['id'] . '">';
        echo ' ';
        echo '</article>';

        echo '<article>';
        echo    $car ['descrip'];
        echo ' <br>';
        echo    '<strong>$' . number_format($car ['price']) . '</strong>';
        echo ' ';
        echo '</article>';

        echo '<a id=button role="button" href="/message/'.$id.'">Message Owner About this Car<a>';
    
?>