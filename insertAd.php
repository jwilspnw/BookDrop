<?php
	if(isset($_POST["adSubmit"])){
		$major = $_POST['majorSelect'];
		$class = $_POST['classField'];
		$title = $_POST['titleField'];
		$prof = $_POST['profField'];
		$name = $_POST['nameField'];
		$email = $_POST['emailField'];
		$phone = $_POST['phoneField'];

		$insertQuery = 'INSERT into books values ("'.$major.'", '.$class.', "'.$title.'", "'.$prof.'", "'.$name.'", "'.$email.'", '.$phone.')';
		
		$db = new SQLite3('bookDrop.db');
		$db->exec($insertQuery);

		header('Location: main.php');
	}
?>