<?php
function findmin($arr) {
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min; 
}
$nums = [-2, 0, 5, 7, 9, -5, 30, 100];
foreach ($nums as $num) {
    echo $num . " ";
}
$minValue = findMin($nums);
echo "</br>";
echo "The mininum value is: " . $minValue;



function findmax($arr) {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}
$nums = [-2, 0, 5, 7, 9, -5, 30, 100];
foreach ($nums as $num) {
    echo $num . " ";
}
$maxValue = findMin($nums);
echo "</br>";
echo "The maxinum value is: " . $maxValue;
?>