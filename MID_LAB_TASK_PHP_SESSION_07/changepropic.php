<?php 
session_start();
$user = $_SESSION['current_user'];
if(isset($_POST['submit']))
{
if($_POST['file'] != ""){
		$filename = $_POST['file'];
		
		$extention = pathinfo($filename, PATHINFO_EXTENSION);
		$size = filesize($filename);

		if($extention== "jpeg" || $extention== "jpg" || $extention== "png" || $size <= 4194304)
		{	

			$_SESSION['picture'] = $filename;
			echo $_SESSION['picture'];
			header('location:viewprofile.php');
		}
		else {
			echo "Error..!Choose a correct file.!";
		}
	}else{
			echo "Null submission.";
		}
}
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>CHANGE PROFILE PICTURE</title>
 </head>
 <body>
 	<table border="1" cellspacing="0" style="width: 60%; margin: auto;">
 		<tr>
 			<td colspan="2">
 				<table style="width: 100%">
 					<tr>
 						<td>
 							<img style="height: 50px;" src="logo.png" alt="logo">
 						</td>
 						<td style=" float: right; margin-top: 0px">
 							<p style="padding: 5px;">Logged in as <a href="viewprofile.php"><?php echo $user['name'];?></a> |
 								<a style="padding: 5px;" href="logout.php">Logout</a></p>
 							</td>
 						</tr>
 					</table>
 				</td>

 			</tr>
 			<tr>
 				<td width="30%" >
 					<label style="padding-left: 15px;">Account</label>
 					<hr>
 					<ul style="padding-bottom: 60px;">
 						<li><a href="dashboard.php">Dashboard</a></li>
 						<li><a href="viewprofile.php">View Profile</a></li>
 						<li><a href="editprofile.php">Edit Profile</a></li>
 						<li><a href="changepropic.php">Change Profile Picture</a></li>
 						<li><a href="changepass.php">Change Password</a></li>
 						<li><a href="logout.php">Logout</a></li>
 					</ul>
 				</td>
 				<td>
 					<form method="POST">
 					<fieldset style="margin: 20px;">
 						<legend>PROFILE PICTURE</legend>
 						<table width="100%">
 							<tr>
 								<td style="border-bottom: 1px solid gray; padding-top: 15px;padding-bottom: 6px;">
 									<div>
 									<img width="100px;" src="user.png" alt="user">
 								</div>
 									<input type="file" name ="file" value="">
 								</td>
 							</tr>
 							<tr>
 								<td style="padding: 5px 0px">
 									<input type="submit" name="submit" value="Submit">
 								</td>
 							</tr>
 						</table>
 					</fieldset>
 					</form>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2" align="center">
 					<p>Copyright &copy; 2017</p>
 				</td>
 			</tr>
 		</table>
 	</form>		
 </body>
 </html>