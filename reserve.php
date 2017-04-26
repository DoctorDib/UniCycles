<?php
session_start();
$_SESSION['visit'] = 0;
// define variables and set to empty values
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = datatype($_POST["email"]);
    $password = datatype($_POST["password"]);
    $gender = datatype($_POST["gender"]);
}

function datatype($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Log In</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Email: <input type="text" name="email">
    <br><br>
    Password: <input type="password" name="password">
    <br><br>
    <input type="submit" name="submit" value="Submit">

</form>

<?php
include 'scripts/connect.php';
include 'scripts/session.php';
// Connects php to the database
$connection = connect();

/**
 * This is a function that searches the database for a arbitary query which is supplied in the function
 * calling
 * @param $mysql_qry - this is the query that is run in the database
 * @param $fieldName -  this is the name of the coloumn name once the query has been ran
 * @param $connection - this is the connection to the database
 * @return string - returns the outputted value from the database
 */
function query($mysql_qry, $fieldName,$connection){
    $result = $connection->query($mysql_qry);
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            return $row[$fieldName];
        }
    }
    return "not working";
}

?>

</body>
</html>
