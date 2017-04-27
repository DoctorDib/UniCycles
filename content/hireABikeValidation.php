<?php
session_start();

include "../scripts/session.php";
include "../scripts/connect.php";
$conn = connect();
$error = false;
$to = $_POST['bikeTo'];
$from = $_POST['bikeFrom'];
$now = $_POST['now'];
$hour = $_POST['Hour'];
$min = $_POST['Minute'];
$day = $_POST['day'];
$month = $_POST['month'];
$bikeType = $_POST['bikeType'];


function bikeType($bikeNumber)
{
    switch ($bikeNumber) {
        case '1':
            return 'Mountain';
            break;
        case '2':
            return 'Road';
            break;
        case '3':
            return 'BMX';
            break;
        case '4':
            return 'Dirt';
            break;
        case '5':
            return 'Sport';
            break;
        case '6':
            return 'Generic';
            break;
        default :
            $error = true;
            popUp("Please select a bike type");
            break;
    }
}
if($_POST['now'] == 'Yes') {
    $time = date("H:i");
    $date = date('Y-m-d');
    $returnTime = date("H:i", strtotime('+3 hours'));
    $extended = date("H:i", strtotime('+6 hours'));
}
else {
    if($day == "" && $month == ""){
        $date = date('Y-m-d');
        $time = $hour.":".$min;
        $returnTime = ($hour + 3).":".$min;
    }
    else {
        $date = "2017"."-".$month."-".$day;
        $time = $hour.":".$min;
        if(($hour+3) >= 24){
            $returnTime = (($hour + 3)-24).":".$min;
            $extended = (($hour + 6)-24).":".$min;
        }
        else if(($hour+6) >= 24){
            $returnTime = ($hour + 3).":".$min;
            $extended = (($hour + 6)-24).":".$min;
        }
        else{
            $returnTime = ($hour + 3).":".$min;
            $extended = (($hour + 6)-24).":".$min;
        }

    }
}
if($to == $from){
    $error = true;
    popUp("Destinations cannot be the same");
}

if($error == false){
    $_SESSION['startTime'] = $time;
    $_SESSION['returnTime'] = $returnTime;
    $_SESSION['to'] = $to;
    $_SESSION['from'] = $from;
    $_SESSION['hour'] = $hour;
    $_SESSION['min'] = $min;
    $_SESSION['bikeHired'] = true;
    $_SESSION['date'] = $date;
    $_SESSION['extended'] = $extended;
$email = $_SESSION['email'];

$userID = query("SELECT User_ID FROM USER WHERE Email_Address = '$email';",'User_ID',$conn);
$bike = bikeType($bikeType);
$bikeIDQuery = query("SELECT Bike_ID AS 'BikeTypeId' FROM bike WHERE Bike_Type = '$bikeType' LIMIT 1;","BikeTypeId",$conn);
$bikeID = mysqli_query($conn , $bikeIDQuery);
echo $bikeID;
$_SESSION['bikeID'] = $bikeID;
mysqli_query($conn,"UPDATE bike SET `In_Use` = TRUE WHERE `Bike_ID` = '$bikeiD';");
$createRequest = "
    INSERT INTO request
	(`Request_ID`, 
	`User_ID`, 
	`Bike_From`, 
	`Bike_To`, 
	`Bike_ID`, 
	`Time_Of_Departure`, 
	`Date_Of_Departure`, 
	`Return_time`, 
	`Bike_Returned`
	)
	VALUES
    ('Request_ID',
        '$userID',
        '$from',
        '$to',
        '4',
        '$time',
        '$date',
        '$returnTime',
        'False'
    );";
    mysqli_query($conn,$createRequest);
?>
    <script type="text/javascript">
        alert("<?php echo "Bike has been hired"; ?>");
        window.location = "../index.php";
    </script>
<?php
}
?>

