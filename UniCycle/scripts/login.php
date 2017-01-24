<?php
function isLoggedIn(){
    $correct = 'map.php';
    $alternative = 'map.php';
    if ($_SESSION['loggedIn'] != true) {
       header('location .'.$correct);
    } else {
        header('location: '.$alternative);
    }
    }
?>