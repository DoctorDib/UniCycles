<?php
function isLoggedIn($correct,$inCorrect){
    $correct = 'index.php';
    $inCorrect = 'notLoggedIn.php';
    if ($_SESSION['loggedIn'] != true) {
       header('location:'.$inCorrect);
    } else {
        header('location:'.$correct);
    }
    }
?>