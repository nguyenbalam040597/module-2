<?php
//  kiem tra nguoi dung gui du lieu len hay chua
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    // lay gia tri gui len
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    // xu ly
    
}
?>
<form action="" method="post">
    <label> Nhập số cần đọc </label>
    <input type="text" name="number">
    <input type="submit" value="Đọc">
</form>
    