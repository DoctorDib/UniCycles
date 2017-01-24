<!DOCTYPE html>
<?php
    session_start();
    include '\scripts\AvaliableBikes.php';
    include '\scripts\Login.php';
    isLoggedIn();
    $connection = Connect();
?>
<html>
	<head>
		<meta charset = "utf-8">
		<title> UniCycles Website </title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="https://use.fontawesome.com/f289c3ee5e.js"></script>
	</head>

	<body>
		<article id="left">
			<ul>
				<article id="signin">
					<img src="pics/User.jpg" alt="UniCycles logo" style="width:200px;height:200px;">
					<h1> John.Smith </h1>
				</article>

				<li><a href=""> <i class="fa fa-home fa-lg" aria-hidden="true"></i> Home </a></li>
				<li><a href=""> <i class="fa fa-bicycle fa-lg" aria-hidden="true"></i> Reserve bike </a></li>
				<li><a href=""> <i class="fa fa-map fa-lg" aria-hidden="true"></i> Map </a></li>
				<li><a href=""> <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i> About Us </a></li>
				<li><a href=""> <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i> Report / Help </a></li>
			</ul>

			<ul id="ULbottom">
				<li><a href=""> <i class="fa fa-cogs fa-lg" aria-hidden="true"></i> </i> Settings </a></li>
				<li><a href=""> <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </i> Sign out </a></li>
			</ul>
		</article>

		<article id="right">
			<table style="width:100%">
				<tr>
					<th colspan="2" class="tableTitle"> Free Spaces </th>
				</tr>

				<tr>
					<td> Gunwarf Quays</td>
					<td>
						<?php
						 echo freeSpaces("Gunwarf Quays",$connection);
						?>
					</td>
				</tr>

				<tr>
					<td> University Library </td>
					<td>
						<?php
						echo freeSpaces("University Library",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> North Quarter</td>
					<td>
						<?php
						echo freeSpaces("North Quarter",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> Fratton Station </td>
					<td>
						<?php
						echo freeSpaces("Fratton Station",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> Langstone Campus </td>
					<td>
						<?php
						echo freeSpaces("Langstone Campus",$connection);
						?>
					</td>
				</tr>

				<tr>
					<td> Southsea Castle </td>
					<td>
						<?php
						echo freeSpaces("Southsea Castle",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> St Marys Hospital </td>
					<td>
						<?php
						echo freeSpaces("St Marys Hospital",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> Portsmouth and Southsea Station </td>
					<td>
						<?php
						echo freeSpaces("Portsmouth and Southsea Station",$connection);
						?>
					</td>
				</tr>
			</table>
			<table style="width:100%">
				<tr>
					<th colspan="2" class="tableTitle"> Bikes Avaiable </th>
				</tr>
				<tr>
					<td> Gunwarf Quays</td>
					<td>
						<?php
						echo bikesAvailable("Gunwarf Quays",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> University Library </td>
					<td>
						<?php
						echo bikesAvailable("University Library",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> North Quarter Campus </td>
					<td>
						<?php
						echo bikesAvailable("University Library",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> Fratton Station </td>
					<td>
						<?php
						echo bikesAvailable("Fratton Station",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td> Langstone Campus </td>
					<td>
						<?php
						echo bikesAvailable("Langstone Campus",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td>Southsea Castle</td>
					<td>
						<?php
						echo bikesAvailable("Southsea Castle",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td>St Marys Hospital</td>
					<td>
						<?php
						echo bikesAvailable("St Marys Hospital",$connection);
						?>
					</td>
				</tr>
				<tr>
					<td>Portsmouth and Southsea Station</td>
					<td>
						<?php
						echo bikesAvailable("Portsmouth and Southsea Station",$connection);
						?>
					</td>
				</tr>
			</table>

		</article>


		<img src="pics/Logo.png" alt="UniCycles logo">
	</body>
	
</html>