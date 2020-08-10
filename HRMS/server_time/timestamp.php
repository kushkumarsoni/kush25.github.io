<?php

// plaese include this function

function gtime()
{
	// set the date_default_timezone

	date_default_timezone_set("Asia/Kolkata");
	$time=date("h:i:s");
	//echo $time;
	return $time;
}
function gdate()
{
	date_default_timezone_set("Asia/Kolkata");
	$date=date("d-m-Y");
	//echo $date;
	return $date;
}


?>