<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['password'];

		if($id == "" || $password == ""){
			echo "null submission...";
		}else{
			$myfile = fopen('list.json', 'r');
			$data = fread($myfile, filesize('list.json'));
			$user = json_decode($data, true);
			
			for ($i=0; $i < sizeof($user); $i++) { 

				if($id==$user[$i]['id']){
					if($password==$user[$i]['password']){
						$_SESSION['flag'] = true;
						$_SESSION['id']= $user[$i]['id'];
						$_SESSION['name']=$user[$i]['name'];
						header('location: ../view/user_home.php');					
					}
				}
				
				}
				echo "Invalid username or password ...";
			}

		}
?>