<?php 
if(isset($_POST['submit'])){
	
echo "Please Check your email and enter code......";
header('location:login.php');
}
?>
	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORGOT PASSWORD</title>
	<link rel="stylesheet" href="">
</head>
<body>
<table border="1" cellspacing="0" style="width: 60%; margin: auto;">
		<tr>
			<td>
				<table style="width: 100%">
					<tr>
						<td>
							<img style="height: 50px;" src="logo.png" alt="logo">
						</td>
						<td style=" float: right; margin-top: 15px">
							<a style="padding: 5px;" href="publichome.php">Home</a>|
							<a style="padding: 5px;" href="login.php">Login</a>|
							<a style="padding: 5px;" href="registration.php">Registration</a>
						</td>
					</tr>
				</table>

			</td>
		</tr>
		<tr>
			<td height="200px">
				<form method="POST" action="">
				<fieldset style="width: 300px;margin: auto;">
			<legend>FORGOT PASSWORD</legend>
			<table>
				<tr>
					<td>Enter Email:</td>
					<td><input type="email" name="myemail" value=""></td>
					</tr>
				</table>
					<hr>
					<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
			</td>
		</tr>
		<tr>
			<td height="60px" align="center">Copyright &copy; 2017</td>
		</tr>
	</table>	
</body>
</html>	
</body>
</html>