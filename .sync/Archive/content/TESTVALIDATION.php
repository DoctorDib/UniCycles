<?php
session_start();
$email = $_POST["email"];
$password = $_POST["password"];

$passwordHash = hash('sha512', $password); // generates 512 bit hash

$connection = connect();
$serverEmail = query("SELECT Email_Address FROM USER WHERE Email_Address = '$email';", 'Email_Address', $connection);
$serverPassword = query("SELECT PASSWORD FROM USER WHERE PASSWORD = '$passwordHash';",'PASSWORD', $connection);
if($email == "" || $password == ""){
    popUp("Please enter a username and password");
}
echo $passwordHash."                                                    ";
echo $serverPassword."        ";
if($email == $serverEmail && (string)$password == (string)$serverPassword){
    $_session['userID'] = "12";
    $_session['userID'] = query("SELECT USER_ID FROM USER WHERE EMAIL_ADDRESS = '$email';",'USER_ID',$connection);
    $_SESSION['loggedIn'] = true;
    $name = query("SELECT CONCAT(Forename, ' ', Surname) AS 'Fullname' FROM USER WHERE EMAIL_ADDRESS = '$email';", "Fullname", $connection);
    $_SESSION['Username'] = $name;
    echo $_SESSION['userID'];
    popUpCorrect("YEY LOGIN WORK");
}
else
{
    popUp("Username or Password is incorrect");
}

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

function popUp($param){
    ?>
    <script type="text/javascript">
        alert("Input Error.   <?php echo $param; ?>");
        history.back();
    </script>
    <?php
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