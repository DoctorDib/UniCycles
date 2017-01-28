<!DOCTYPE html>
<?php
include 'scripts\login.php';

?>
<html>

<head>
	<meta charset="UTF-8">
	<title>CodePen - Random Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css" />
</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>uni<span>Cycles</span></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="username" name="user" id="userNAME"><br>
				<input type="password" placeholder="password" name="password" id="userPASSWORD"><br>
				<input type="button" value="Login" ng-click="requestLogin()">
		</div>


</body>

<script src="js/loginMain.js"></script>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
<script>

		
		function requestLogin() {
		
			
			var userPass = document.getElementById('userPASSWORD').value;
			var userName = document.getElementById('userNAME').value;

		
			document.cookie("userName",userName);
			document.cookie("userPass",userPass);

			var Login = "<?php Login(); ?>";
			
			Login;
			
			if (userName == "<?php ( $username) ?>") {
				alert("WORKS");
			}
			else {
				alert("EPIC FAIL");
			}
		}

</script>
	
</html>