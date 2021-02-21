

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
			Name : <input type="text" name="myname" value="">
			<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>

<?php

	if (isset($_POST['submit'])) {
		$name=$_POST['myname'];

		if($name == ""){
			echo "null submission";
			
		}else{
			echo "<br>";
			echo "Here is your output name : ";
			echo $name;
		}
	}
?>