<?php
        // Extract users from database
     $sql = 'SELECT *
            FROM users
            ORDER BY forename ASC';
        
// $members=getRecords($sql);
?>

<h1>Send A Message!</h1>

<form
    hx-post="/sendmessages"
    hx-trigger="submit"
>

        <label>Send to</label>
        <select name="users">
    <?php
            // creating dropbox of the members extracted
        foreach ($users as $users) {
            echo '<option value="'.$user['id'].'">'.$user['name'].'</option>';
        }

    ?>
            </select>

    <label>Compose Message</label>
    <input name="body" type="text" required>

    <input type="submit" value="Send Message">
    
</form>