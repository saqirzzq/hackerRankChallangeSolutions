<?php

function kangaroo($x1, $v1, $x2, $v2) {
	$jumps = $x1 + $x2;
	for ($i=0; $i < $jumps; $i++) { 
		$x1 += $v1;
		$x2 += $v2;
		if ($x1 == $x2) {
			return 'YES';
		}
	}

	return 'NO';
}