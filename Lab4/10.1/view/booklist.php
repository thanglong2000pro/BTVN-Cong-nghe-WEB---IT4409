<html>
	<head></head>
	<body>
		<table>
			<tbody>
				<tr>
					<td>Title</td>
					<td>Author</td>
					<td>Description</td>
				</tr>
			</tbody>
			<?php
			foreach($books as $title=>$books)
			{
				echo '<tr><td><a href="index.php?b'.$books->title.'">'.$books->title.'</a></td><td>'.$books->author.'</td><td>'.$books->description.'</td></tr>';
			}
			?>
		</table>
	</body>
</html>