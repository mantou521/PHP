<?php


$numbers = range(1, 5);

$new_numbers = array_map(function($a) {
	return $a * 2;
}, $numbers);

print_r($new_numbers);