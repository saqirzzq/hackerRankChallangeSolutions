<?php

function breakingRecords($scores) {
  $mx = 0;
  $mn = 0;
  $mxTimes = 0;
  $mnTimes = 0;
  for ($i=0; $i < count($scores); $i++) {
  	$crnt = $scores[$i];
    $i == 0 ? $mn = $mx = $scores[$i] : '';
    if ($crnt > $mx) {
      $mxTimes += 1;
     	$mx = $crnt;
    } elseif ($crnt < $mn) {
      $mnTimes += 1;
      $mn = $crnt;
    }
  }

  return array($mxTimes, $mnTimes);
}