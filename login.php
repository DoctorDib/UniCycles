<?php
include 'session.php';
include 'AvaliableBikes.php';
session_start();

function Login($username,$password)
{
    echo $_COOKIE['userPass'];
    echo $_COOKIE['userName'];
    if(empty($username))
    {
        $this->HandleError("UserName is empty!");
        $_SESSION['loggedIn'] = false;
        return false;
                }elseif(empty($password)) {
              $this->HandleError("Password is empty!");
              $_SESSION['loggedIn'] = false;
              return false;
                        }else if($username == $password) {
                         $_SESSION['loggedIn'] = false;
                         $this->HandleError("Password cannot be the same as Username");
                         }else {
                                connect();
                                $usernameCheck = "SELECT Forename, Surname FROM USER WHERE Email_Address = '$username';";
                                $passwordCheck = "SELECT Forename, Surname FROM USER WHERE Password = '$password';";

                                if(($usernameCheck == $username) && ($$passwordCheck == $password)){
                                        $_SESSION['loggedIn'] = true;
                                        loginRedirection('index.php', 'inCorrect.php');
                                     }
                                }

}