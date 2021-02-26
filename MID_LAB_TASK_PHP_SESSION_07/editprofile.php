<?php 
session_start();
$user = $_SESSION['current_user'];
if(isset($_POST['submit']))
{
$count = 0;
$count1 = 0;
$count5 = 0;
$count6 = 0;
$count7 = 0;
$name = $_POST['myname'];
$email = $_POST['myemail'];
if(isset($_POST['gender']))
{
	$genders = $_POST['gender'];
}
$day = $_POST['myday'];
$month = $_POST['mymonth'];
$year = $_POST['myyear'];
if($name == "" || $email == "" || isset($_POST['gender'])== false || $day == "" || $month == "" || $year == "")
{
	echo "Fill up all the field........";
}else
{
// name
	if(strlen($name)>1){
		for ($i=0; $i < strlen($name) ; $i++){
			if(($name[$i]>="a" && $name[$i] <= "z") || ($name[$i] >= "A" && $name[$i] <= "Z") || $name[$i] == "_" || $name[$i] == "-" || $name[$i] == ".")
			{ 
				$count+=1;
			}else{
				$count-=1;
			}
		}}else{
			echo "Failed....Input at least 2 charcter at Name.....";
			echo "<br>";
		}
	// email
		if(strlen($email)>2){
			if(strpos($email, "@"))
			{
				$count1=1;					
			}else{
				echo "Failed....Input at least 3 charcter at email......";
				echo "<br>";
			}
		}	
		// dob
		if($day>=1 && $day <=31)
		{
			$count5= 1;
		}
		if($month>=1 && $month <=12)
		{
			$count6= 1;
		}
		if($year>=1950 && $year <=2030)
		{
			$count7= 1;
		}
	// print 
		if(strlen($name)== $count && $count1 == 1 && $count5 == 1 && $count6 == 1 && $count7 == 1){

			$_SESSION['current_user']['name']= $name;
			$_SESSION['current_user']['email']= $email;
			$_SESSION['current_user']['gender']= $genders;
			$_SESSION['current_user']['day']= $day;
			$_SESSION['current_user']['month']= $month;
			$_SESSION['current_user']['year']= $year;	
			header('location:viewprofile.php');

		}else{
			if(strlen($name)!= $count){
				echo "Please Enter Correct....!!!<br>Name can contain alpha numeric characters, period, dash or underscore only.<br>";
			}
			if ($count1 != 1) {
				echo "Please Enter Correct....!!!<br>An Email should include '@gmail.com'.<br>";
			}
			if ($count5 != 1) {
				echo "Enter Day within 1 to 31.<br>";
			}
			if ($count6 != 1) {
				echo "Enter month within 1 to 12<br>";
			}
			if ($count7 != 1) {
				echo "Enter year within 1980 to 2020<br>";
			}
			$gender = "";
		}

	}
}
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit profile</title>
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
		<legend>EDIT PROFILE</legend>
		<table width="100%">
			<tr>
				<td  style="border-bottom: 1px solid gray; padding: 5px 0px;">Name</td>
				<td  style="border-bottom: 1px solid gray; padding: 5px 0px;">:<input type="text" name="myname" value=""></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid gray; padding: 5px 0px;">Email</td>
				<td style="border-bottom: 1px solid gray; padding: 5px 0px;">:<input type="email" name="myemail" value=""></td>
			</tr>

			<tr>
				<td style="border-bottom: 1px solid gray; padding: 5px 0px;">Gender</td>
				<td style="border-bottom: 1px solid gray; padding: 5px 0px;" colspan="2">:	
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
					<input type="radio" name="gender" value="Other"> Other 			
								</td>
							</tr>

							<tr>
								<td style="border-bottom: 1px solid gray; padding: 5px 0px;">Date of Birth</td>
								<td style="border-bottom: 1px solid gray; padding: 5px 0px;" colspan="2">:
									<input type="num" name="myday" value="" size="1">/
									<input type="num" name="mymonth" value="" size="1">/
									<input type="num" name="myyear" value="" size="1">
									<em>(dd/mm/yyyy)</em>
								</td>
							</tr>
							<tr>
								<td style="padding: 7px 0px;" height="30px;" colspan="2">
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