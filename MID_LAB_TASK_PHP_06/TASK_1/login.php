<?php 
if(isset($_POST['submit']))
{
$count1= 0;
$count = 0;
$name = $_POST['myname'];
$password = $_POST['mypassword'];
if($name != "" && $password != "")
{
	if(strlen($name)>1){

		for ($i=0; $i < strlen($name) ; $i++){
			if(($name[$i]>="a" && $name[$i] <= "z") || ($name[$i] >= "A" && $name[$i] <= "Z") || $name[$i] == "_" || $name[$i] == "-" || $name[$i] == ".")
			{ 
				$count+=1;
			}else{
				$count-=1;
			}
		}}else{
			echo "Failed....Input at least 2 charcter at User Name.....";
			echo "<br>";
		}

		if($password != ""){
			if(strlen($password)<=7){
				if(strpos($password, "@") || strpos($password, "#") || strpos($password, "$") || strpos($password, "%"))
				{
					$count1=1;					
				}
			}else{
				echo "Failed.....insert less than eight (8) characters......
				";
				echo "<br>";
			}
		}


		if(strlen($name)== $count && $count1 == 1){
			echo "insert successfully.....<br>";
			echo strlen($name);
			$showname = $name;
			echo "<br>";
			echo $count;
		}else{
			if(strlen($name)!= $count){
				echo "Failed to insert!!!.....Name can contain alpha numeric characters, period, dash or underscore.......";
				echo "<br>";
			}elseif ($count1 != 1) {
				echo "Failed to insert!!!....In password,Insert least one of the special characters (@, #, $, %).......";
				echo "<br>";
			}
		}

	}else{
		echo "Input name or password......";
	}	
}
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>User Name:</td>
					<td><input type="text" name="myname" value="<?php 
							if(isset($showname)){
								echo $showname;
								}?>"></td>

					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="mypassword" value="<?php 
						if(isset($_POST['mypassword'])){
							if(strlen($password)>1){
								echo $_POST['mypassword'];
							}}?>"></td>
						</tr>
				</table>
					<hr>
					<input type="checkbox" name="remember" value="remember" <?php if(isset($_POST['remember'])){if($_POST["remember"] == "remember") {echo 'checked';}} ?>>Remember Me
					<br> <br>
					<input type="submit" name="submit" value="Submit">
					<a href="">Forgot Password?</a>
		</fieldset>
	</form>		
</body>
</html>