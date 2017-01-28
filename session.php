<?php
session_start();
function loginRedirection($correct,$inCorrect){
    if ($_SESSION['loggedIn'] != true) {
        header('location:' . $inCorrect);
    } else {
        header('location:'.$correct);
    }
}

    function username(){
        if ($_SESSION['loggedIn'] == true){
            $_SESSION['Username'] = "Display loged in name";
            echo $_SESSION['Username'];
    }
    else{
        echo $_SESSION['Username'] = "Not Logged In";
    }
}
?>