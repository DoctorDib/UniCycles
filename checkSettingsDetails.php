<?php
session_start();
include "../scripts/session.php";
include "../scripts/connect.php";
error_reporting(E_ALL);
ini_set('display_errors', '1');
$forename = $_POST['newForename'];
$surname = $_POST['newLastname'];
$phoneNumber = $_POST['newPhoneNumber'];
$universityRole = $_POST['universityRole'];
if(ctype_alpha($forename) && ctype_alpha($surname) && is_numeric($phoneNumber)){
}
else{
    popUp('Please ensure all data in the fields is correct');
}
$phoneLen = strlen($phoneNumber);
if($phoneLen != 11) {
    popUp("Please ensure that the phone number you entered is correct");
}
if($universityRole == "Student" || $universityRole == "Lecturer" || $universityRole == "Other"){

}
else{
    popUp("Please enter a valid university role");
}

$conn = connect();
$email = $_SESSION['email'];
$userID = query("SELECT USER_ID FROM USER WHERE Email_Address = '$email';","USER_ID",$conn);
echo "                                                               ".$userID."                                    ";
if($universityRole == "Student") {

    $mysql_update = "
UPDATE `unicycle`.`user` 
	SET
	`Forename` = '$forename', 
	`Surname` = '$surname', 
	`Phone` = '$phoneNumber', 
	`Is_Student` = True, 
	`Is_Lecturer` = FALSE, 
	`Is_Other_Staff` = FALSE,
	WHERE
	`User_ID` = '$userID' ;";
    mysqli_query($conn,$mysql_update);
    $_SESSION['Username'] = $forename." ".$surname;
    reDirect();

}
else if($universityRole == "Lecturer"){

    $mysql_update = "
UPDATE `unicycle`.`user` 
	SET
	`Forename` = '$forename', 
	`Surname` = '$surname', 
	`Phone` = '$phoneNumber', 
	`Is_Student` = FALSE, 
	`Is_Lecturer` = TRUE, 
	`Is_Other_Staff` = FALSE, 
	WHERE
	`User_ID` = '$userID' ;";
    mysqli_query($conn,$mysql_update);
    $_SESSION['Username'] = $forename." ".$surname;
    reDirect();

}
else if($universityRole == "Other"){
    $mysql_update = "
UPDATE `unicycle`.`user` 
	SET
	`Forename` = '$forename', 
	`Surname` = '$surname', 
	`Phone` = '$phoneNumber', 
	`Is_Student` = FALSE, 
	`Is_Lecturer` = FALSE, 
	`Is_Other_Staff` = TRUE, 
	WHERE
	`User_ID` = '$userID' ;";
    mysqli_query($conn,$mysql_update);
    $_SESSION['Username'] = $forename." ".$surname;
    reDirect();
}
else
{
    popUp("Error");
}

function reDirect(){
    ?>
    <script type="text/javascript">
        window.location = "../index.php";
    </script>
    <?php
}