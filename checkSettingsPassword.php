<?php
session_start();
$email = $_SESSION['email'];
include "../scripts/session.php";
include "../scripts/connect.php";
$conn  = connect();
error_reporting(E_ALL);
ini_set('display_errors', '1');
$password = $_POST['password'];
$confirmPass = $_POST['passwordConfirm'];
echo "done1";
if($password == ""  || $confirmPass == ""){
    popUp("Passwords are empty");
}
echo "done2";
// Check if password is the same as confirm password
$passwordBinary = hash('sha512', $password);;
$passwordCheckbinary = hash('sha512', $confirmPass);
echo $password;
echo "    ";
echo  hash('sha512', $password);
if($passwordCheckbinary == $passwordBinary) {
  $userID = query("SELECT USER_ID FROM USER WHERE Email_Address = '$email';","USER_ID",$conn);
  $mysqlQuery = "
  Update User
      set password = '$passwordBinary'
      where User_ID = '$userID';";
        mysqli_query($conn,$mysqlQuery);
        echo "done3";
        echo "        " + $passwordBinary + "      "+ $password;
}else{
    popUp("Passwords do not match");
}

