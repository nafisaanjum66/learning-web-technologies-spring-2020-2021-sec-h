<?php
	
	$myfile = fopen('../controller/list.json', 'r');
	$data = fread($myfile, filesize('../controller/list.json'));

	$user = json_decode($data, true);

	for ($i=0; $i < sizeof($user); $i++) { 

		if($user[$i]['id']==$_GET['id']){

			$id1=$_GET['id']-1;
			unset($user[$id1]);

			$data = json_encode($user);
			$myfile1 = fopen('../controller/list.json', 'w');
			fwrite($myfile1, $data);

			header('location: user_list.php');
			}
		}	
?>


