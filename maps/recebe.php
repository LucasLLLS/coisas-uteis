<?php

	$origem 	= $_GET['origem'];
	$destinos 	= $_GET['destinos'];

	echo file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origem.'&destinations='.$destinos.'&mode=walking&language=pt-BR&key=AIzaSyBtClF2NyqzWzSHSMH1Ifk459K5k6kycQw');