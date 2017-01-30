<?php
include '../scripts/connect.php';

// Creates a connection to the database
$conn = connect();

// Gets input from login page
$forename = $_POST['Forename'];
$surname = $_POST['Surname'];
$UPnumber = $_POST['upNumber'];
$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['pass'];
$confirmPass = $_POST['cpass'];
$universityRole = $_POST['universityRole'];
// Date of Birth
$year = $_POST['year'];
$day = $_POST['day'];
$month = $_POST['month'];
$dateOfBirth = dateOfBirthCheck($day,$month,$year);

// Check that inputs are not blank and that correct fields are just text and others numeric.
if($universityRole == "Student") {
    if ($forename == "" || $surname == "" || $UPnumber == "" || $phoneNumber == "" || $year == "" || $day == "" || $month == "")
    {
        echo "Error inputs    ";
    }else
        if(ctype_alpha($forename) && ctype_alpha($surname) && is_numeric($phoneNumber) && is_numeric($UPnumber)){
            echo 'LO Corret inputs';
        }
        else {
            echo "Input Error";
        }
    }
else if($universityRole == "Lecturer" || $universityRole == "Other"){
    if($forename == "" || $surname == "" || $UPnumber == "" || $phoneNumber == "" || $year == "" || $day == "" || $month == ""){
        echo "LO Error inputs   ";
    }
    else if(ctype_alpha($forename) && ctype_alpha($surname) && is_numeric($phoneNumber) && is_numeric($UPnumber)){
        echo 'LO Corret inputs';
    } }
else{
    echo "SLO Error   ";
}
// Generate users e-mail
if($universityRole == "Student"){
    $email = $UPnumber."@myport.ac.uk";
}
else if($universityRole == "Lecturer" || $universityRole == "Other"){
    $email = $forename.".".$surname."@port.ac.uk";
}
else{
    echo "Error";
}
// Check if password is the same as confirm password
if($password != "" || $confirmPass != "" )
    {
         if ($password == $confirmPass) {
             $options = [
                 'cost' => 12,
             ];
             $passwordHash = hash('sha512',$password); // generates 512 it hash
         } else {
             echo "passwords are different      ";
         }
    }
else{
    echo "password empty";
}

// Check if user is already in the database
if($universityRole == "Student"){
    StudentAlreadyUser($UPnumber,$conn);
}
else if($universityRole == "Lecturer" || $universityRole == "Other"){
    lectureAlreadyUser($phoneNumber,$conn);
}
function dateOfBirthCheck($day,$month,$year)
{
    if(is_numeric($day) && is_numeric($month) && is_numeric($year)) {
        if($year > 1900) {
            if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 9 || $month == 11 && days <= 30) {
                return "$year/$month/$day";
            } else if ($month == 4 || $month == 6 || $month == 8 || $month == 10 || $month == 12 || $month == 1 && days <= 31) {
                return "$year/$month/$day";
            } else if ($month == 2 && $day <= 28) {
                return "$year/$month/$day";
            }
        }
    } else {
        echo "date is wrong";
    }
}

function lectureAlreadyUser($UPindentify,$conn){
    $result = query("SELECT Phone FROM USER WHERE Phone = '$UPindentify';", Phone, $conn);
    if ($UPindentify == $result) {
        echo 'lecturer number has already been added';
    } else {
        echo 'Lecturer number not added';
    }
}
function StudentAlreadyUser($UPindentify,$conn){
    include 'login.php';
        $result = query("SELECT UP_Number FROM USER WHERE UP_Number = '$UPindentify';", UP_Number, $conn);
        if ($UPindentify == $result) {
            echo 'Student number has already been added';
        } else {
            echo 'Student number not added';
        }
}

?>