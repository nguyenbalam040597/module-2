<?php
// kiem tra nguoi dung gui du lieu len hay chua
if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
// lay gia tri gui len    
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
}
?>
<form action="" method="post">
    Ten dang nhap: <input type="text" name="username"> <br>
    Mat khau: <input type="password" name="password" > <br>
    Email: <input type="text" name="email"> <br>
    <input type="submit" value="Dang nhap">
</form>