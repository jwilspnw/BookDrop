<?php

		$major = $_POST['majorSelect'];
		$class = $_POST['classField'];
		$title = $_POST['titleField'];
		$prof = $_POST['profField'];
		$name = $_POST['nameField'];
		$email = $_POST['emailField'];



		$insertQuery = 'INSERT into books values ("'.$major.'", '.$class.', "'.$title.'", "'.$prof.'", "'.$name.'", "'.$email.'")';
		
		$db = new SQLite3('bookDrop.db');
		$db->exec($insertQuery);

		header('Location: index.php');
	
?>