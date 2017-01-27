<<<<<<< HEAD
<?php
// Starts a session to hold varriables between pages
session_start();
include '\scripts\AvaliableBikes.php';
include '\scripts\session.php';
username("Not Logged In");
//isLoggedIn();
$connection = Connect();
?>
<html>
<head>
    <meta charset = "utf-8">
	<meta name="viewport" content="width=device-width" />
	<meta name="viewport" content="initial-scale=1, maximum-scale=1"> 
    <title> UniCycles Website </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="https://use.fontawesome.com/f289c3ee5e.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
	
</head>

<body>


<div class="openMenuToggle">&#9776</div>
<div class="openSpace">Stats</div>

<article id="left" class="menu" align="center" >
	<div class="closeMenuToggle">&#8592</div>
	<ul >
        <article id="signin">
            <img src="pics/User.jpg" alt="UniCycles logo" id="profilePic">
            <h4> <?php
            echo $_SESSION[Username];
                ?> </h4>
        </article>
		
        <li><a href="" class="Button"> <i class="fa fa-home fa-lg" aria-hidden="true"></i> Home </a></li>
		<li><a href="" class="Icon" > <i class="fa fa-home fa-lg" aria-hidden="true"></i> </a></li>
        <li><a href="" class="Button"> <i class="fa fa-bicycle fa-lg"></i> Reserve bike </a></li>
		<li><a href="" class="Icon"> <i class="fa fa-bicycle fa-lg"></i></a></li>
		<li><a href="" class="Button"> <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i> About Us </a></li>
        <li><a href="" class="Icon"> <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i></a></li>
        <li><a href="" class="Button"> <i class="fa fa-map fa-lg" aria-hidden="true"></i> Map </a></li>
		<li><a href="" class="Icon"> <i class="fa fa-map fa-lg" aria-hidden="true"></i></a></li>
        <li><a href="" class="Button"> <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i> Report / Help </a></li>
		<li><a href="" class="Icon"> <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i></a></li>
		<li><a href="" class="Button"> <i class="fa fa-cogs fa-lg" aria-hidden="true"></i> </i> Settings </a></li>
		<li><a href="" class="Icon"> <i class="fa fa-cogs fa-lg" aria-hidden="true"></i> </i></a></li>
        <li><a href="" class="Button"> <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </i> Sign out </a></li>
		<li><a href="" class="Icon"> <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </i></a></li>
    </ul>
</article>


<article id="right" class="secondMenu">
<div class="closeSpace">&#8592</div>
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

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/main.js"></script>


<img src="pics/Logo.png" alt="UniCycles logo">
</body>

=======
<?php
// Starts a session to hold varriables between pages
session_start();
include '\scripts\AvaliableBikes.php';
include '\scripts\session.php';
username("Not Logged In");
//isLoggedIn();
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
            <h4> <?php
            echo $_SESSION[Username];
                ?> </h4>
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

>>>>>>> origin/master
</html>