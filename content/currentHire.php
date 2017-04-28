<html>
<?php

		include "../scripts/connect.php";
		include "../scripts/session.php";
		session_start();

		if($_SESSION['loggedIn'] == true && $_SESSION['bikeHired'] == true) {


            $userID = $_SESSION['email'];
            $conn = connect();

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
                            echo location($_SESSION['from']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>To:</td>
                        <td>
                            <?php
                            echo location($_SESSION['to']);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Time of Departure:</td>
                        <td>
                            <?php
                            echo $_SESSION['startTime'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Return Time</td>
                        <td>
                            <?php
                            echo $_SESSION['returnTime'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>
                            <?php
                            echo $_SESSION['date'];
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="extendTime" onclick="<?php echo $_SESSION['returnTime'] = $_SESSION['extended'];?>
                                    <script type='text/javascript'>
                            alert('<?php echo 'Time has been extended. This may only occur once per trip.'; ?>');
                            window.location = '../index.php';
                            </script>"/>
                        </td>
</tr>
                </table>
            </article>
            <?php
        }
        else if(($_SESSION['bikeHired'] == false || $_SESSION['bikeHired'] == null) && $_SESSION['loggedIn'] == true) {
    header("Location: ../content/noCurrentHire.html");
}
else{
    header("Location: ../content/notLoggedIn.html");
}
?>

</html>
