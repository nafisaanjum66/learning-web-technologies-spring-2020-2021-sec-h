<?php
	
	function Rectangle($length , $width){
		$area = $length * $width;
		$perimeter = 2*($length+$width);

		print "Area of a rectangle : $area, Perimeter of a Rectangle :$perimeter";
	}

	echo Rectangle(5,2);


?>