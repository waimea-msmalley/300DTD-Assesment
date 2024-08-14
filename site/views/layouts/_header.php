<!-- Header typically has the site name which links to home page -->

<header id="main-header">
    
    <?php require '_nav.php'; ?>

    <?php if ($loggedIn) {
    echo '<p>Hello, ' . $_SESSION['user']['forename'] . '</p>';
    echo  '<a href="/home"><?= SITE_NAME ?></a>';
    }
?>

</header>

