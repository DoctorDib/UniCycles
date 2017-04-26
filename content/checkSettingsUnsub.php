<?php
session_start();
session_start();
include "../scripts/session.php";
include "../scripts/connect.php";
// Displays any error essages for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', '1');

$conn = connect();
$email = $_SESSION['email'];

$userID = query("SELECT USER_ID FROM USER WHERE Email_Address = '$email';","USER_ID",$conn);

// creates a request in the database for the account to be removed, by adding the userId number to a table for deactivation.
$mysql_qry = "INSERT INTO `unicycle`.`deactivationrequest` 
	(`deactivationRequestNumber`, 
	`UserID`
	)
	VALUES
	('deactivationRequestNumber', 
	'$userID'
	);";
$conn = connect();
$result = mysqli_query($conn, $mysql_qry);
// Logs the user out
$_SESSION['loggedIn'] = false;
?>
<script type="text/javascript">
    alert("<?php echo "A deactivation request has been made, your account will be deactivated by a member of staff shortly"; ?>");
    window.location = "../index.php";
</script>