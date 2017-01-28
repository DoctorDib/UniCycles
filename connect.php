<?php
function Connect()
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
?>