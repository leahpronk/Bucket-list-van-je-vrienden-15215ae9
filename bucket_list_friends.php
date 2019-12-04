<?php

$vrienden = readline ("Hoeveel vrienden zal ik vragen om hun droom?");

if (is_numeric($vrienden)) {
	echo "";
} else {
	exit("Dit is geen getal, probeer opnieuw");
}

for ($i=0; $i <$vrienden ; $i++) { 

	$data = array();

	$naam = readline ("Wat is jouw naam?");
	
	$droom = readline ("Wat is jouw droom?");

	$combi[$naam] = $droom;
 }

 
 foreach ($combi as $naam => $droom) {
 	echo $naam . " heeft dit als droom: " . $droom . PHP_EOL;
 }
