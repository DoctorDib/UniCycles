<?php
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
{$now = TRUE;}
else { $now = FALSE;}

if($to == $from){
    popUp("Destinations cannot be the same");
}

    if($day > 0 && $day < 32 && $month > 0 && $month < 13) {
        if (is_numeric($day) && is_numeric($month)) {
                if ($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 9 || $month == 11 && days <= 30) {
                    return "$year/$month/$day";
                } else if ($month == 4 || $month == 6 || $month == 8 || $month == 10 || $month == 12 || $month == 1 && days <= 31) {
                    return "$year/$month/$day";
                } else if ($month == 2 && $day <= 28 || $month == 2 && $year % 4 == 0 && $day <=29) {
                    return "$year-$month-$day";
                }
            }
    }else {
        return popUp("Please ensure you Date is correct");
}


echo "to".$to,"from".$from,"now".$now,"hour".$hour,"min".$min,"day".$day,"month".$month,"type".$bikeType;