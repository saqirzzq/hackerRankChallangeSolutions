<?php

function catAndMouse($x, $y, $z) {
	$difA = abs($x - $z);
	$difB = abs($y - $z);

	return $difA == $difB ? 'Mouse C' : 'Cat ' . (min($difA, $difB) == $difA ? 'A' : 'B')
}