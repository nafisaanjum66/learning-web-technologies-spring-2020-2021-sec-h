<?php
	$title= "Home Page";
	require_once('header.php');

?>
	<fieldset>
	<div id="page_title">
		<h1>Welcome home, <?php echo $_SESSION['username'];?></h1>
	</div>

	<div id='nav_bar'>
		<a href="profile.php">Profile</a> |
		<a href="changepass.php"> Change Password</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>
</fieldset>
