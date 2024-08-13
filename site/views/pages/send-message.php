<?php



        // Extract user from database
        
        $db = connectToDB();
    
        $query  = 'SELECT cars.user,
                            users.forename,
                            users.surname
        FROM cars
        JOIN users ON cars.user = users.id
        WHERE cars.id=?';
    
        try{
            $stmt = $db->prepare($query);
            $stmt->execute([$carid]);    // Car ID comes via router
            $user = $stmt->fetch();
        }
    
        catch (PDOException $e) {
            consoleLog($e->getMessage(), 'DB Fetch Users');
            die('There was an error when getting users from the database');
        }
    
    
?>

<h1>Send A Message to <?= $user['forename'] ?> <?= $user['surname'] ?></h1>

<form
    hx-post="/sendmessage"
    hx-trigger="submit"
    hx-swap="outerHTML"
>

    <input name="userid" type="hidden" value="<?= $user['user'] ?>">

    <label>Compose Message</label>
    <input name="body" type="text" required>

    <input type="submit" value="Send Message">
    
</form>