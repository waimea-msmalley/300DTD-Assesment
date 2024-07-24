

<?php

$db = connectToDB();

$query = 'INSERT INTO messages ( `from`, message)
            VALUES (?, ?)';

try{
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $message]);
}

catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Connect', ERROR);
    die('There was an error when adding your message to the database');
}

echo '<h2>Thank you for your message!</h2>';