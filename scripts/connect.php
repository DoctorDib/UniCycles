<?php
function connect()
{
    $servername = "localhost";
    $username = "root";
    $password = "unicycle";
    $databaseName = "unicycle";
    //$datain = $_POST["data"];

// Create database Connection
    $conn = new mysqli($servername, $username, $password, $databaseName);
// Check Connection
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    }
    return $conn;
}

function query($mysql_qry, $fieldName,$connection){
    $result = $connection->query($mysql_qry);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            return $row[$fieldName];
        }
    }
    return "No Current Hire";
}
?>