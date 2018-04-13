<!DOCTYPE html>
<html>
<head>
	<title>Test of ckeditor</title>
	<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
	<form method="post" action="">
		<textarea class="ckeditor" name="editor" id="editor"></textarea>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$text = $_POST['editor'];

	//connect to DB
	$con = mysqli_connect("localhost","root","","ckeditor") or die("Error");
	
	//insert into DB
	$query = mysqli_query($con, "insert into content (content) values ('$text')");

	if ($query) {
		echo "Insertion complete";
	}
	else {
		echo "Error while inserting";
	}
}

?>