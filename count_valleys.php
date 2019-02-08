<?php

function countingValleys($n, $s) {
  $lv = $vals = 0;
  $steps = str_split($s);
  for ($i=0; $i < $n; $i++) {
    $crnt = $steps[$i];
    $lv = $crnt == 'U' ? $lv + 1 : $lv - 1;
    $vals = $lv == -1 && $crnt == 'D' ? $vals + 1 : $vals;
    $last = $crnt;
  }

  return $vals;
}