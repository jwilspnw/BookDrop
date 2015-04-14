<?php include 'header.php';?>

<form action="insertAd.php" method="post" id="adForm">	
	<fieldset>
		<legend>Book information</legend>

		<label class="postingLabel">Major
			<select name="majorSelect" id="majorSelect">
				<?php
				$selectQuery = 'SELECT name FROM majors';
					$result = $db->query($selectQuery);
					while($row=$result->fetchArray()){
						print "<option value='".$row[0]."'>".$row[0]."</option>";
					}			

				?>	
			</select>	
		</label><br />

		<label class="postingLabel">Class Number
			<input class="postingField" type="text" name="classField" id="classField" value="" />
		</label><br />

		<label class="postingLabel">Book title
			<input class="postingField" type="text" name="titleField" id="titleField" value="" />
		</label><br />

		<label class="postingLabel">Professor
			<input class="postingField" type="text" name="profField" id="profField" value="" />
		</label>

	</fieldset>	
	<p></p>
	<fieldset>
		<legend>Your information</legend>

		<label class="postingLabel">Name
			<input class="postingField" type="text" name="nameField" id="nameField" value="" />
		</label><br />

		<label class="postingLabel">Email
			<input class="postingField" type="text" name="emailField" id="emailField" value="" />
		</label><br />

	</fieldset>	
	<p></p>
	<div id="postAdSubmit">
		<button type="button" id="adSubmit" name="adSubmit">Submit your ad</button>
	</div>

</form>
<?php include 'footer.php';?>