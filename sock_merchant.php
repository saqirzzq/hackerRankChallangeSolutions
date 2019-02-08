<?php

function sockMerchant($n, $ar) {
	$counts = array_count_values($ar);
	$pairs = 0;
	array_filter($counts, function($c) use (&$pairs) {
		if ($c > 1) {
			$pairs += $c % 2 == 0 ? $c / 2 : ($c - 1) / 2;
		}
	});

	return $pairs;
}