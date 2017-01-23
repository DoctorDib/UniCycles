<?php
function Connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "unicycle";
    $databaseName = "test";
    $datain = $_POST["data"];

// Create database Connection
    $connection = new mysqli($servername, $username, $password, $databaseName);
// Check Connection
    if ($connection->connect_error) {
        die("Connection Failed:" . $connection->connect_error);
    }
return $connection;
}

function freeSpaces($location){
    $connection = Connect();
    $mysql_qry = "SELECT * FROM testtable;";
     $result = mysqli_query($connection,$mysql_qry);
    if(mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
        echo $row["ID"];
        echo $row["Name"];
        echo $row["Number"];
	    }
	}
	return 5;
}

function bikesAvailable($location){
    $connection = Connect();
    $mysql_qry = "SELECT * FROM testtable;";
     $result = mysqli_query($connection,$mysql_qry);
    if(mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_array($result)) {
        echo $row["ID"];
        echo $row["Name"];
        echo $row["Number"];
	    }
	}
	return 5;
}
?>