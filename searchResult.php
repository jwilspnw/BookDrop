<?php include 'header.php';?>

<table summary="This table displays the results of the search">
	<caption>Books</caption>
	<tr>
		<th>Major</th>
		<th>Class</th>
		<th>Title</th>
		<th>Professor</th>
		<th>Name</th>
		<th>Email</th>
	</tr>	

	<?php

		$filter = $_POST['filter'];
		$searchWord = $_POST['searchBox'];

		if($filter == "prof"){
			$query = 'SELECT * FROM books where prof == "'.$searchWord.'"';
		}else{
			$query = 'SELECT * FROM books where major == "'.$searchWord.'"';
		}
				
		$result = $db->query($query);
		while($row=$result->fetchArray(SQLITE3_NUM)){
			print '<tr>';
			foreach($row as $i)
				print '<td>'.$i.'</td>';
			print '</tr>';
		}			

	?>
</table>	

<?php include 'footer.php';?>
