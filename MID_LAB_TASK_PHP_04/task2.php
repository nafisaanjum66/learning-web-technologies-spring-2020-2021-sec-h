<?php
	
	function VatCount($amount , $vat){
		$total = $amount * ($vat/100);
		
		print "VAT (Value Added Tax) over an amount: $total";
	}

	echo VatCount(200,50);


?>