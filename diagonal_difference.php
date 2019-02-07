<?php

function diagonalDifference($arr) {
  $fetched = 0;
  $diffA = 0;
  $diffB = 0;
  foreach ($arr as $key => $arrNow) {
    $diffA += $arrNow[$fetched];
    $fetched += 1;
  }

  $fetched = count($arr) - 1;
  foreach ($arr as $key => $arrNow) {
    $diffB += $arrNow[$fetched];
    $fetched -= 1;
  }

  return abs($diffA - $diffB);
}