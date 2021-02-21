
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GENDER Input</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>	
			<input type="radio" name="gender" value="Male" > Male
			<input type="radio" name="gender" value="Female" > Female
			<input type="radio" name="gender" value="Others" > Others
			<br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>


<?php

	if (isset($_POST['submit'])) {
		$gender=$_POST['gender'];
		
		
		if(isset($_POST['gender'])){
			echo "Success...<br>";
			echo "You gender is : $gender";
		}else{
			echo "Null Submission...<br>";
			
		}
		# code...
	}
?>