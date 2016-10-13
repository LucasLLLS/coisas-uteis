<?php

	$origem 	= $_GET['origem'];
	$destino 	= $_GET['destino'];

	echo file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origem.'&destinations='.$destino.'&mode=walking&language=pt-BR&key=AIzaSyBtClF2NyqzWzSHSMH1Ifk459K5k6kycQw');