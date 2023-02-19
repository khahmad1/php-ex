<?php
function count_word($sentence, $word) {
  $count = 0;
  $words = explode(" ", $sentence);
  $i = 0;
  while ($i < count($words)) {
    if ($words[$i] == $word) {
      $count++;
    }
    $i++;
  }
  return $count;
}
$sentence = "The quick brown fox jumps over the lazy dog";
$word = "the";
echo count_word($sentence, $word);