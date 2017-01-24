<?php
function isLoggedIn(){
    $correct = 'map.php';
    $alternative = 'logIn.php';
    if ($_SESSION['loggedIn'] != true) {
       header('location:'.$correct);
    } else {
        header('location:'.$alternative);
    }
    }
?>