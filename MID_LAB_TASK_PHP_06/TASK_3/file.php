
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile Picture</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>PROFILE PICTURE</legend>

		<table>
			<tr>
				<td><img src="user.png" alt="icon" width="150px"></td>
				
			</tr>
			<tr>
				<td><input type="file" name = "file" value=""></td>
			</tr>
			
		</table>

		<hr>
	<input type="submit" name="submit" value="Submit">	
	</fieldset>	
</form>
	
</body>
</html>

<?php

	if (isset($_POST['submit'])) {
		
		
		if(isset($_POST['file'])){

			$filename = $_POST['file'];
			echo "$filename <br>";

			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			//echo "$ext<br>";

			$sizee = filesize($filename);

			//echo "$sizee";


			if($ext== "jpeg" || $ext== "jpg" || $ext== "png" || $sizee <= 4194304){

			echo " Submission Done..!<br>";
		}
		else {
		echo "Chose correct file.";
	}
			
			
		}else{

			echo "Null Submission...<br>";
		}
		# code...
	}
?>