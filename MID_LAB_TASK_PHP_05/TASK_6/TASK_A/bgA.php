<?php 
if(isset($_POST['submit']))
{
	 $blood = ($_POST["bg"]);
	if($blood == "")
	{
		echo "null submission";
	}else{
		echo "Your blood group is : ";
		echo $blood;
	}
}

?>