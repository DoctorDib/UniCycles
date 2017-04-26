<html>
<header>

</header>
</html>
<?php
include "../connect.php";


// Create database Connection
$Connection = connect();
// Check Connection
sendMail('up766290@myport.ac.uk',"YOU ARE AMAZING AT PHP","OMG YOUR PHP IS SO GOOD");

// Function - inputs email address, subject of email and message in email
// Sends an email to the email address given from uniCyclesPortsmouth.gmail.com containting the message
function sendMail($to,$subject,$message){
    $headers = 'From: uniCyclesPortsmouth.gmail.com' . "\r\n" .
        'Reply-To: uniCyclesPortsmouth.gmail.com\'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>

