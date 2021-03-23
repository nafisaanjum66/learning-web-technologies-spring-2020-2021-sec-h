<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
</head>
<body>
	<form method="post" action="../controller/regCheck.php">
		<fieldset>
			<legend>Registration</legend>
			Id <br>
			<input type="num" name="id" value=""><br>

			Password <br>
			<input type="password" name="password" value=""><br>

			Confirm Password <br>
			<input type="password" name="repass" value=""><br>

			Name <br>
			<input type="text" name="username" value=""><br>

			Email <br>
			<input type="email" name="email" value=""><br>

			UserType <em>[User/Admin]</em> <br>
			<select name="type" id="">
				<option value="user">User</option>
				<option value="admin">Admin</option>
			</select><br>

			<hr>

			<input type="submit" name="signup" value="Submit"> 
						<a href="login.php">Login</a>
					</td>

		</fieldset>
	</form>
</body>
</html>