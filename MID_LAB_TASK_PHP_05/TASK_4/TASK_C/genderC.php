
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
			<input type="radio" name="gender" value="Male" <?php if (isset($_POST['submit'])) {
			if($_POST["gender"]=="Male"){echo "Checked";}
		}?> > Male
			<input type="radio" name="gender" value="Female"   <?php if (isset($_POST['submit'])) {
			if($_POST["gender"]=="Female"){echo "Checked";}
		}?> > Female
			<input type="radio" name="gender" value="Others"   <?php if (isset($_POST['submit'])) {
			if($_POST["gender"]=="Others"){echo "Checked";}
		}?>> Others
			<br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>
