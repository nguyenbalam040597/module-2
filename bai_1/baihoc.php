<?php
// kiểu dữ liệu int
$tuoi = 10;
// ép sang kiểu int
$tuoi = "10";
$tuoi = int($tuoi)
// kiem tra du lieu co phai int
$num1 = 10;
$num2 = "20";
$num3 = 10.5;
if(is_int($num1)) {
    echo "$num1 là kiểu dữ liệu int";
} else {
    echo "$num1 không phải là kiểu dữ liệu int";
}

// kiểu dữ liệu boolean
$admin = false;
$admin = true;
// ép sang kiểu boolean
$bool = 1; => kiểu int
$bool = (booleann)$bool;
// kiem tra 1 bien co phai boolean 
$is_true = true;
if (is_bool($is_true)) {
    echo '$is_true là một biến kiểu boolean.';
} else {
    echo '$is_true không phải kiểu boolean.';
}

// kieu du lieu float(so thuc)
$a = 1.234;
// ép sang kiểu số thưc
$a = 123;
$a = (float)$a \
// kiem tra 1 bien co phai float
$num1 = 1,23; 
if (is_float($num1)) {
    echo "$num1 là kiểu dữ liệu float.";
} else {
    echo "$num1 không phải kiểu dữ liệu float.";
}

// kieu du lieu chuoi
$a = "123";
// ep sang kieu chuoi
$a = 123;
$a = (string)$a;
// kiem tra 1 bien kieu string
$num1 = "123";
if (is_string($num1)) {
    echo "$num1 la kieu du lieu string"
} else {
    echo "$num1 khong phai du lieu string"
}

// kieu du lieu null
$a = null; // Khởi tạo biến $a và gán giá trị null
$b = (int)$a; // Biến $b có giá trị là ( 0 )
$c = (string)$a; // Biến $c có giá trị rỗng ( '' )
$d = (bool)$a; // Biến $d có giá trị FALSE
// kiem tra 1 bien co gia tri null
$num1 = null;
if (is_null($num1)) {
    echo "Biến num1 có giá trị null.";
} else {
    echo "Biến num1 không có giá trị null.";
}

//kieu du lieu mang 
$ten_mang = array();
$ten = array ("ha" + "hung");
print_r($ten);
// kiem tra 1 bien kieu mang
$arr1 = arr(1,2,3);
if (is_array($arr1)) {
    echo "Biến arr1 là một mảng.";
} else {
    echo "Biến arr1 không phải là một mảng.";
}

// kieu du lieu doi tuong(object)
?>
