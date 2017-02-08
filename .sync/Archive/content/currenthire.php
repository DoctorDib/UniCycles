<?php
include "../scripts/connect.php";
include "../scripts/session.php";
session_start();
$userID = $_SESSION['identifier'];
$userID = 1;
$conn = connect();
$queryFrom = "SELECT Bike_From FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
$queryTo = "SELECT Bike_To FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
$queryTimeOfDep = "SELECT Time_of_Departure FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
$queryTimeOfArrival = "SELECT Return_Time FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
?>
<article id="right" class="secondMenu">
    <div class="closeSpace">&#8592</div>
    <table style="width:100%">
        <tr>
            <th colspan="2" class="tableTitle"> Current Hire </th>
        </tr>

        <tr>
            <td>From:</td>
            <td>
                <?php
                $from =  query($queryFrom,Bike_From,$conn);
                echo location($from);
                ?>
            </td>
        </tr>
        <tr>
            <td>To:</td>
            <td>
                <?php
                $to =  query($queryTo,Bike_To,$conn);
                echo location($to);
                ?>
            </td>
        </tr>
        <tr>
            <td>Time of Departure:</td>
            <td>
                <?php
                echo query($queryTimeOfDep,Time_of_Departure,$conn);
                ?>
            </td>
        </tr>
        <tr>
            <td>Return Time</td>
            <td>
                <?php
                echo query($queryTimeOfArrival,Return_Time,$conn);
                ?>
            </td>
        </tr>

    </table>

    <?php

function location($location){
    switch ($location) {
        case '1':
        return 'University North Quarter (Portland Building)';
        break;

        case '2':
        return 'University Library';
        break;

        case '3':
        return 'Gunwarf Quays';
        break;

        case '4':
            return 'Portsmouth and Southsea Train Station';
        break;

        case '5':
            return 'Fratton Train Station';
        break;

        case 6:
            return 'Langstone University Halls';
            break;

        case 7:
            return 'Southsea Castle (Beach Front)';
            break;

        case 8:
            return 'St Marys Hospital';
            break;

        case 9:
            return 'University Park Building';
            break;
        default:
            return 'An Error has occurred';
            break;
    }
}
        ?>