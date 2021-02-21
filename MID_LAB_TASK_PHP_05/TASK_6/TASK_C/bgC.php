
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BLOOD GROUP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>BLOOD GROUP</legend>
	<select name="blood">
			<option value="B-"<?php if(isset($_POST['blood'])){if($_POST["blood"] == "B-"){echo 'SELECTED';}}?>>B-</option>
			<option value="B+"<?php if(isset($_POST['blood'])){if($_POST["blood"] == "B+"){echo 'SELECTED';}}?>>B+</option>
			<option value="O-"<?php if(isset($_POST['blood'])){if($_POST["blood"] == "O-"){echo 'SELECTED';}}?>>O-</option>
			<option value="O+"<?php if(isset($_POST['blood'])){if($_POST["blood"] == "O+"){echo 'SELECTED';}}?>>O+</option>
			<option value="A-"<?php if(isset($_POST['blood'])){if($_POST["blood"] == "A-"){echo 'SELECTED';}}?>>A-</option>
			<option value="A+"<?php if(isset($_POST['blood'])){if($_POST["blood"] == "A+"){echo 'SELECTED';}}?>>A+</option>
	</select>
			<hr>
	<input type="submit" name="submit" value="Submit">	
	</fieldset>	
</form>
</body>
</html>