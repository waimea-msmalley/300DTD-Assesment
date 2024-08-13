<?php

// get userid / body from $_POST

consoleLog($_POST);

$userid = $_POST['id'];
$body   = $_POST['body']

// get your id from session (from)

$userid = $_SESSION['user']['id'];

// do an INSERT into messages table

$query = 'INSERT INTO messages
         (id, from, to, datetime, body) 
         VALUES(?, ?, ?, ?, ?,)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$id, $from, $to, $datetime, $body]);
}
catch (PDOException $e) {
    consoleError($e->getMessage(), 'DB Upload Message');
    die('There was an error adding your message to the database');
}


echo '<h2>Message Sent!</h2>';