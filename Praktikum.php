<?php
function mergeArrays($arr1, $arr2) {
    $merged = array_merge($arr1, $arr2);
    sort($merged);
    return $merged;
}
$arr1 = [1, 2, 3];
$arr2 = [2, 5, 6];

$result = mergeArrays($arr1, $arr2);
echo "[" . implode(",", $result) . "]"; 
