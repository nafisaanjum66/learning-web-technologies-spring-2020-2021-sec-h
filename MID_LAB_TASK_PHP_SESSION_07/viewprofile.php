<?php 
 session_start();
 $user = $_SESSION['current_user'];
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>PROFILE</title>
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
 					<fieldset style="margin: 20px;">
 						<legend>PROFILE</legend>
 						<table width="100%">
 							<tr>
 								<td width="50%">
 									<table>
 										<tr>
 											<td style="border-bottom: 1px solid gray; padding: 8px;">Name</td>
 											<td style="border-bottom: 1px solid gray; padding: 8px;">: <?php echo $user['name'];?></td>
 										</tr>
 										<tr>
 											<td style="border-bottom: 1px solid gray; padding: 8px;">Email</td>
 											<td style="border-bottom: 1px solid gray; padding: 8px;">: <?php echo $user['email'];?></td>
 										</tr>
 										<tr>
 											<td style="border-bottom: 1px solid gray; padding: 8px;">Gender</td>
 											<td style="border-bottom: 1px solid gray; padding: 8px;">: <?php echo $user['gender'];?></td>
 										</tr>
 										<tr>
 											<td style="padding: 5px;">Date of Birth</td>
 											<td style="padding: 5px;">: <?php 
 											echo $user['day'];
 											echo "/";
 											echo $user['month'];
 											echo "/";
 											echo $user['year'];?></td>
 										</tr>
 									</table>
 								</td>
 								<td>
 									<img src="<?php if(isset($_SESSION['picture']))
 									{
 										echo $_SESSION['picture'];
 									}else{
 										echo "user.png";
 									} ?>" style="padding-left: 5px;" width="100px;" alt="user">
 									<br>
 									<a style="padding-left: 32px;" href="changepropic.php">Change</a>
 								</td>
 							</tr>
 							<tr>
 								<td style="border-top: 1px solid gray; padding: 5px;" colspan="2">
 									<a href="editprofile.php">Edit Profile</a>
 								</td>
 							</tr>
 						</table>
 					</fieldset>
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