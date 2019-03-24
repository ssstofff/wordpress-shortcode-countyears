<?php

// this function creates a shortcode [countyears yearsince=""] to keep updated dynamically the amount of years 
function countyears_shortcode( $atts ) {
	
	 extract( shortcode_atts( array(
      'yearsince' => 'yearsince'
      ), $atts ) );
	
	if (ctype_digit($yearsince)) {
	$yeartoday = date("Y");
	$years = $yeartoday-$yearsince;
	
	$result = $years;
	}
	else
	{
		$result = "<span style='color:red;font-weight:bold;'>{Shortcode [countyears] error. Attribute 'yearsince' is not a number. Please correct.}</span>";
	}
	
     return $result;
     
}
add_shortcode('COUNTYEARS', 'countyears_shortcode');
	
?>
