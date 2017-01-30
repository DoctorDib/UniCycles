<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>UniCycles - Login</title>
		<link rel="stylesheet" type="text/css" href="css/loginStyle.css" />
	</head>

	<body>

		<?php

			session_start();
			$_SESSION['visit'] = 0;
			// define variables and set to empty values
			$email = $password = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email = test_input($_POST["email"]);
				$password = test_input($_POST["password"]);
				$gender = test_input($_POST["gender"]);
			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		<div class="body"></div>

		<div class="grad"></div>
		<div class="header">
			<div>uni<span>Cycles</span></div>
		</div>
		
		
		<form class="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" placeholder="email" name="email" id="userNAME"><br>
			<input type="password" placeholder="password" name="password" id="userPASSWORD"><br>
			<input type="submit" value="submit" name="submit">
		</form>


			
			
		<?php
			include 'scripts/connect.php';
			include 'scripts/session.php';
			include "content/checkRegister.php";
			// Connects php to the database
			$connection = connect();

			/**
			* This is a function that searches the database for a arbitary query which is supplied in the function
			* calling
			* @param $mysql_qry - this is the query that is run in the database
			* @param $fieldName -  this is the name of the coloumn name once the query has been ran
			* @param $connection - this is the connection to the database
			* @return string - returns the outputted value from the database
			*/
			function query($mysql_qry, $fieldName,$connection){
				$result = $connection->query($mysql_qry);
				if(mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_array($result)) {
						return $row[$fieldName];
					}
				}
				return "not working";
			}
            // generates passwords hash
            $password = passwordHash($password);

			$serverEmail = query("SELECT Email_Address FROM USER WHERE EMAIL_ADDRESS = '$email';", 'Email_Address', $connection);
			$serverPassword = query("SELECT PASSWORD AS 'password' FROM USER WHERE PASSWORD = '$password'", 'password', $connection);
			
			if($_SESSION['visit'] == 0){
				$underText = "Please Enter E-mail and Password";
			}
			elseif ($_SESSION['visit'] == 1){
				$underText = "E-mail or Password is incorrect";
			}
			$var = logon($email,$serverEmail,$password,$serverPassword,$connection);
			function logon($email,$serverEmail,$password,$serverPassword,$connection)
			{
				if ($email == $serverEmail && $password == $serverPassword) {
					$_SESSION['loggedIn'] = true;
					$name = query("SELECT CONCAT(Forename, ' ', Surname) AS 'Fullname' FROM USER WHERE EMAIL_ADDRESS = '$email';", "Fullname", $connection);
					echo $name;
					$_SESSION['Username'] = $name;
					echo $_SESSION['Username'];
					unset($_SESSION['visit']);
					loginRedirection('index.php');

				}
				
				else {
					if ($email != $serverEmail || $password != $serverPassword) {
						$_SESSION['visit'] = 1;
					} else {
						if ($email == "" || $password == "") {
							$_SESSION['visit'] = 1;
						} else {

						}
					}
				}
			}

		?>
	</body>

	<script src="js/loginMain.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</html>