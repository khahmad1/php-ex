

<?php
function factorial($n) {
    $result = 1;
    $i = 1;
    while ($i <= $n) {
      $result *= $i;
      $i++;
    }
    return $result;
  }
  echo factorial(5);