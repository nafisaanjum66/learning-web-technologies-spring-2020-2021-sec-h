
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
			<input type="num" name="day" value="" size="1"> /
			<input type="num" name="month" value="" size="1"> /
			<input type="num" name="year" value="" size="1">
			<br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	
</body>
</html>


<?php

	if (isset($_POST['submit'])) {
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		
		if($day == "" || $month == "" || $year == ""){
			echo "null submission";
		}else{
			echo "Success...<br>";
			echo "Day : $day";
			echo "<br>";
			echo "Month : $month";
			echo "<br>";
			echo "Year : $year";
			echo "<br>";

		}
		# code...
	}
?>