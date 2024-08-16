

<?php
//Connect to DB
$db = connectToDB();

//Inserting message content, and who the message is from into the database
$query = 'INSERT INTO messages ( `from`, message)
            VALUES (?, ?)';

try{
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $message]);
}

//Error Message in case there is an issue
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Connect', ERROR);
    die('There was an error when adding your message to the database');
}

echo '<h2>Thank you for your message!</h2>';