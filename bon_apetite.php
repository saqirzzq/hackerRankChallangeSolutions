<?php

function bonAppetit($bill, $k, $b) {
  $total = array_sum($bill);
  $sum = $b - (($total - $bill[$k]) / 2);
  echo $sum < 1 ? 'Bon Appetit' : $sum; 
}