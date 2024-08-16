<?php

// get userid / body from $_POST

consoleLog($_POST);

$recipientId = $_POST['userid'];
$body   = $_POST['body'];

// get your id from session (from)

$senderId = $_SESSION['user']['id'];

// do an INSERT into messages table
$db = connectToDB();

$query = 'INSERT INTO messages
         (`from`, `to`, `body`) 
         VALUES(?, ?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$senderId, $recipientId, $body]);
}
//Error Message in case there is an issue
catch (PDOException $e) {
    consoleError($e->getMessage(), 'DB Upload Message');
    die('There was an error adding your message to the database');
}


echo '<h2>Message Sent!</h2>';