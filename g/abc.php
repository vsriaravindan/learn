<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="abc.php" method="POST" enctype="multipart/form-data">

		<input type="file" name="myfile" /><br>
		<input type="submit" name="upload" value="Upload"><br>
	</form>	
</body>

<?php
error_reporting(0);

	$name=$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	if(move_uploaded_file($tmp_name, $name)) {
		echo "file uploaded";
	}
	else
	{
		echo "File not uploaded";
	}
?>
</html>