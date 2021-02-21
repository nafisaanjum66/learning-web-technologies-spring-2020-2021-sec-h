
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DOB Input</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>DATE OF BIRTH</legend>
			&nbsp;&nbsp;&nbsp;dd
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm 
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy <br>	
			<input type="num" name="day" value="<?php if (isset($_POST['submit'])) {
		echo $_POST['day'];}?>" size="1"> /
			<input type="num" name="month" value="<?php if (isset($_POST['submit'])) {
		echo $_POST['month'];}?>" size="1"> /
			<input type="num" name="year" value="<?php if (isset($_POST['submit'])) {
		echo $_POST['year'];}?>" size="1">
			<br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>
