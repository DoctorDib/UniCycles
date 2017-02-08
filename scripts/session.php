<?php
session_start();
function loginRedirection($correct){
    if ($_SESSION['loggedIn'] != true) {
        return;
    } else {
        header('location:'.$correct);
    }
}

    function username(){
        if ($_SESSION['loggedIn'] == true){
            return;
    }
    else{
        echo $_SESSION['Username'] = "Not Logged In";
        return;
    }
}
    function popUp($param){
    ?>
    <script type="text/javascript">
        alert("Input Error.   <?php echo $param; ?>");
        history.back();
    </script>
    <?php
}
function popUpCorrect($param){
    ?>
    <script type="text/javascript">
        alert(<?php echo $param; ?>");
        history.back();
    </script>
    <?php
}

function popUpReturnBike($param){
    ?>
    <script type="text/javascript">
        alert(<?php echo $param; ?>");
        history.back();
    </script>
    <?php
}
?>