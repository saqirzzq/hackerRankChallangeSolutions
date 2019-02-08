<?php

function beautifulDays($i, $j, $k) {
	$d = 0;
	for ($i=$i; $i <= $j; $i++) { 
		$d = !is_float(($i - strrev($i)) / $k) ? $d + 1 : $d;
	}

	return $d;
}