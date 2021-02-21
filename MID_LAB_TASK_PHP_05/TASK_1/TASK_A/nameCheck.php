<?php


	if (isset($_POST['submit'])) {
		$name=$_POST['myname'];

		if($name == ""){
			echo "null submission";
		}else{
			echo "Success...";
		}

	}else{
		echo "Invalid request..";
	}
?>