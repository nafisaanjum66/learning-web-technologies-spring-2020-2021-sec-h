
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
			<input type="checkbox" name="degree1" value="SSC" <?php if (isset($_POST['degree1'])) {
			if($_POST['degree1']=="SSC"){echo "Checked";}}?> > SSC
			<input type="checkbox" name="degree2" value="HSC" <?php if (isset($_POST['degree2'])) {
			if($_POST['degree2']=="HSC"){echo "Checked";}}?> > HSC
			<input type="checkbox" name="degree3" value="BSc" <?php if (isset($_POST['degree3'])) {
			if($_POST['degree3']=="BSc"){echo "Checked";}}?> > BSc
			<input type="checkbox" name="degree4" value="MSc" <?php if (isset($_POST['degree4'])) {
			if($_POST['degree4']=="MSc"){echo "Checked";}}?> > MSc
			<br>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>

