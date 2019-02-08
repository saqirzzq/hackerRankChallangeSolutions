<?php

function getMoneySpent($keyboards, $drives, $b) {
	rsort($keyboards);
	rsort($drives);
	$mx = 0;
	foreach ($keyboards as $key => $price) {
		foreach ($drives as $dkey => $dPrice) {
			if (($p = $price + $dPrice) <= $b && $p > $mx) {
				$mx = $p;
			}
		}
	}

	return $mx > 0 ? $mx : -1;
}