<?php
for ($i = 0; $i < 5; $i++) {
    echo "i value = $i<br>";
}

$number = 1;
while ($number < 5) {
    echo "value: $number<br>";
    $number++;
}

$number = 1;
do {
    echo "value: $number<br>";
    $number++;
} while ($number < 5);

$values = ['one', 'two', 'three'];
foreach ($values as $value) {
    if ($value === 'two') break;
    echo "$value<br>";
}