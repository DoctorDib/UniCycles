<?php


ini_set('display_errors', 1);
// Catches error and displays it on screen for debugging purposes
error_reporting(E_ALL ^ E_NOTICE);
// Function no requirements
//Connects to the sql database which is hosted in it local area.
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
// Function parapmeters are a sql query, name of field and the connection to the database.
// Query's the database using the query provided and reruns the result from th field name specified and every result
// even if there is more thanone result.
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