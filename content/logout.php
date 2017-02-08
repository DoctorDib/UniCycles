<?php 
	session_start();
	$_SESSION['loggedIn'] = 0;
	
	unset($_SESSION['email']);

	
	header('Location: ../index.php');
?>