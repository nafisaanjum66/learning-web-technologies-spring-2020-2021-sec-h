<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BLOOD GROUP Input</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>BLOOD GROUP</legend>
	<select name="bg" id="">
	<option value="B-">B-</option>
	<option value="B+">B+</option>
	<option value="A-">A-</option>
	<option value="A+">A+</option>
	<option value="O-">O-</option>
	<option value="O+">O+</option>
	</select>
			<hr>
	<input type="submit" name="submit" value="Submit">	
	</fieldset>	
</form>
</body>
</html>

<?php 
if(isset($_POST['submit']))
{
	 $blood = ($_POST["bg"]);
	if($blood == "")
	{
		echo "null submission";
	}else{
		echo "Your blood group is : ";
		echo $blood;
	}
}

?>