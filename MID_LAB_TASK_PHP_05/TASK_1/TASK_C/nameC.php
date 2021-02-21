

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Name Input</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>NAME</legend>
			Name : <input type="text" name="myname" value="<?php if (isset($_POST['submit'])) {
		echo $_POST['myname'];}?>">
			<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>

