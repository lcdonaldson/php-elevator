<?php

//1. elevator & person are not going 
//the same direction = "no its going the wrong way";
//2. The elevator and the person are going the same direction, 
//but the elevator has passed the person = "No, it's already passed.";
//3. The elevator and the person are going the same direction, 
//and the elevator has not yet passed = "Yes, pick me up.";
//4. The elevator and the person are going the same direction 
//and are on the same floor = "Yes, pick me up.";

/************************************************************/

$personDir = 'down';
$carDir = 'down';

$personFloor = 4;
$carFloor = 2;

	if ($personDir == 'up') {
		if ($carDir == 'up') {
			if ($personFloor < $carFloor) {
				echo "no its already passed";
			} else { 
				echo "Yes, pick me up.";
			} 
		} else {
			echo "no its going the wrong way";
		}
	} else {
		if ($carDir == 'up') {
			echo "no its going the wrong way";
		} else if ($personFloor <= $carFloor) {
			echo "Yes pick me up";
		} else {
			echo "no its already passed";
		}
	}
/**********************************************/
?>
