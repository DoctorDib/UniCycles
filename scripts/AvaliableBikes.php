<?php
// Function Takes input of a location (int representing the location), and connection to database
// Searches the database and counts the amount of available bikes in a certain location and returns it as varribale
function bikesAvailable($location,$connection){

    $mysql_qry = "SELECT COUNT(Depot_ID) AS 'AVALIABLEBIKES' FROM Bike WHERE Depot_ID = '$location';";
    $result = $connection->query($mysql_qry);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            return $row["AVALIABLEBIKES"];
        }
    }
}
// Function Takes input of a location (int representing the location), and connection to database
// Searches the database and counts the amount of free spaces in a certain location and returns it as varribale
function totalSpaces($location,$connection){
    //$connection = Connect();
    $mysql_qry = "SELECT Maximum_Storage FROM Depot WHERE Depot_ID = '$location';";
    $result = $connection->query($mysql_qry);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            return $row['Maximum_Storage'];
        }
    }
    return 0;
}
?>