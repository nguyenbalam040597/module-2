<?php
$array = [1,2,3];
$array2 = [4,5,6];
$array3 = [];
for ($i = 0; $i < count($array); $i++) {
    // $array[$i] = $array3[$i];
    array_push($array3, $array[$i]);
}
for ($j = 0; $j < count($array2); $j++) {
    array_push($array3, $array2[$j]);
}
echo "<pre>";
print_r($array3);
echo "</pre>";
?>