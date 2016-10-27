<?php

	$datetime1 = new DateTime('2009-10-11');
	$datetime2 = new DateTime('2009-11-13');
	$interval = $datetime1->diff($datetime2);
	echo $interval->format('%m meses');

	if($datetime1 > $datetime2){
		echo 'antes';
	}