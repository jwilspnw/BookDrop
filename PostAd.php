<?php include 'header.php';?>

<!--
	books(major varchar(4), class_num integer, title varchar(50), prof varchar(20), name varchar(30), email varchar(50), phone varchar(15))
	insert into "books" values ("CS", 110, "Java for Beginners", "Jagodzinski", "Robert Test", "testr@cwu.edu", "1-555-555-5555");-->
<form action="insertAd.php" method="post">	
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
			<input class="postingField" type="text" name="classField" id="classField" value="">
		</label><br />

		<label class="postingLabel">Book title
			<input class="postingField" type="text" name="titleField" id="titleField" value="">
		</label><br />

		<label class="postingLabel">Professor
			<input class="postingField" type="text" name="profField" id="profField" value="">
		</label>

	</fieldset>	
	<br />
	<fieldset>
		<legend>Your information</legend>

		<label class="postingLabel">Name
			<input class="postingField" type="text" name="nameField" id="nameField" value="">
		</label><br />

		<label class="postingLabel">Email
			<input class="postingField" type="text" name="emailField" id="emailField" value="">
		</label><br />

		<label class="postingLabel">Phone (Optional)
			<input class="postingField" type="text" name="phoneField" id="phoneField" value="">
		</label>

	</fieldset>	
	<br />
	<div id="postAdSubmit">
		<button type="submit" name="adSubmit">Submit your ad</button>
	</div>	
</form>
<?php include 'footer.php';?>