<?php
session_start();
	require_once('../model/userModel.php');

if(isset($_POST['submit']))
{
	$cpass = $_POST['cpass'];
	$npass = $_POST['npass'];
	$rnpass = $_POST['rnpass'];

	if($cpass == "" || $npass == "" || $rnpass == "")
	{
		echo "failed to update....";
	}
	else{
		if($_SESSION['password'] == $cpass)
		{
			{
				if($npass == $rnpass)
				{
					unset($_SESSION['password']);
					$username = $_SESSION['username'];
					$id = $_SESSION['id'];
					$status = changeUserByPassword($npass,$username, $id);
					if($status){
						header('location: ../view/changepass.php');
						$_SESSION['password'] = $npass;
					}else{
						echo "failed";
					}
				}else{
					echo "new password and retype new password is not mathched";
				}
			}

		}else{
			echo "current password is not mathched";
		}
	}
}

?>