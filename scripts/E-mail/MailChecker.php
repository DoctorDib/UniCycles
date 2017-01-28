<?php
$servername = 	"";
$username	=	"";
$password	=	"";
$databaseName	=	"localhost";
$datain = $_POST["data"];

// Create database Connection
$Connection = new mysqli($servername,$username,$password,$databaseName);
// Check Connection
if($Connection->connect_error){
	die("Connection Failed:". $connection -> connect_error);
	}
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