<!DOCTYPE html>
<html>
<head>
	<title>Retrieval Test</title>
</head>

<style type="text/css">
	td{
		border: 1px solid;
	}
</style>
<body>
	<table style="border: 2px solid;">
		<tr>
			<td>ID</td>
			<td>Content</td>
		</tr>
			<?php
				$con = mysqli_connect("localhost","root","","ckeditor") or die("Error");
				$query = mysqli_query($con,"select * from content");

				while ($row = mysqli_fetch_array($query)) {
			?>
			<tr>		
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['content']; ?></td>
			</tr>
			<?php
				}
			?>
	</table>
</body>
</html>