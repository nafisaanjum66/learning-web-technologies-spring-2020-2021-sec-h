<?php 
session_start();
if(isset($_POST['submit']))
{
	$flag = 0;
	$count = 0;
	$count1 = 0;
	$count2 = 0;
	$count3 = 0;
	$count4 = 0;
	$count5 = 0;
	$count6 = 0;
	$count7 = 0;
$name = $_POST['myname'];
$email = $_POST['myemail'];
$username = $_POST['myusername'];
$password = $_POST['mypassword'];
$confirmpass = $_POST['Confirmpassword'];
if(isset($_POST['gender'])){
$genders = $_POST['gender'];
}
$day = $_POST['myday'];
$month = $_POST['mymonth'];
$year = $_POST['myyear'];
$day1 = "";
$month1= "";
$year1 = "";

if($name == "" || $email == "" || $username == "" || $password == "" || $confirmpass == "" || (isset($_POST['gender'])) == false || $day == "" || $month == "" || $year == "")
{
 echo "Fill up all the field.";
}else
{

	// name
		if(strlen($name)>3){
		for ($i=0; $i < strlen($name) ; $i++){
			if(($name[$i]>="a" && $name[$i] <= "z") || ($name[$i] >= "A" && $name[$i] <= "Z") || $name[$i] == "_" || $name[$i] == "-" || $name[$i] == ".")
			{ 
				$count+=1;
			}else{
				$count-=1;
			}
		}}else{
			echo "Please enter at least 4 characters in name!<br>";
		}
		// email
		if(strlen($email)>4)
		{
			if(strpos($email, "@"))
			{
					$count1=1;					
			}else{
				$count1= -1;
			}
		}
		else{
			echo "Please enter at least 4 characters in email!<br>";
		}
		
		// user name
		if(strlen($username)>3){
		for ($i=0; $i < strlen($username) ; $i++){
			if(($username[$i]>="a" && $username[$i] <= "z") || ($username[$i] >= "A" && $username[$i] <= "B") || $username[$i] == "_" || $username[$i] == "-" || $username[$i] == ".")
			{ 
				$count2+=1;
			}else{
				$count2-=1;
			}
		}}else{
			echo "Please enter at least 4 characters in username!<br>";
		}
		// password
			if(strlen($password)<=8){
				if(strpos($password, "@") || strpos($password, "#") || strpos($password, "$") || strpos($password, "%"))
				{
					$count3=1;					
				}
			}else{
				echo "Please insert less than 10 characters!!!!<br>";
			}
		
		// confirm password
			if(strlen($confirmpass)<=10){
				if(strpos($confirmpass, "@") || strpos($confirmpass, "#") || strpos($confirmpass, "$") || strpos($confirmpass, "%"))
				{
					$count4=1;					
				}
			}else{
				echo "Please insert less than 10 characters!!!!<br>";
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
		if($year>=1980 && $year <=2020)
		{
			$count7= 1;
		}
		// print 
		if(strlen($name)== $count && $count1 == 1 && strlen($username) == $count2 && $count3 == 1 && $count4 == 1 && $count5 == 1 && $count6 == 1 && $count7 == 1){
			if($password == $confirmpass){
			// $showconfirmpass = $confirmpass;
			// $showpassword = $password;
			// $showname = $name;
			// $showemail = $email;
			// $showusername = $username;
			// $day1 = $day;
			// $month1= $month;
			// $year1 = $year;
			echo "Insert successfully...<br>";
			$user = [
				'name'=>$name,
				'email'=>$email,
				'uname'=> $username,
				'password'=>$password,
				'gender'=>$genders,
				'day'=>$day,
				'month'=>$month,
				'year'=>$year,
				];
				$_SESSION['current_user']= $user;
				header('location:login.php');
				
			}else{
				echo "password and confirm password mismatch..!<br>";
			$showpassword = $password;
			$showname = $name;
			$showemail = $email;
			$showusername = $username;
			$day1 = $day;
			$month1= $month;
			$year1 = $year;
			}

		}else{
			if(strlen($name)!= $count){
				echo "Please Enter Correct....!!!<br>Name can contain alpha numeric characters, period, dash or underscore only.<br>";
			}
			if ($count1 != 1) {
				echo "Please Enter Correct....!!!<br>An Email should include '@gmail.com'.<br>";
			}
			if (strlen($username) != $count2) {
				echo strlen($username);
				echo "<br>";
				echo $count2;
				echo "Please Enter Correct....!!!<br>Username can contain alpha numeric characters, period, dash or underscore only.<br>";
			}
			if ($count3 != 1) {
				echo "Please Enter Correct....!!!<br>In password,Insert least one of the special characters (@, #, $, %).<br>";
			}
			if ($count4 != 1) {
				echo "Please Enter Correct....!!!<br>In confirm password,Insert least one of the special characters (@, #, $, %).<br>";
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
	<title>REGISTRATION</title>
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
			<td height="450px">
				<form method="POST" action="">
				<center>
				<fieldset style="width: 300px;">
			<legend>REGISTRATION</legend>
			
			<table>
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Name</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="text" name="myname" value="<?php 
							if(isset($showname)){
								echo $showname;
								}?>"></td>
				</tr>
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Email</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="email" name="myemail" value="<?php 
							if(isset($showemail)){
								echo $showemail;
								}?>"></td>
				</tr>
				
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">User Name</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="text" name="myusername" value="<?php 
							if(isset($showusername)){
								echo $showusername;
								}?>"></td>
				</tr>
				
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Password</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="password" name="mypassword" value="<?php 
							if(isset($showpassword)){
								echo $showpassword;
								}?>"></td>
				</tr>
				<tr>
					<td height="30px;" style="border-bottom: 1px solid gray;">Confirm Password</td>
					<td height="30px;" style="border-bottom: 1px solid gray;">:<input type="password" name="Confirmpassword" value="<?php 
							if(isset($showconfirmpass)){
								echo $showconfirmpass;
								}?>"></td>
				</tr>
				
				<tr>
					<td height="70px;" style="border-bottom: 1px solid gray;" colspan="2">
						<fieldset>
							<legend>GENDER</legend>	
								<input type="radio" name="gender" value="Male"> Male
								<input type="radio" name="gender" value="Female"> Female
								<input type="radio" name="gender" value="Other"> Other 			
							</fieldset>
					</td>
				</tr>

				<tr>
					<td height="70px;" style="border-bottom: 1px solid gray;" colspan="2">
						<fieldset>
							<legend>Date of Birth</legend>
							<input type="num" name="myday" value="<?php 
										if(isset($_POST['myday'])){
											echo $day1;
											}
 										?>" size="1">/
							<input type="num" name="mymonth" value="<?php 
											if(isset($_POST['mymonth'])){
												echo $month1;
											}
											 ?>" size="1">/
							<input type="num" name="myyear" value="<?php 
										if(isset($_POST['myyear'])){
											echo $year1;
										}
										 ?>" size="1">
							<em>(dd/mm/yyyy)</em>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td height="30px;" colspan="2">
						<input type="submit" name="submit" value="Submit">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</fieldset>
		</center>
	</form>
			</td>
		</tr>
		<tr>
			<td height="60px" align="center">Copyright &copy; 2017</td>
		</tr>
	</table>	
</body>
</html>