<?php

	if (isset($_POST['submit'])) {
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		
		if($day == "" || $month == "" || $year == ""){
			echo "null submission";
		}else{
			echo "Success...<br>";
			echo "Day : $day";
			echo "<br>";
			echo "Month : $month";
			echo "<br>";
			echo "Year : $year";
			echo "<br>";

		}
		# code...
	}else{
		echo "Invalid request..";
	}
?>