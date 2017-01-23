<?php
$servername = 	"unicycles.ddns.net:157";
$username	=	"root";
$password	=	"unicycles";
$databaseName	=	"localhost";
$datain = $_POST["data"];

// Create database Connection
$Connection = new mysqli($servername,$username,$password,$databaseName);
// Check Connection
if($Connection->connect_error){
	die("Connection Failed:". $connection -> connect_error);
	}
	echo "<p>4";
?>