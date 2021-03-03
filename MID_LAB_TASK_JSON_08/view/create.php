<?php
	$title= "Create Page";
	include('header.php');

if(isset($_POST['create'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if($username == "" || $email == "" || $password == "" || $repass == ""){
			echo "null submission.....";
		}else{

			if($password == $repass){

				$myfile = fopen('../controller/list.json', 'r');
				$data = fread($myfile, filesize('../controller/list.json'));
				$user1 = json_decode($data, true);
				$id=count($user1)+1;

				$user = [	'id'=>$id,
							'username'=>$username, 
							'password'=>$password, 
							'email'=> $email
						];
	
				array_push($user1, $user);

				$data1 = json_encode($user1);
				$myfile1 = fopen('../controller/list.json', 'w');
				fwrite($myfile1, $data1);

			}else{
				echo "password & confirm password did not matched..";
			}
		}

	}

?>


	<div id="page_title">
		<h1>Create Page</h1>
	</div>

	<div id='nav_bar'>
		<a href="home.php"> Back</a> |
		<a href="../controller/logout.php"> logout</a>	
	</div>

	<div id="main_content">
		<form method="post" action="">
			<fieldset>
				<legend>Create New</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value=""> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value=""> </td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="repass" value=""> </td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value=""> </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="create" value="Create">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<?php include('footer.php'); ?>