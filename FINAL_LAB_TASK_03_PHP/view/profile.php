<?php
	require_once('../model/userModel.php');
	$title= "Profile";
	include('header.php');
	$id = $_SESSION['id'];
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];

	$user = getUserByName($username, $password);
	if($user['id'] == $_SESSION['id'])
	{
		?>
			<table border="1" cellspacing="0">
					<tr>
						<td colspan="2" align="center"> 
							Profile
						</td>
					</tr>
					<tr>
						<td>ID</td>
						<td>
							<?= $user['id'] ?>
						</td>
					</tr>
					<tr>
						<td>NAME</td>
						<td>
							<?= $user['name'] ?>
						</td>
					</tr>
					<tr>
						<td>EMAIL</td>
						<td>
							<?= $user['email'] ?>
						</td>
					</tr>
					<tr>
						<td>USER TYPE</td>
						<td>
							<?= $user['type'] ?>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right"> 
							<a href="<?php if($_SESSION['type']=='User'){echo 'userhome.php';}else{echo 'adminhome.php';}?>">Go Home</a>
						</td>
					</tr>
				</table>
		<?php

	}
?>