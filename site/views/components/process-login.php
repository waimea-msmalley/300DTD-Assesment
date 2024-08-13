<?php


$user = $_POST['user'];
$pass = $_POST['pass'];

$db = connectToDB();

$query = 'SELECT * FROM users WHERE username = ?';
//Try to find a user account with given username
$stmt = $db->prepare($query);
$stmt->execute([$user]);
$userData = $stmt->fetch();


consoleLog($userData, 'DB Data');

if ($userData) {
    if (password_verify($pass, $userData['hash'])){
        $_SESSION['user']['loggedIn'] = true;

        $_SESSION['user']['username'] = $userData['username'];
        $_SESSION['user']['forename'] = $userData['forename'];
        $_SESSION['user']['surname']  = $userData['surname'];
        $_SESSION['user']['id']       = $userData['id'];

        header('HX-Redirect: '.SITE_BASE.'/home');
    }
    else {
        echo '<h2>Incorrect Password!</h2>';
    }
}
else {
    echo '<h2>Invalid User!</h2>';
}

echo '<a role="button" href="/login/">Try again</a></p>';