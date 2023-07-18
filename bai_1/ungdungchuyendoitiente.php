<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
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
    USD: <input type="number" name="so_tien"> <br>
    <input type="submit" value="chuyển đổi">
</form>
</body>
</html>