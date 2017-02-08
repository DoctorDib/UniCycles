<?php
echo"STEE";
session_start();
include "../scripts/session.php";
include "../scripts/connect.php";

$to = $_POST['To'];
$from = $_POST['From'];
$now = $_POST['now'];
$hour = $_POST['Hour'];
$min = $_POST['Minute'];
$day = $_POST['day'];
$month = $_POST['month'];
$bikeType = $_POST['bikeType'];

if(isset($_POST['now']) && $_POST['now'] == 'Yes') {
   // $time = localtime();
   // $date = getdate();
    $time = '12:00';
    $date = '2017-01-01';
}
else { $time = $hour.":".$min;
       $date = checkDate($month,$day);
}
if($to == $from){
    popUp("Destinations cannot be the same");
}
function checkDate($month,$day){
    if ($day > 0 && $day < 32 && $month > 0 && $month < 13) {
        if (is_numeric($day) && is_numeric($month)) {
            if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 9 || $month == 11 && $day <= 30) {
                return "2017-$month-$day";
            } else if ($month == 4 || $month == 6 || $month == 8 || $month == 10 || $month == 12 || $month == 1 && $day <= 31) {
                return "2017-$month-$day";
            } else if ($month == 2 && $day <= 28 || $month == 2 && "2017" % 4 == 0 && $day <= 29) {
                return "2017-$month-$day";
            }
        }
    } else {
        return popUp("Please ensure you Date is correct");
    }
}
function returnTime($hour,$min){
    $time = ($hour+2).":".$min;
    return $time;
}
$returnTime = returnTime();
$email = $_SESSION['email'];
//$userID = query("SELECT User_ID FROM USER WHERE Email_Address = '$email';",'User_ID',$conn);
//$bikeIDQuery = "SELECT Bike_ID FROM bike WHERE Bike_Type = '$bikeType' AND In_Use = FALSE || In_Use = NULL LIMIT 1;";
//$bikeID = mysqli_query($conn , $bikeIDQuery);
//$_SESSION['bikeID'] = $bikeID;
//mysqli_query($conn,"UPDATE `unicycle`.`bike` SET `In_Use` = TRUE WHERE `Bike_ID` = '$bikeiD' ;");
$mysql_qry = "INSERT INTO `unicycle`.`request` (`Request_ID`,`User_ID`,`Bike_From`,`Bike_To`,`Bike_ID`,`Time_Of_Departure`,`Date_Of_Departure`,`Return_time`,`Bike_Returned`)VALUES('Request_ID','$userID','$from','$to','$bikeID','$time','$date',$returnTime,FALSE);";
//     $conn = connect();
     $result = mysqli_query($conn ,$mysql_qry);
echo "to".$to,"from".$from,"now".$now,"hour".$hour,"min".$min,"day".$day,"month".$month,"type".$bikeType;