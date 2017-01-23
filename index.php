<!DOCTYPE html>

<html>
<?php
    include '/Avaliable_bikes/AvaliableBikes.php';
?>
	<head>
		<meta charset = "utf-8">
		<title> UniCycles Website </title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="https://use.fontawesome.com/f289c3ee5e.js"></script>
	</head>


	<article id="left"> 
		<ul>
			<article id="signin">
				<p> RANDOM USER PICTURE
			</article>
			
			<li><a href=""> <i class="fa fa-home fa-lg" aria-hidden="true"></i> Home </a></li>
			<li><a href=""> <i class="fa fa-bicycle" aria-hidden="true"></i> Reserve bike </a></li>
			<li><a href=""> <i class="fa fa-map fa-lg" aria-hidden="true"></i> Map </a></li>
			<li><a href=""> <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i> About Us </a></li>
			<li><a href=""> <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i> Report / Help </a></li>
		</ul>
		
		<ul id="ULbottom">			
			<li><a href=""> <i class="fa fa-home fa-lg" aria-hidden="true"></i> Settings </a></li>
			<li><a href=""> <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i> Sign out </a></li>
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
                      echo simpleCall("7");
					?>
				</td>
			</tr>

			<tr>
				<td> University Library </td>
				<td> 2 </td>
			</tr>
			<tr>
				<td> North Quater </td>
				<td> 3 </td>
			</tr>
			<tr>
				<td> Fratton Station </td>
				<td> 15 </td>
			</tr>
			<tr>
				<td> Langstone Campus </td>
				<td> 8 </td>
			</tr>
			<tr>
				<td> Langstone Campus </td>
				<td> 8 </td>
			</tr>
			<tr>
				<td> Southsea Castle </td>
				<td> 8 </td>
			</tr>
			<tr>
				<td> St Marys Hospital </td>
				<td> 8 </td>
			</tr>
		</table>
		<table style="width:100%">
			<tr>
				<th colspan="2" class="tableTitle"> Bikes Avaiable </th>
			</tr>
			<tr>
				<td> Gunwarf Quays</td>
				<td> 0 </td>
			</tr>
			<tr>
				<td> University Library </td>
				<td> 13 </td>
			</tr>
			<tr>
				<td> North Quarter Campus </td>
				<td> 12 </td>
			</tr>
			<tr>
				<td> Fratton Station </td>
				<td> 0 </td>
			</tr>
			<tr>
				<td> Langstone Campus </td>
				<td> 7 </td>
			</tr>
			<tr>
				<td>Southsea Castle</td>
				<td></td>
			</tr>
			<tr>
				<td>St Marys Hospital</td>
				<td></td>
			</tr>
			<tr>
				<td>Portsmouth and Southsea Station</td>
				<td></td>
			</tr>
		</table>
		
	</article>
	
	<body>

		<img src="pics/Logo.png" alt="UniCycles logo">
		
	</body>
	
	
</html>