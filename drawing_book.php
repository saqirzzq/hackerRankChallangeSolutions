<?php

function pageCount($n, $p) {
  $left = floor(($p + 2) / 2) - 1;
  $right = floor(($n + 2) / 2) - $left - 1;
  return floor(min($left, $right));
}