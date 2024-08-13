<!-- Generate a list of things, e.g. from a database -->

<?php
    
    $myId = $_SESSION['user']['id'];

    $db = connectToDB();

    $query = ' SELECT messages.datetime,
                      messages.body,
                      users.forename,
                      users.surname
               FROM messages
               JOIN users ON messages.from = users.id
               WHERE messages.to = ?
               ORDER by datetime DESC';

    try{
        $stmt = $db->prepare($query);
        $stmt->execute([$myId]);
        $messages = $stmt->fetchAll();
    }

    catch (PDOException $e) {
        consoleLog($e->getMessage(), 'DB Fetch Messages');
        die('There was an error when getting your messages from the database');
    }

    if(!$messages) {
        echo '<h3>No messages for you!</h3>';
    }
    else {

        foreach ($messages as $message) {

            $timeStamp = new DateTimeImmutable($message['datetime']);
            $messageTime = $timeStamp->format('d M Y \a\t g:ia');

            echo '<article>';
            echo    '<p>Sent: ' . $messageTime;
            echo    '<p>From: ' . $message['forename'] . ' ' . $message['surname'];
            echo    '<p>Message: ' . $message['body'];
            echo '</article>';
        }
    }
    
