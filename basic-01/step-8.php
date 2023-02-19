<?php
$grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');
$first_three_items = array_slice($grocery, 0, 3);
$last_item = end($grocery);
echo $message = 'Hello Sir, do you have ' . implode(', ', $first_three_items) . '? Also if you sell fruits can I find a ' . $last_item . '? <br>';