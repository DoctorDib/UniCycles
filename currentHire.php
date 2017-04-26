<html>
<?php

		include "../scripts/connect.php";
		include "../scripts/session.php";
		session_start();

		if($_SESSION['loggedIn'] == true && $_SESSION['bikeHired'] == true) {


            $userID = $_SESSION['email'];
            $conn = connect();
            $queryFrom = "SELECT Bike_From FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND Email_Address = '$userID';";
            $queryTo = "SELECT Bike_To FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
            $queryTimeOfDep = "SELECT Time_of_Departure FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
            $queryTimeOfArrival = "SELECT Return_Time FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
            ?>
            <article>

                <table style="width:100%">
                    <tr>
                        <th colspan="2" class="tableTitle"> Current Hire</th>
                    </tr>
                    <tr>
                        <td>From:</td>
                        <td>
                            <?php
                            echo $_SESSION['From'];
                            echo 'steve'
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>To:</td>
                        <td>
                            <?php
                            $to = query($queryTo, Bike_To, $conn);
                            echo location($to);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Time of Departure:</td>
                        <td>
                            <?php
                            echo query($queryTimeOfDep, Time_of_Departure, $conn);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Return Time</td>
                        <td>
                            <?php
                            echo query($queryTimeOfArrival, Return_Time, $conn);
                            ?>
                        </td>
                    </tr>
                    <tr>
                       <!-- <td>
                            <input type="button" value="extendTime" onclick="<?php extendTime(); ?>"/>
                        </td>-->
                    </tr>
                </table>
            </article>
            <?php
            function extendTime()
            {
                include "../scripts/connect.php";
                $conn = connect();

                $email = $_SESSION['email'];
                $userID = query("SELECT USER_ID FROM USER WHERE EMAIL_ADDRESS = '$email';", USER_ID, $conn);
                $queryTimeOfArrival = "SELECT Return_Time FROM request WHERE Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d') AND Time_of_Departure <= DATE_FORMAT(NOW(),'%i-%H') AND DATE_FORMAT(Return_Time,'%i-%H') <= DATE_FORMAT(NOW(),'%i-%H') AND USER_ID = '$userID';";
                $mysql_qry = "UPDATE `unicycle`.`request`
	                  SET `Return_time` = 'now() + 2hours',
	                  WHERE USER_ID = '$userID' AND Date_Of_Departure = DATE_FORMAT(NOW(),'%Y-%m-%d');";
            }

            $result = mysqli_query($conn, $mysql_qry);

            function location($location)
            {
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
        }
        else if($_SESSION['bikeHired'] == false || $_SESSION['bikeHired'] == null){
		    ?>
                <-- Please enter lines for no current hire in here please james.
            <?php
        }
        /*else
        {
                echo "Please log in to use this functionality";
        }*/
?>
</html>
