<?php
// thuat toan sap xep noi bot
function myarr($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if($arr[$j] > $arr[$j + 1]) {
                // hoan doi vi tri giua $arr[i] va $arr[$j + 1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1]  = $temp;
            }
        }
    }
    return $arr;
}
$arr = array(1, 11, 3, 5, 2, 9, 7);
print_r(myarr($arr));
// thuat toan sap xep 
?>