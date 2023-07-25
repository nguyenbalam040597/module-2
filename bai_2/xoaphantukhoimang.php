<?php
$array = [1,2,3,4,5,6];
$index_del = array_search('X', $array);
$search = 'X';
if($index !== false) {
    echo "phan tu $search co vi tri la: $index_del";
} else {
    echo "phan tu $search khong co trong mang";
}
print_r($array);
?>