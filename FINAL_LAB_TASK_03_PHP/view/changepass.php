<?php
	
	$title= "Change Password";
	include('header.php');
		?>
	<form method="post" action="../controller/passCheck.php">
		<fieldset>
			Current Pasword <br>
			<input type="password" name="cpass" value=""><br>
			New Pasword <br>
			<input type="password" name="npass" value=""><br>
			Retype New Pasword <br>
			<input type="password" name="rnpass" value=""><br>
			<hr>
			<input type="submit" name="submit" value="Submit"> 
						<a href="login.php">

			<a href="<?php if($_SESSION['type']=='User'){echo 'userhome.php';}else{echo 'adminhome.php';}?>">Home</a>
		</fieldset>
	</form>