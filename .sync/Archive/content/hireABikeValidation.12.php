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

}

echo "to".$to,"from".$from,"now".$now,"hour".$hour,"min".$min,"day".$day,"month".$month,"type".$bikeType;