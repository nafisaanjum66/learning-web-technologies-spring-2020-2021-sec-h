<?php

	if (isset($_POST['submit'])) {
		$gender=$_POST['gender'];
		//$female=$_POST['gender'];
		//$others=$_POST['gender'];
		
		if(isset($_POST['gender'])){
			echo "Success...<br>";
			echo "You gender is : $gender";
		}else{
			echo "Null Submission...<br>";
			
		}
		# code...
	}else{
		echo "Invalid request..";
	}
?>