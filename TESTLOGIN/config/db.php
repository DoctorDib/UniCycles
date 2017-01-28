<?php
function Connect()
{
    DB_HOST = "localhost";
    DB_USER = "root";
    DB_PASS = "unicycle";
    DB_NAME = "unicycle";
    datain = $_POST["data"];

// Create database Connection
    $connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// Check Connection
    if ($connection->connect_error) {
        die("Connection Failed:" . $connection->connect_error);
    }
    die("Connection Failed:" . $connection->connect_error);
    return $connection;
}

function freeSpaces($location,$connection){
           $connection = Connect();

    $mysql_qry = "SELECT SUM(Deopt_ID/'$location') FROM Bike WHERE Depot_ID = '$location';";
    $result = mysqli_query($connection,$mysql_qry);
    echo $result;
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            return $row["SUM(Depot_Id}"];
            return $result;
        }
    }
}

function bikesAvailable($location,$connection){
    //$connection = Connect();
    $mysql_qry = "SELECT (Maximum_Storage - SUM(deopt_id/'$location')) FROM Bike WHERE Depot_Location = '$location';";
    $result = mysqli_query($connection,$mysql_qry);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row["ID"];
            echo $row["Name"];
            echo $row["Number"];
        }
    }
    return 0;
}
?>