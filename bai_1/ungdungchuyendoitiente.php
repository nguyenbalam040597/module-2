<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
        echo "<pre>";
        var_dump ($_REQUEST);
        echo "</pre>";
        // khai báo biến lưu trữ
        $so_tien = $_REQUEST['so_tien'];
        // xử lý
        $VND = $so_tien/23000;
        // xuất
        echo "VND là: " . $VND;
    }
?>
<form action="" method="post">
    USD: <input type="text" name="so_tien"> <br>
    <input type="submit" value="chuyển đổi">
</form> -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    $VND = $_REQUEST['VND'];
    $Ti_gia = $_REQUEST['Ti_gia'];
    $USD = $VND / $Ti_gia;
    echo "USD: " . $USD;
}
?>
<form action="" method="post">
    VND: <input type="text" name="VND"> <br>
    Ti gia: <input type="text" name="Ti_gia" value="23000"> <br>
    <input type="submit" value="Đổi">
</form>








</body>
</html>