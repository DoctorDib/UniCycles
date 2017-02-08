<html>
<form class="report" method="post" action="reportValidation.php" enctype="multipart/form-data">
	<fieldset>
		<legend> Report / Help form </legend>	
			<ul>
				<section>
					<label> Topic </label>
					<input type="text" name="topic">
					<br><br>
					<label> Description </label>
					<textarea name="description" rows="10" cols="75"></textarea>
				</section>
				
				<section>
                    <input type="submit" name="submit" value="Submit">
				</section>
			</ul>
	</fieldset>
</form>
</html>
