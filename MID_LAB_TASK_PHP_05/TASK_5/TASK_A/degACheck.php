<?php

	if (isset($_POST['submit'])) {
		
		if (!empty ($_POST["degree"])) {
			# code...
			foreach ($_POST["degree"] as $value) {
				# code...
				echo $value;
				echo "<br>";
			}
		}
		# code...
	}else{
		echo "Invalid request..";
	}
?>