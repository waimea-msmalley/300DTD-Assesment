<!-- Main navigation menu. Can add logic for user type / access -->
<?php
    global $loggedIn;
?>

<!-- Showing links in header -->
<nav id="main-nav">

    <menu hx-boost="true">
        <?php if ($loggedIn): ?>
            <li><a href="/addcar">Add Car</a>
            <li><a href="/messages">Messages</a>
            <li><a href="/logout">Logout</a>

        
        <?php endif ?> 

    </menu>
</nav>


<!-- Update the nav links -->
<script>configureNav();</script>