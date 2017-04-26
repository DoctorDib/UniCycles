<?php

include 'session.php';
include 'AvaliableBikes.php';
session_start();
// Function takse an input of username and password.
// Ensures that the username and password are not empty and if they are it refuses login.
// It then ensures that the password and username given are the same as that in the database
// It then allows the user entry as 'logged in' and redirects them to the index page.
function Login($username,$password)
{
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