<?php
	$colors = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');

	$given_value = 'fvsfb';

	foreach ($colors as $value) {
		echo "$value\t";
	}
	echo "\n";
	if($value==$given_value)
	{
		echo "Element found";
	}
	else
	{
		echo "Element not found";
	}

?>