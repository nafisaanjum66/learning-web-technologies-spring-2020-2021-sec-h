<?php
	$title= "Display";
	require_once('header.php');
	require_once('../model/userModel.php');
?>

<form method="POST" action="">
		<table border="1" cellspacing="0">
			<tr>
				<td colspan="4" align="center"> 
					Users
				</td>
			</tr>
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>				
				<td>USER TYPE</td>				
			</tr>
			<?php
			$users = getAllUser();

			for ($i=0; $i < count($users) ; $i++) 
			{ 
				$id=$users[$i]['id'];
				$name = $users[$i]['name'];
				$email = $users[$i]['email'];
				$type = $users[$i]['type'];


					echo"<tr>
							<td>$id</td>
							<td>$name</td>
							<td>$email</td>
							<td>$type</td>
						</tr>";
			}

			?>
			<tr>
				<td colspan="4" align="right"> 
							<a href="<?php if($_SESSION['type']=='User'){echo 'userhome.php';}else{echo 'adminhome.php';}?>">Go Home</a>
						</td>
			</tr>
		</table>	
</form>