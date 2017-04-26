<?php
session_start();
// Function, checks using sessions if the user is logged in. If not they are redirected to the index page.
function loginRedirection(){
    if ($_SESSION['loggedIn'] == true) {
        return;
    } else {
        ?>
        <script type="text/javascript">
            window.location = "../notLoggedIn.php";
        </script>
        <?php
    }
}
// Function If user not logged it will display the name as not logged in.
function username(){
    if ($_SESSION['loggedIn'] == true){
        return;
    }
    else{
        echo $_SESSION['Username'] = "Not Logged In";
        return;
    }
}
//Functions takes no parameters and checks if user is logged and redirects them to notloggedin.php
function isLoggedin(){
    if($_SESSION['loggedIn']){

    }
    else{
        header('location'."notLoggedIn.php");
    }
}
// creates a pop up error message with the message of the paratmeter $param
function popUp($param){
    ?>
    <script type="text/javascript">
        alert("Input Error.   <?php echo $param; ?>");
        history.back();
    </script>
    <?php
}
// Function takes parameter $Param. Creates a pp up menu for the user with $param as its message then redirects the user
function popUpCorrect($param)
{
    ?>
    <script type="text/javascript">
        alert("<?php echo $param; ?>");
        window.location = "../content/login.php";
    </script>
    <?php
}

?>