<?php
function binary_search($arr, $search_value) {
    $left = 0;
    $right = count($arr) - 1;
    while ($left <= $right) {
        $mid = floor(($left + $right)/2);
        if ($arr[$mid] == $search_value) {
            return $mid;
        }
        if ($arr[$mid] < $search_value) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    return -1;
}
$x = 7;
$numbers = array(1, 3, 5, 7, 9);
echo "Nhập vào một giá trị cần tìm kiếm: ";
$stdin = fopen('php://stdin', 'r');
$search_value = trim(fgets($stdin));
fclose($stdin);
$result = binary_search($numbers, $search_value);
if ($result == -1) {
    echo "Không tìm thấy giá trị cần tìm kiếm";
} else {
    echo "Giá trị cần tìm kiếm nằm ở chỉ số $result";
}
?>