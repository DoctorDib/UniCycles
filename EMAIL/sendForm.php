<?php
if(isset($_POST['email'])){
    $emailTo = "up766290@myport.ac.uk";
    $emailSubject = "Website Feedback";

    // Display error(s) function
    function died($error) {
        echo "Sorry! There were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // Validation
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['feedback'])) {
        died('Sorry! There appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name']; // Required
    $email = $_POST['email']; // Optional
    $feedback = $_POST['feedback']; // Required

    // Regular Expressions
    $nameRE = "/^[A-Za-z .'-]+$/";
    $emailRE = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";

    $erorrMessage = "";
    if(!preg_match($nameRE, $name)) {
        $erorrMessage .= 'The Name you entered does not appear to be valid.<br />';
    }
    if(!preg_match($emailRE, $email)) {
        $erorrMessage .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    if(strlen($errorMessage) > 0) {
        died($errorMessage);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    // Email Variables
    $emailMessage .= "Name: ".clean_string($name)."\n";
    $emailMessage .= "Email: ".clean_string($email)."\n";
    $emailMessage .= "Feedback: ".clean_string($feedback)."\n";

    // Email headers
    $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($emailTo, $emailSubject, $emailMessage, $headers);
}
?>
