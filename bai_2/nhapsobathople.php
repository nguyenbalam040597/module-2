<?php
function calculate($x, $y) {
    if ($y == 0 || ($x && $y == 0)) {
        echo "So bat hop le"; 
    } else {
        $cong = $x + $y;
        $tru = $x - $y;
        $nhan = $x * $y;
        $chia = $x / $y;

        echo "Tong cua $x va $y la: $cong<br>"; 
        echo "Hieu cua $x va $y la: $tru<br>";
        echo "Tich cua $x va $y la: $nhan<br>";
        echo "Thuong cua $x va $y la: $chia<br>";
    }
}
calculate(10,5);
?> 