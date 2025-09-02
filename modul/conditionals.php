<?php
$condition = 10;
$condition2 = 5;

if ($condition == 10) {
    echo "condition 10<br>";
} elseif ($condition == 5) {
    echo "condition 5<br>";
} else {
    echo "all other conditions\n";
}

if ($condition === 10 && $condition2 === 5) echo "10 and 5<br>";
if ($condition === 10 || $condition2 === 5) echo "10 or 5<br>";

$isValid = true;
echo $isValid ? 'user valid' : 'user not valid';
echo "<br>";

$name = null;
echo $name??'Mike';