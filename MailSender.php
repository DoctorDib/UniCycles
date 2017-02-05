
<?php
sendMail();

function sendMail($to,$subject,$message){
    $headers = 'From: uniCyclesPortsmouth.gmail.com' . "\r\n" .
        'Reply-To: uniCyclesPortsmouth.gmail.com\'' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>
