<?php
function mergeWithOrigin($nums1, $m, $nums2, $n) {
    $i = 0;
    $j = 0;
    $merged = [];

    while ($i < $m && $j < $n) {
        if ($nums1[$i] <= $nums2[$j]) {
            $merged[] = ["val" => $nums1[$i], "src" => "nums1"];
            $i++;
        } else {
            $merged[] = ["val" => $nums2[$j], "src" => "nums2"];
            $j++;
        }
    }

    while ($i < $m) {
        $merged[] = ["val" => $nums1[$i], "src" => "nums1"];
        $i++;
    }

    while ($j < $n) {
        $merged[] = ["val" => $nums2[$j], "src" => "nums2"];
        $j++;
    }

    return $merged;
}

function printResult($example, $nums1, $m, $nums2, $n) {
    $merged = mergeWithOrigin($nums1, $m, $nums2, $n);

    echo "Example $example:<br>";
    echo "nums1 = [" . implode(", ", $nums1) . "]<br>";
    echo "nums2 = [" . implode(", ", $nums2) . "]<br>";

    $output = [];
    foreach ($merged as $item) {
        if ($item["src"] === "nums1") {
            $output[] = "<u>{$item['val']}</u>";
        } else {
            $output[] = $item["val"];
        }
    }
    echo "output: [" . implode(", ", $output) . "]<br><br>";
}

// Example 1
$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;
printResult(1, $nums1, $m, $nums2, $n);

//  Example 2 
$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;
printResult(2, $nums1, $m, $nums2, $n);

//  Example 3 
$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;
printResult(3, $nums1, $m, $nums2, $n);
?>