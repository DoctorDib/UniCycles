<?php
session_start();
$_SESSION['returnTime'] = $_SESSION['extended'];
?>
<script type="text/javascript">
    alert("<?php echo "Details have been changed"; ?>");
    window.location = "../index.php";
</script>
