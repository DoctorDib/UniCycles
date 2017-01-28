
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    $to = 'up766290@myport.ac.uk';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

?>
