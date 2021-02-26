<?php 
session_start();
$user = $_SESSION['current_user'];
if(isset($_POST['submit']))
{
	$cpass=$_POST['currentpass'];
	$npass=$_POST['newpass'];
	$rnpass=$_POST['retypenewpass'];
	if($cpass == "" || $npass == "" || $rnpass == ""){
		echo "Fill up all the field";
	}else{
		if($user['password'] == $cpass){

			if(strlen($npass)<=10){
				if(strpos($npass, "@") || strpos($npass, "#") || strpos($npass, "$") || strpos($npass, "%"))
				{
					if($npass == $rnpass){

						$_SESSION['current_user']['password'] = $npass;
						header('location:dashboard.php');

					}
					else{
						echo "New password and retype new password mismatch";
					}				
				}
				else{
					echo "Please Enter Correct....!!!<br>In password,Insert least one of the special characters (@, #, $, %).<br>";
				}
			}else{
				echo "Please insert less than 10 characters.<br>";
			}

		}
		else{
			echo "Invalid current password";
		}
	}
}
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CHANGE PASSWORD</title>
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
<td style="width: 30%;" >
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
	
<form method="POST" action="">
	<fieldset style="margin: 20px;">
		<legend>CHANGE PASSWORD</legend>
		<table width="100%">
			<tr>
				<td  style="padding: 5px 0px;">Current Password</td>
				<td  style="padding: 5px 0px;">:<input type="password" name="currentpass" value=""></td>
			</tr>
			<tr>
				<td style="padding: 5px 0px;">New Password</td>
				<td style="padding: 5px 0px;">:<input type="password" name="newpass" value=""></td>
			</tr>

			<tr>
				<td style="padding: 5px 0px;">Retype new Password</td>
				<td style="padding: 5px 0px;">:<input type="password" name="retypenewpass" value=""></td>
			</tr>
			<tr>
				<td style="border-top: 1px solid gray; padding: 5px 0px;" colspan="2">
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