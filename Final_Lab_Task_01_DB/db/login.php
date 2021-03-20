<?php
session_start(); 

//require_once('dbtest.php');
if(isset($_POST['submit'])){

	$username = $_POST['myusername'];
	$password = $_POST['mypassword'];
	$user = $_SESSION['current_user'];
	if($username != "" && $password != ""){
	if($username == $user['name'] && $password == $user['password']){
		$_SESSION['flag']=true;
		header('location:dashboard.php');
	}
	else{
		echo "Invalid username or password...Please enter correct one...";
	}
}
else{
	echo "Insert username and password or Registration first....";
}

}
?>
	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LOGIN</title>
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
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="myusername" value=""></td>

					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="mypassword" value=""></td>
						</tr>
				</table>
					<hr>
					<input type="checkbox" name="remember" value="remember" <?php if(isset($_POST['remember'])){if($_POST["remember"] == "remember") {echo 'checked';}} ?>>Remember Me
					<br> <br>
					<input type="submit" name="submit" value="Submit">
					<a href="forgetpassword.php">Forgot Password?</a>
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

	</form>		
</body>
</html>