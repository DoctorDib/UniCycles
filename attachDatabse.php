<?php
/**
 * Created by PhpStorm.
 * User: Matt Guest
 * Date: 23/01/2017
 * Time: 19:56
 */

function connectDatabase()
{
    $servername = "unicycles.ddns.net:157";
    $username = "root";
    $password = "unicycles";
    $databaseName = "test";
    $datain = $_POST["data"];

// Create database Connection
    $Connection = new mysqli($servername, $username, $password, $databaseName);
// Check Connection
    if ($Connection->connect_error) {
        die("Connection Failed:" . $Connection->connect_error);
    }
}

?>