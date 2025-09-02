
<?php
for ($i = 0; $i < 20; $i++) {
    echo "i value = " . $i . "<br>";
}
$number = 1;
while ($number < 10) {
    echo "value : " . $number . "<br>";
    $number += 1;
}
$number = 1;
do {
    echo "value : " . $number . "<br>";
    $number += 1;
} while ($number < 10);

$values = ['one', 'two', 'three'];
foreach ($values as $value) {
    if ($value === 'two') {
        echo "Breaking at value: " . $value . "<br>";
        break; 
    } elseif ($value === 'three') {
        echo "Skipping value: " . $value . "<br>";
        continue; 
    }
    echo "Value is: " . $value . "<br>";
}
