<html>
<?php
    session_start();
    if($_SESSION['loggedIn'] == true) {

		?>
		<fieldset>
			<legend> Settings</legend>
			<form action="../content/checkSettingsDetails.php" method="post" enctype="multipart/form-data">
				<form>
					<section id="settings">
						<?php
						session_start();
						include "../scripts/connect.php";
						$conn = connect();
						$email = $_SESSION['email'];
						$forename = mysqli_query($conn, "SELECT FORENAME FROM USER WHERE Email_Address = 'admin@admin.com';");
						$forename = $_POST['forename'];
						?>
                        <form action="../content/checkSettingsDetails.php" method="post" enctype="multipart/form-data">
                            Please ensure you fill in all details:
                            <br><br>
                            <label> Forename: </label>
						<input type="text" value="New Forename" name="newForename"/>

						<br></br>

                        <label> Last Name: </label>
                        <input type="text" value="New Last Name" name="newLastname"/>

                        <br></br>

                        <label> Role in University: </label>

                        <select name="universityRole">
                            <option value="">Select...</option>
                            <option value="Student">Student</option>
                            <option value="Lecturer">Lecturer</option>
                        </select>

                        <br></br>

                        <label>Phone Number</label>
                        <input type="text" name="newPhoneNumber" value="New Phone Number"/>
						
						<br></br>
						
                        <input id="button" name="submit" value="Submit Details"="" type="submit"/>
                        </form>

                        <form action="../content/checkSettingsPassword.php" method="post" enctype="multipart/form-data">

                            <br></br>
                            Change Password:
                            <br>
                            <label> New Password: </label>
                            <input type="password" value="" name="password"/>

                            <br></br>

                            <label> Confirm Password: </label>
                            <input type="password" value="" name="passwordConfirm"/>

                            <br></br>

                            <input id="button" name="submit" value="Change Password"="" type="submit"/>
                        </form>

                    <form action="../content/checkSettingsUnsub.php" method="post">
                        <form>
                            <section>
                                <label> Click below to unsub</label>
                                <input id="button" name="submit" value="Un-Sub"="" type="submit"/>
                            </section>

                        </form>
                    </form>
                </form>
            </form>
        </fieldset>
        <?php
    }
    else{
        header("Location: ../content/notLoggedIn.html");
    }
?>
</html>