<?php
session_start();

include "../scripts/session.php";
include "../scripts/connect.php";
$conn = connect();

$to = $_POST['bikeTo'];
$from = $_POST['bikeFrom'];
//$now = $_POST['now'];
$hour = $_POST['Hour'];
$min = $_POST['Minute'];
$day = $_POST['day'];
$month = $_POST['month'];
$bikeType = $_POST['bikeType'];
echo ($to + $from + $bikeType);

/*
if(isset($_POST['now']) && $_POST['now'] == 'Yes') {
    $time = localtime();
    $date = getdate();

    echo $time . ":" . $date;
}
else {
    $date = date('Y-m-d');
    $time = date('H:i');
}
$returnTime = date("H:i", strtotime('+3 hours'));
if($to == $from){
    popUp("Destinations cannot be the same");
}*/

/*$mysql = "INSERT INTO `unicycle`.`request`
	(`Request_ID`,
	`User_ID`,
	`Bike_From`,
	`Bike_To`,
	`Bike_ID`,
	`Time_Of_Departure`,
	`Date_Of_Departure`,
	`Return_time`,
	`Bike_Returned`
	)
	VALUES
    ('Request_ID',
        'User_ID',
        '$from',
        'Bike_To',
        'Bike_ID',
        'Time_Of_Departure',
        'Date_Of_Departure',
        'Return_time',
        'Bike_Returned'
    );";
*/





/*
$email = $_SESSION['email'];
$userID = query("SELECT User_ID FROM USER WHERE Email_Address = '$email';",'User_ID',$conn);
$bikeIDQuery = query("SELECT Bike_ID FROM bike WHERE Bike_Type = '$bikeType' AND In_Use = FALSE || In_Use = NULL LIMIT 1;");
$bikeID = mysqli_query($conn , $bikeIDQuery);
$_SESSION['bikeID'] = $bikeID;
mysqli_query($conn,"UPDATE `unicycle`.`bike` SET `In_Use` = TRUE WHERE `Bike_ID` = '$bikeiD' ;");
$mysql_qry = "INSERT INTO `unicycle`.`request` (`Request_ID`,`User_ID`,`Bike_From`,`Bike_To`,`Bike_ID`,`Time_Of_Departure`,`Date_Of_Departure`,`Return_time`,`Bike_Returned`)VALUES('Request_ID','$userID','$from','$to','$bikeID','$time','$date',$returnTime,FALSE);";
     $result = mysqli_query($conn ,$mysql_qry);
     echo "Done";
*/?>