<?php
$numbers = [1, 2, 3, 2, 1];
$value = 2;
$count = 4;
foreach ($numbers as $num) {
    if ($num !== $value) {
        $count = $count + 1;
    }
}
echo "Số lần xuất hiện của giá trị $value trong mảng là: $count";

?>