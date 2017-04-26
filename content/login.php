
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>UniCycles - Login</title>
		<link rel="stylesheet" type="text/css" href="../css/loginStyle.css" />
	</head>

	<body>
	<div class="body"></div>

	<div class="grad"></div>
	<div class="header">
		<div>uni<span>Cycles</span></div>
	</div>



			<fieldset style="width:25%" class="register" id="loginForm">
				<legend>Login form</legend>
				
				<table>
					<form class="login" method="post" action="loginValidation.php" enctype="multipart/form-data">
						<input type="text" placeholder="email" name="email" id="userNAME" class="customLogin"><br>
						<input type="password" placeholder="password" name="password" id="userPASSWORD" class="customLogin"><br>
						<input type="submit" value="submit" name="submit" class="customLogin">	
					</form>
					<form action="../content/registration.php">
						<input type="submit" value="Not registered? Click here!">
					</form>
				</table>
			</fieldset>

	<script src="js/loginMain.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	</body>
</html>
