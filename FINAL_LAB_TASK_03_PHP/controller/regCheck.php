<?php
	session_start();
	require_once('../model/userModel.php');

	if(isset($_POST['signup'])){

		$id = $_POST['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$type = $_POST['type'];

		if( $id == "" || $username == "" || $email == "" || $password == "" || $repass == "" || !(isset($type))){
			echo "null submission...";
		}else{

			if($password == $repass){

				$user = [
							'id' => $id,
							'username' => $username,
							'password' => $password,
							'email' => $email,
							'type' => $type
						];

				$status = insertUser($user);

				if($status){
					header('location: ../view/login.php');
				}else{
					echo "error";
				}

			}else{
				echo "password & confirm password mismatch..";
			}
		}

	}
?>