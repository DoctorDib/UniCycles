<html>
<header>

</header>
</html>
<?php
include "../connect.php";

echo 'steve';
// Create database Connection
$Connection = connect();
// Check Connection
sendMail('up773015@myport.ac.uk',"YOU ARE AMAZING AT PHP","OMG YOUR PHP IS SO GOOD");
//$timeLimitQuery = "SELECT User_ID FROM Request WHERE (Time_of_Finish - Time_of_Depature < 00:05:00 && returned != True)";
//$timeLimitResult = $connection-> query($timeLimitQuery);

if($timeLimitResult->num_rows>0){
	//do something witht he database
	while($row = $timeLimitResult->fetch_assoc()){
		$emailData = "SELECT ";
	}
	} else {
		
	}

function sendMail($to,$subject,$message){
    $headers = 'From: uniCyclesPortsmouth.gmail.com' . "\r\n" .
        'Reply-To: uniCyclesPortsmouth.gmail.com\'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>
<script>
    header("Refresh: 5;url='unicycles.ddns.net:156/scripts/E-mail/MailChecker.php'");
