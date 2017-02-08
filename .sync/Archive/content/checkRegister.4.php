<?php
include '../scripts/connect.php';
include '../scripts/session.php';

// Creates a connection to the database
$conn = connect();

// Gets input from login page
$forename = strtoupper($_POST['Forename']);
$surname = strtoupper($_POST['Surname']);
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
    if ($forename == "" || $surname == "" || $UPnumber == "" || $year == "" || $day == "" || $month == "")
    {
        popUp("Some fields have not been filled in");
    }else

    $UPnumberLen = strlen($UPnumber);
    if($UPnumberLen != 6){
        popUp("Please ensure that your UP number is correct");
    }
        if(ctype_alpha($forename) && ctype_alpha($surname) && is_numeric($phoneNumber) && is_numeric($UPnumber)){
        }
        else {
            popUp('Please ensure all data in the fields is correct');
        }
}
else if($universityRole == "Lecturer" || $universityRole == "Other"){
    if($forename == "" || $surname == ""  || $phoneNumber == "" || $year == "" || $day == "" || $month == ""){
        popUp("Some fields have not been filled in");
    }
    else if(ctype_alpha($forename) && ctype_alpha($surname) && is_numeric($phoneNumber) && $UPnumber == ""){
    }
    else{
        popUp('Please ensure all data in the fields is correct');
}

}
$phoneLen = strlen($phoneNumber);
if($phoneLen != 11) {
    popUp("Please ensure that the phone number you entered is correct");
}

// Generate users e-mail
if($universityRole == "Student"){
    $email = $UPnumber."@myport.ac.uk";
}
else if($universityRole == "Lecturer" || $universityRole == "Other"){
    $email = $forename.".".$surname."@port.ac.uk";
}
else {
    popUp("Please ensure that you have chosen your role within the university");
}

// Check if password is the same as confirm password
$passwordBinary = hash('sha512', $password);;
$passwordCheckbinary = hash('sha512', $confirmPass);
if($passwordCheckbinary == $passwordBinary) {
    function passwordHash($password)
    {
        return $passwordHash = hash('sha512', $password); // generates 512 it hash
        echo $passwordHash;
    }
}else{
    echo "nvdks";
    popUp("Passwords do not match");
}

// Check if user is already in the database
if($universityRole == "Student"){
    StudentAlreadyUser($UPnumber,$conn);
}
else{
    //popUp("You have added");
}
if($universityRole == "Other"){
    lectureAlreadyUser($phoneNumber,$conn);
}else if($universityRole == "Other"){
    lectureAlreadyUser($phoneNumber,$conn);
}

$password = hash('sha512', $password);
 if($universityRole == 'Student'){
    query("INSERT into `user` (`User_ID`, `Forename`, `Surname`, `DoB`, `Email_Address`, `Phone`, `Is_Student`, `Is_Lecturer`, `Is_Other_Staff`, `UP_Number`, `password`) values('','$forename','$surname','$dateOfBirth','$email','$phoneNumber','1','0','0','$UPnumber','$password'");
    //popUpCorrect("You been succesfully added");
}
else if($universityRole == "Lecturer"){
    query("INSERT into `user` (`User_ID`, `Forename`, `Surname`, `DoB`, `Email_Address`, `Phone`, `Is_Student`, `Is_Lecturer`, `Is_Other_Staff`, `UP_Number`, `password`) values('','$forename','$surname','$dateOfBirth','$email','$phoneNumber','0','1','0','$UPnumber','$password'");
}
else if($universityRole == "Other"){
    query("INSERT into `user` (`User_ID`, `Forename`, `Surname`, `DoB`, `Email_Address`, `Phone`, `Is_Student`, `Is_Lecturer`, `Is_Other_Staff`, `UP_Number`, `password`) values('','$forename','$surname','$dateOfBirth','$email','$phoneNumber','0','0','1','$UPnumber','$password'");
}

function dateOfBirthCheck($day,$month,$year)
{
    if($day > 0 && $day < 32 && $month > 0 && $month < 13) {
        if (is_numeric($day) && is_numeric($month) && is_numeric($year)) {
            if ($year > 1900 && $year < 2001) {
                if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 9 || $month == 11 && days <= 30) {
                    return "$year/$month/$day";
                } else if ($month == 4 || $month == 6 || $month == 8 || $month == 10 || $month == 12 || $month == 1 && days <= 31) {
                    return "$year/$month/$day";
                } else if ($month == 2 && $day <= 28 || $month == 2 && $year % 4 == 0 && $day <=29) {
                    return "$year-$month-$day";
                }
            } else {
                return popUp("You need to be at least 16 to use this service");
            }
        }
        else {
            return popUp("Please ensure that the date is written in the correct format 01/01/2017");
        }
    }else {
        return popUp("Please ensure you Date of Birth is correct");
    }
}
function lectureAlreadyUser($UPindentify,$conn){
    $result = query("SELECT Phone FROM USER WHERE Phone = '$UPindentify';", Phone, $conn);
    if ($UPindentify == $result) {
        popUp("Lecture has already been registered");
        return false;
    } else {
       return true;
    }
}
function StudentAlreadyUser($UPindentify,$conn){
    include 'login.php';
    $result = query("SELECT UP_Number FROM USER WHERE UP_Number = '$UPindentify';", UP_Number, $conn);
    if ($UPindentify == $result) {
        popUp("Student ID has already been registered");
        return false;
    } else {

        return true;
    }
}

?>