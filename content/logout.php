<?php 
	session_start();
	// sets your login status to false and unsets your email from the session.
	$_SESSION['loggedIn'] = false;
	
	unset($_SESSION['email']);

	
	header('Location: ../index.php');
?>