<?php 
function binarySearch($arr, $x) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        // Nếu phần tử ở giữa là phần tử cần tìm kiếm, trả về vị trí của phần tử đó
        if ($arr[$mid] == $x) {
            return $mid;
        }

        // Nếu phần tử ở giữa lớn hơn giá trị cần tìm kiếm, tìm kiếm trong nửa đầu của mảng
        if ($arr[$mid] > $x) {
            $right = $mid - 1;
        }

        // Nếu phần tử ở giữa nhỏ hơn giá trị cần tìm kiếm, tìm kiếm trong nửa sau của mảng
        else {
            $left = $mid + 1;
        }
    }

    // Nếu không tìm thấy phần tử cần tìm kiếm, trả về -1, tra ve gia tri duoi 0
    return -1; 
}
   

// Mảng đã sắp xếp
$arr = [1, 5, 5, 7, 9];
        // 0, 1, 2, 3, 4
// Giá trị cần tìm kiếm
$x = 5;

// Tìm kiếm giá trị cần tìm kiếm trong mảng
$result = binarySearch($arr, $x);

// In kết quả
if ($result == -1) {
    echo "Không tìm thấy giá trị $x trong mảng";
} else {
    echo "Giá trị $x được tìm thấy tại vị trí $result trong mảng";
}
?>