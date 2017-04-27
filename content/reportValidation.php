<?php
include "../scripts/connect.php";
include "../scripts/session.php";
$topic = $_POST['topic'];
$description = $_POST['description'];

if($topic == ""){
    popUp("Please enter a topic");
}else {
    if ($description == "") {
        popUp("Please enter a description");
    } else {
        if (strlen($description) > 1500) {
            popUp("Please shortern your descripton to below 1500 charcters");
        } else {
            $email = $_SESSION['email'];
            $mysql_qry = "INSERT INTO `unicycle`.`report` 
	(`Report_ID`, 
	`TOPIC`, 
	`DESCRIPTION`, 
	`EMAIL`
	)
	VALUES
	('Report_ID', 
	'$topic', 
	'$description', 
	'$email'
	);";
            $conn = connect();
            $result = mysqli_query($conn, $mysql_qry);
                ?>
                <script type="text/javascript">
                alert("<?php echo "Report has been submitted"; ?>");
                window.location = "../index.php";
            </script>
                <?php
            }
        }
}

