<?php
session_start();
include '../scripts/connect.php';
include '../scripts/session.php';
$_Session['hasPassed'] = True;
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
        $_Session['hasPassed'] = False;
    }else
// checks the length of the UP number is equivilant to the iniversity standard of 6 digits
    $UPnumberLen = strlen($UPnumber);
    if($UPnumberLen != 6){
        popUp("Please ensure that your UP number is correct");
        $_Session['hasPassed'] = False;
    }
    // checks and makes sure only letters and used in the forname
        if(ctype_alpha($forename) && ctype_alpha($surname) && is_numeric($phoneNumber) && is_numeric($UPnumber)){
        }
        else {
            popUp('Please ensure all data in the fields is correct');
            $_Session['hasPassed'] = False;
        }
}
else if($universityRole == "Lecturer" || $universityRole == "Other"){
    if($forename == "" || $surname == ""  || $phoneNumber == "" || $year == "" || $day == "" || $month == ""){
        popUp("Some fields have not been filled in");
        $_Session['hasPassed'] = False;
    }
    else if(ctype_alpha($forename) && ctype_alpha($surname) && is_numeric($phoneNumber) && $UPnumber == ""){
    }
    else{
        popUp('Please ensure all data in the fields is correct');
        $_Session['hasPassed'] = False;
}

}
// Checks the length of the phone number to ensure it is 11 digits long
$phoneLen = strlen($phoneNumber);
if($phoneLen != 11) {
    popUp("Please ensure that the phone number you entered is correct");
    $_Session['hasPassed'] = False;
}

// Generate users e-mail
if($universityRole == "Student"){
    $email = $UPnumber."@myport.ac.uk";
}
else if($universityRole == "Lecturer" || $universityRole == "Other"){
    $email = strtolower($forename).".".strtolower($surname)."@port.ac.uk";
}
else {
    popUp("Please ensure that you have chosen your role within the university");
    $_Session['hasPassed'] = False;
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
    popUp("Passwords do not match");
    $_Session['hasPassed'] = False;
}

// Check if user is already in the database
if($universityRole == "Student"){
    StudentAlreadyUser($UPnumber,$conn);
    $email = $UPnumber."@myport.ac.uk";
}
else if($universityRole == "Lecturer"){
    lectureAlreadyUser($phoneNumber,$conn);
    $email = strtolower($forename).".".strtolower($surname)."@port.ac.uk";
}else if($universityRole == "Other"){
    lectureAlreadyUser($phoneNumber,$conn);
    $email = strtolower($forename).".".strtolower($surname)."@port.ac.uk";
}
// If it has passed all the checks it adds the user to the database
if($_Session['hasPassed']) {
    $password = hash('sha512', $password);
    if ($universityRole == 'Student') {
        $mysql_qry = "INSERT INTO `unicycle`.`user`
	(`User_ID`,
	`Forename`,
	`Surname`,
	`DoB`,
	`Email_Address`,
	`Phone`,
	`Is_Student`,
	`Is_Lecturer`,
	`Is_Other_Staff`,
	`UP_Number`,
	`password`
	)
	VALUES
	('User_ID',
	'$forename',
	'$surname',
	'$dateOfBirth',
	'$email',
	'$phoneNumber',
	TRUE,
	FALSE,
	FALSE,
	'$UPnumber',
	'$password'
	);";
        //sendEmail($forename,$email);
        $result = mysqli_query($conn, $mysql_qry);
    } else if ($universityRole == "Lecturer") {
        $mysql_qry = "INSERT INTO `unicycle`.`user`
	(`User_ID`,
	`Forename`,
	`Surname`,
	`DoB`,
	`Email_Address`,
	`Phone`,
	`Is_Student`,
	`Is_Lecturer`,
	`Is_Other_Staff`,
	`UP_Number`,
	`password`
	)
	VALUES
	('User_ID',
	'$forename',
	'$surname',
	'$dateOfBirth',
	'$email',
	'$phoneNumber',
	FALSE,
	TRUE,
	FALSE,
	'$UPnumber',
	'$password'
	);";
        $result = mysqli_query($conn, $mysql_qry);
        //sendEmail($forename,$email);
    } else if ($universityRole == "Other") {
        $mysql_qry = "INSERT INTO `unicycle`.`user`
	(`User_ID`,
	`Forename`,
	`Surname`,
	`DoB`,
	`Email_Address`,
	`Phone`,
	`Is_Student`,
	`Is_Lecturer`,
	`Is_Other_Staff`,
	`UP_Number`,
	`password`
	)
	VALUES
	('User_ID',
	'$forename',
	'$surname',
	'$dateOfBirth',
	'$email',
	'$phoneNumber',
	FALSE,
	FALSE,
	TRUE,
	'$UPnumber',
	'$password'
	);";
        $result = mysqli_query($conn, $mysql_qry);
        //sendEmail($forename,$email);
    }
    ?>
    <script type="text/javascript">
        alert("<?php echo "Report has been submitted"; ?>");
                    window.location = "../content/login.php";
                </script>
<?php
    sendEmail($forenamen,$email);
}
else {

}

// Function takes parameters of day month and year as ints and checks if they are valid dates
function dateOfBirthCheck($day,$month,$year)
{
    if($day > 0 && $day < 32 && $month > 0 && $month < 13) {
        if (is_numeric($day) && is_numeric($month) && is_numeric($year)) {
            if ($year > 1900 && $year < 2001) {
                if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 9 || $month == 11 && $day <= 30) {
                    return "$year-$month-$day";
                } else if ($month == 4 || $month == 6 || $month == 8 || $month == 10 || $month == 12 || $month == 1 && $day <= 31) {
                    return "$year-$month-$day";
                } else if ($month == 2 && $day <= 28 || $month == 2 && $year % 4 == 0 && $day <=29) {
                    return "$year-$month-$day";
                }
            } else {
                $_Session['hasPassed'] = False;
                return popUp("You need to be at least 16 to use this service");

            }
        }
        else {
            $_Session['hasPassed'] = False;
            return popUp("Please ensure that the date is written in the correct format 01/01/2017");
}
}else {
        $_Session['hasPassed'] = False;
    return popUp("Please ensure you Date of Birth is correct");

}
}
// Function takes parameters of forenames and email and sends and email of the below text to the user after subscribing.
function sendEmail($forename,$email){
    /*sendMail($email,"Registration to Unicycles"," Hey ".$forename."! /r/n
Thank you for registering for Unicycles! /r/n

You can start to hire bikes straight away now! To do so please head over to our website unicycles.ddns.net:156 log in and click on Hire a Bike. It can't be simpler. /r/n

If you need to know anything you can look on our website. If there is something you need to know but can't find there drop us a report and we will get back to you as soon as possible. /r/n

Thank you again for your registration. If you have any questions, please let me know. /r/n

Regards, /r/n
UniCycle Team
");*/
}
// Function, takes parameters of up identify and connection and searches the database for a matching phone number
// this is to determine if the lecture has already subscribed to the service.
function lectureAlreadyUser($UPindentify,$conn){
    $result = query("SELECT Phone FROM USER WHERE Phone = '$UPindentify';", Phone, $conn);
    if ($UPindentify == $result) {
        popUp("Lecture has already been registered");
        return false;
    } else {
       return true;
    }
}
// Function, takes parameters of up identify and connection and searches the database for a matching up number
// this is to determine if the student has already subscribed to the service.
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