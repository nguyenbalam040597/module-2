<?php
$array = array(1,2,3,4,5);
$min_value = min($array);
$min_index = array_search($min_value, $array);
echo " vi tri phan tu nho nhat trong mang la: " . $min_index;
$min = $array[0];
$index = 0;
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] < $min) {
        $min = $array[$i];
        $index = $i; 
    }
}
echo "Phần tử nhỏ nhất trong mảng có giá trị là $min, vị trí của nó là $index"
?>
<!-- <?php
function findmin($array) {
    $min = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if($array[i] < $min) {
            $min = $array[i];
        }
    }
    return $min;
}
?> -->