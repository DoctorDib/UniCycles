<html>
<form class="report" method="post" action="../content/reportValidation.php" enctype="multipart/form-data">
	<fieldset>
        <?php
        include "../scripts/session.php";
        loginRedirection("notLoggedIn.php");
        ?>
		<legend> Report / Help form </legend>	
			<ul>
				<section>
					<label> Topic </label>
					<input type="text" name="topic">
					<br><br>

					<label for="description"> Description </label>
					<textarea name="description" id="description" rows="10" cols="75"></textarea>
				</section>
				
				<section>
                    <input type="submit" name="submit" value="Submit">
				</section>
			</ul>
	</fieldset>
</form>
</html>
