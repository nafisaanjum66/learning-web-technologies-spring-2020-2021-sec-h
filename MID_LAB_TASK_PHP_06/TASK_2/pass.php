<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Password Field</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>CHANGE PASSWORD</legend>

		<table>
			<tr>
				<td>Current Password : </td>
				<td><input type="password" name = "mypass" value=""></td>
			</tr>
			<tr>
				<td>New Password : </td>
				<td><input type="password" name = "mypassN" value=""></td>
			</tr>
			<tr>
				<td>Retype New Password :</td>
				<td><input type="password" name = "mypassR" value=""></td>
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
		$cpass=$_POST['mypass'];
		$npass=$_POST['mypassN'];
		$rpass=$_POST['mypassR'];
		
		if($cpass=="" || $npass=="" || $rpass==""){
			echo "Null Submission...<br>";
			
		}else{

			if ($npass == $rpass) {
				# code...
				echo "yes..";
				echo "Success...<br>";
				echo "You New Password is : $npass";
			}
			else{
				echo "retype correct password";
			}

			
			
		}
		# code...
	}
?>