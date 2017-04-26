<?php
// Starts a session to hold varriables between pages
session_start();
include '/scripts/AvaliableBikes.php';
include '/scripts/session.php';
include '/scripts/connect.php';
username();
$connection = Connect();
?>
<html>
<head>
    <link rel="icon" href="pics/Logo.png">

    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
    <title> UniCycles </title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="https://use.fontawesome.com/f289c3ee5e.js"></script>
</head>

<body background = "pics/Logo.png">

<div class="openMenuToggle">&#9776 </div>
<div class="openSpace">Stats </div>

<article id="left" class="menu" align="center" >
    <div class="closeMenuToggle">&#8592 </div>
    <ul >
        <article id="signin">
            <img src="pics/User.jpg" alt="UniCycles logo" id="profilePic">
            <h3>
                <?php
                echo $_SESSION[Username];
                ?>
            </h3>
        </article>
        <?php
        if($_SESSION['Username'] === "Not Logged In"){
            echo '<li><a href="content/login.php" class="Button signIn"> <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </i> Sign In/Register </a></li>';
            echo '<li><a href="content/login.php" class="Icon"> <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </i></a></li>';
        }
        else{
            echo '<li><a href="content/logout.php" class="Button signOut"> <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </i> Sign Out </a></li>';
            echo '<li><a href="content/logout.php" class="Icon"> <i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> </i></a></li>';
        }
        ?>

        <li><a href="#" class="Button homePage"> <i class="fa fa-home fa-lg" aria-hidden="true"></i> Home </a></li>
        <li><a href="#" class="Icon homePage" > <i class="fa fa-home fa-lg" aria-hidden="true"></i> </a></li>

        <li><a href="#" class="Button reservePage"> <i class="fa fa-bicycle fa-lg"></i> Reserve bike </a></li>
        <li><a href="#" class="Icon reservePage"> <i class="fa fa-bicycle fa-lg"></i></a></li>

        <li><a href="#" class="Button hirePage"> <i class="fa fa-sticky-note fa-lg" aria-hidden="true"></i> </i> Current Hire </a></li>
        <li><a href="#" class="Icon hirePage"> <i class="fa fa-sticky-note fa-lg" aria-hidden="true"></i> </i></a></li>


        <li><a href="#" class="Button mapPage"> <i class="fa fa-map fa-lg" aria-hidden="true"></i> Map </a></li>
        <li><a href="#" class="Icon mapPage"> <i class="fa fa-map fa-lg" aria-hidden="true"></i></a></li>

        <li><a href="#" class="Button reportPage"> <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i> Report / Help </a></li>
        <li><a href="#" class="Icon reportPage"> <i class="fa fa-question-circle-o fa-lg" aria-hidden="true"></i></a></li>

        <li><a href="#" class="Button aboutPage"> <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i> About Us </a></li>
        <li><a href="#" class="Icon aboutPage"> <i class="fa fa-info-circle fa-lg" aria-hidden="true"></i></a></li>

        <li><a href="#" class="Button settingPage"> <i class="fa fa-cogs fa-lg" aria-hidden="true"></i> </i> Settings </a></li>
        <li><a href="#" class="Icon settingPage"> <i class="fa fa-cogs fa-lg" aria-hidden="true"></i> </i></a></li>

    </ul>
</article>
<article id="main">
    <div id="content"></div>
</article>
<article id="right" class="secondMenu" align="center">
	<div class="closeSpace">&#8594 </div>
    <table style="width:100%">
        <tr>
            <th colspan="2" class="tableTitle"> Bikes Avaiable </th>
        </tr>

        <tr>
            <td> Gunwarf Quays</td>
            <td>
                <?php
                echo $gunwarfAvaliable =  bikesAvailable(3,$connection);
                ?>
            </td>
        </tr>

        <tr>
            <td> University Library </td>
            <td>
                <?php
                echo $UniversityLibrary =  bikesAvailable(2,$connection);
                ?>
            </td>
        </tr>
        <tr>
            <td> North Quarter</td>
            <td>
                <?php
                echo $NorthQuarter =  bikesAvailable(1,$connection);
                ?>
            </td>
        </tr>
        <tr>
            <td> Fratton Station </td>
            <td>
                <?php
                echo $FrattonStation =  bikesAvailable(5,$connection);
                ?>
            </td>
        </tr>
        <tr>
            <td> Langstone Campus </td>
            <td>
                <?php
                echo $LangstoneCampus =  bikesAvailable(6,$connection);
                ?>
            </td>
        <tr>
            <td> Park Building </td>
            <td>
                <?php
                echo $ParkBuilding =  bikesAvailable(9,$connection);
                ?>
            </td>
        <tr>
            <td> Southsea Castle </td>
            <td>
                <?php
                echo $SouthseaCastle =  bikesAvailable(7,$connection);
                ?>
            </td>
        </tr>
        <tr>
            <td> St Marys Hospital </td>
            <td>
                <?php
                echo $StMarysHospital =  bikesAvailable(8,$connection);
                ?>
            </td>
        </tr>
        <tr>
            <td> Portsmouth and Southsea Station </td>
            <td>
                <?php
                echo $PortsmouthandSouthseaStation =  bikesAvailable(4,$connection);
                ?>
            </td>
        </tr>
    </table>
    <table style="width:100%">
        <tr>
            <th colspan="2" class="tableTitle"> Free Spaces </th>
        </tr>
        <tr>
            <td> Gunwarf Quays</td>
            <td>
                <?php
                echo (totalSpaces(3,$connection) - $gunwarfAvaliable);
                ?>
            </td>
        </tr>
        <tr>
            <td> University Library </td>
            <td>
                <?php
                echo totalSpaces(2,$connection) - $UniversityLibrary;
                ?>
            </td>
        </tr>
        <tr>
            <td> North Quarter Campus </td>
            <td>
                <?php
                echo totalSpaces(1,$connection) - $NorthQuarter;
                ?>
            </td>
        </tr>
        <tr>
            <td> Fratton Station </td>
            <td>
                <?php
                echo totalSpaces(5,$connection) - $FrattonStation;
                ?>
            </td>
        </tr>
        <tr>
            <td> Park Building </td>
            <td>
                <?php
                echo totalSpaces(9,$connection) - $ParkBuilding;
                ?>
            </td>
        </tr>
        <tr>
            <td> Langstone Campus </td>
            <td>
                <?php
                echo totalSpaces(6,$connection) - $LangstoneCampus;
                ?>
            </td>
        </tr>
        <tr>
            <td>Southsea Castle</td>
            <td>
                <?php
                echo totalSpaces(7,$connection) - $SouthseaCastle;
                ?>
            </td>
        </tr>
        <tr>
            <td>St Marys Hospital</td>
            <td>
                <?php
                echo totalSpaces(8,$connection) - $StMarysHospital;
                ?>
            </td>
        </tr>
        <tr>
            <td>Portsmouth and Southsea Station</td>
            <td>
                <?php
                echo totalSpaces(4,$connection) - $PortsmouthandSouthseaStation;
                ?>
            </td>
        </tr>
    </table>

</article>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/main.js"></script>

</body>
</html>