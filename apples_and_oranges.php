<?php

// Complete the diagonalDifference function below.
function pr($a) { echo '<pre>'; print_r($a); echo '</pre>'; }
function pex($a) { echo '<pre>'; print_r($a); echo '</pre>'; exit; }
function dp($a) { echo $a . "\n"; }

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {  
  $count = function($fPos, $tPos, $s, $t) {
  	$c = 0;
    foreach ($fPos as $key => $position) {
	 		$fallsAt = $tPos + $position;
	 		if (($s <= $fallsAt) && ($fallsAt <= $t)) {
	 			$c += 1;
	 		}
	 	}

	 	return $c;
	};

	$foundApples = $count($apples, $a, $s, $t);
  $foundOranges = $count($oranges, $b, $s, $t);

 	echo "$foundApples\n$foundOranges";
}

// exp 1 1
countApplesAndOranges(7, 11, 5, 15, array(-2, 2, 1), array(5, -6));