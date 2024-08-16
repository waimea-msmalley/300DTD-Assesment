<!-- Logging out, and destroying the session -->
<?php
    session_destroy();
    header('HX-Redirect: '. SITE_BASE.'/');
?>