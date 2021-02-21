
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DEGREE Input</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DEGREE</legend>	
			<input type="checkbox" name="degree[]" value="SSC" > SSC
			<input type="checkbox" name="degree[]" value="HSC" > HSC
			<input type="checkbox" name="degree[]" value="BSc" > BSc
			<input type="checkbox" name="degree[]" value="MSc" > MSc
			<br>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>

<?php

	if (isset($_POST['submit'])) {
		
		if (!empty ($_POST["degree"])) {
			# code...
			foreach ($_POST["degree"] as $value) {
				# code...
				echo $value;
				echo "<br>";
			}
		}
		# code...
	}
?>