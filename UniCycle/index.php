<?php
    session_start();
    $_SESSION[login] = false;
    include '\scripts\Login.php';
    isLoggedIn();
?>