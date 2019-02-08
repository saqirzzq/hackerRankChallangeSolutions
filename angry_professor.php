<?php

function angryProfessor($k, $a) {
	asort($a);
	$l = 0;
	foreach ($a as $key => $v) {
		$l = $v < 1 ? $l + 1 : $l;
		if ($l >= $k) {
			return 'NO';
		}
	}

	return 'YES';
}