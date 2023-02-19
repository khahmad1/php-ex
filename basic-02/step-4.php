<?php
function isArmstrong($num) {
  $sum = 0;
  $num_len = strlen($num);
  for ($i = 0; $i < $num_len; $i++) {
    $sum += pow($num[$i], $num_len);
  }
  if ($sum == $num) {
    return true;
  } else {
    return false;
  }
}
$num1 = 153;
$num2 = 430;
$num3 = 921;
$num4 = 777;
echo "Is $num1 an Armstrong number? " . (isArmstrong($num1) ? "Yes" : "No") . "<br>";
echo "Is $num2 an Armstrong number? " . (isArmstrong($num2) ? "Yes" : "No") . "<br>";
echo "Is $num3 an Armstrong number? " . (isArmstrong($num3) ? "Yes" : "No") . "<br>";
echo "Is $num4 an Armstrong number? " . (isArmstrong($num4) ? "Yes" : "No") . "<br>";