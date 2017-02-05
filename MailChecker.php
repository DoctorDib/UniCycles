<?php
include "../connect.php";

// Create database Connection
$Connection = connect();
// Check Connection

$timeLimitQuery = "SELECT User_ID FROM Request WHERE (Time_of_Finish - Time_of_Depature < 00:05:00 && returned != True)";
$timeLimitResult = $connection-> query($timeLimitQuery);

if($timeLimitResult->num_rows>0){
	//do something witht he database
	while($row = $timeLimitResult->fetch_assoc()){
		$emailData = "SELECT ";
	}
	} else {
		
	}

$connection -> close();
?>