<?php 
// bien toan cuc truy cap moi phap vi trong tap lenh php(globals)
$a = 5;
$b = 10;

function phepcong() {
    $GLOBALS['c']= $GLOBALS['a'] + $GLOBALS['b'] ;
}
echo $c;
phepcong();
?>
