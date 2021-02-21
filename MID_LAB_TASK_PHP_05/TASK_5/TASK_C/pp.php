<!DOCTYPE html>
<html>
<head>	
	<title>GENDER</title>
</head>
<body>
<form method="POST" action="">
		<fieldset>
			<legend>GENDER</legend>	
<input type="checkbox" name="degree" value="SSC" <?php if(isset($_POST['degree'])){if($_POST["degree"] == "SSC") {echo 'checked';}} ?>>SSC
<input type="checkbox" name="degree1" value="HSC" <?php if(isset($_POST['degree1'])){if($_POST["degree1"] == "HSC") {echo 'checked';}} ?>>HSC 
<input type="checkbox" name="degree2" value="Bsc" <?php if(isset($_POST['degree2'])){if($_POST["degree2"] == "Bsc") {echo 'checked';}} ?>>Bsc 
<input type="checkbox" name="degree3" value="Msc" <?php if(isset($_POST['degree3'])){if($_POST["degree3"] == "Msc") {echo 'checked';}} ?>>Msc 
	<br>
	<hr>
	<input type="submit" name="submit" value="Submit">				
		</fieldset>
	</form>			
</body>
</html>