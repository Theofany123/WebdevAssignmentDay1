<?php
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$array3 = array_merge($array1, $array2);
print_r($array3);

$array3 = [...$array1, ...$array2];
print_r($array3);

$names = ['Mike', 'Peter', 'Paul'];
$people = ['John', ...$names];
print_r($people);
