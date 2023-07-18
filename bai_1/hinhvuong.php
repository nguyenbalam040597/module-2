<?php
// kiem tra du lieu gui len hay chua
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // in du lieu nguoi dung da gui len
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    // khai bao bien
    $canh_hinh_vuong = $_REQUEST['canh_hinh_vuong'];
    // xu ly
    $chu_vi_hinh_vuong = $canh_hinh_vuong*4;
    $dien_tich_hinh_vuong = $canh_hinh_vuong * $canh_hinh_vuong;
    // xuat ra
    echo "Chu vi la : $chu_vi_hinh_vuong";
    echo "<br>";
    echo "Dien tich la : $dien_tich_hinh_vuong";
}
?>
<form action="" method="post">
    Canh hinh vuong: <input type="text" name="canh_hinh_vuong"> <br>
    <button type="submit">NHAP VAO DAY</button>
</form> 