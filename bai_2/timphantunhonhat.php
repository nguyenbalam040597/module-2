<?php
$array = [1,2,3,4,5,6];
$min = $array[0];
for ($i = 1; $i < count($array); $i++) {
    if($array[$i] < $min) {
        $min = $array[$i];
    }
}
echo "phan tu nho nhat la $min";

?>