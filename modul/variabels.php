<?php
$name = 'Mike'; 
$isActive = true; 
$number = 25; 
$amount = 99.95; 
$fruits = ['orange', 'apple', 'banana'];
const MAX_USERS = 50; 
$name_2 = &$name_1;

$age = (int)readline('Your age: ');
echo 'Your age is' . (string)$age;

echo gettype($age); 

echo is_int($age); 
echo is_float(12.5); 
echo is_string($name); 