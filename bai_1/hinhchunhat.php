<?php
// kiem tra du lieu gui len hay chua
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // in du lieu nguoi dung da gui len
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    // khai bao bien luu tru
    $chieu_dai = $_REQUEST['chieu_dai'];
    $chieu_rong = $_REQUEST['chieu_rong'];
    // xu ly 
    $chu_vi = ($chieu_dai + $chieu_rong)*2;
    $dien_tich = ($chieu_dai *$chieu_rong);
    // xuat ra 
    echo " chu vi la : $chu_vi";
    echo "<br>";
    echo " dien tich la : $dien_tich";
}
?>
<form action="" method="post">
    chieu dai: <input type="text" name="chieu_dai"> <br>
    chieu rong: <input type="text" name="chieu_rong"> <br>
    <button type ="submit">nhapvao</button>
</form>
