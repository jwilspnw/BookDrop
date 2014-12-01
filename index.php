<?php include 'header.php';?>
<h2>Welcome to Book Drop</h2>
<p>To post an ad for a book you want to trade, click the post ad button.</p>
<p>You can also search for a book by professor, class number, or major.</p>

<p>Thanks for coming and here is a list of our most recent postings!</p>
	
<table>
	<caption>Books</caption>

	<th>Major</th>
	<th>Class</th>
	<th>Title</th>
	<th>Professor</th>
	<th>Name</th>
	<th>Email</th>

	<?php
		$query = 'SELECT * FROM books';
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
