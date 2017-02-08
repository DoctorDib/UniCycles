<?php
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

if(isset($_POST['now']) &&
    $_POST['now'] == 'Yes')

{$time = date_time_set(); $date = date_date_set();}
else { $time = $hour.":".$min;
        $date = checkDate($month,$date);
}

if($to == $from){
    popUp("Destinations cannot be the same");
}

function checkDate($month,$day){
    if ($day > 0 && $day < 32 && $month > 0 && $month < 13) {
        if (is_numeric($day) && is_numeric($month)) {
            if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 9 || $month == 11 && days <= 30) {
                return "2017-$month-$day";
            } else if ($month == 4 || $month == 6 || $month == 8 || $month == 10 || $month == 12 || $month == 1 && days <= 31) {
                return "2017-$month-$day";
            } else if ($month == 2 && $day <= 28 || $month == 2 && "2017" % 4 == 0 && $day <= 29) {
                return "2017-$month-$day";
            }
        }
    } else {
        return popUp("Please ensure you Date is correct");
    }
}
$email = $_SESSION['email'];
$userID = query("SELECT User_ID FROM USER WHERE Email_Address = '$email';",'User_ID',$conn);

$mysql_qry = "INSERT INTO `unicycle`.`request` 
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
        '$to',
        'Bike_ID',
        '$time',
        '$date',
        'Return_time',
        FALSE
    );";
     $conn = connect();
     $result = mysqli_query($conn ,$mysql_qry);
echo "to".$to,"from".$from,"now".$now,"hour".$hour,"min".$min,"day".$day,"month".$month,"type".$bikeType;