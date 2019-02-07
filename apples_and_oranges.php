<?php

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