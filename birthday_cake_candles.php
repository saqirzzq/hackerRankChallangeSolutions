<?php

function birthdayCakeCandles($ar) {
  arsort($ar);
  foreach (array_count_values($ar) as $key => $value) {
    return $value;
  }
}