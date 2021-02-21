

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Email Input</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>EAMIL</legend>
			<input type="email" name="email" value="">
			<br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>

<?php

	if (isset($_POST['submit'])) {
		$email=$_POST['email'];

		if($email == ""){
			echo "null submission";
			
		}else{
			echo "<br>";
			echo "Here is your output email : ";
			echo $email;
		}
	}
?>