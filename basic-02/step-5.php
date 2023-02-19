<?php
function wordToDigit($word) {
    $digit = '';
    switch ($word) {
      case 'zero':
        $digit = '0';
        break;
      case 'one':
        $digit = '1';
        break;
      case 'two':
        $digit = '2';
        break;
      case 'three':
        $digit = '3';
        break;
      case 'four':
        $digit = '4';
        break;
      case 'five':
        $digit = '5';
        break;
      default:
        $digit = 'Invalid word';
    }
    
    return $digit;
  }
  echo wordToDigit('zero');
  echo wordToDigit('one');
  echo wordToDigit('five');
  