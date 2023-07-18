<?php
    /*
    B1: tao form:post gom 3 o input + name, va 1 nut submit
    B2: Kiem tra nguoi dung da gui du lieu len server
        - In ra du lieu nguoi dung da gui len
    B3: Gan vao cac bien: $_POST, $_REQUEST
    B4: Ap dung cong thuc
        - Ap dung cong thuc cho 1 nam
        - Tinh toan dua vao so nam
    B5: xuat du lieu ra
    */ 
?>
<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // lay gia tri nguoi dung gui len
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    // Luu tru ( gan vao cac bien)
    $luong_tien_dau_tu = $_REQUEST['tien_dau_tu'];
    $Lai_suat_nam = $_REQUEST['lai_suat_nam'];
    $So_nam_dau_tu = $_REQUEST['so_nam_dau_tu'];
    // Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)
    $gia_tri_tuong_lai = $luong_tien_dau_tu + ($luong_tien_dau_tu * $lai_suat_nam);
}    
    // xuat du lieu ra
    echo $gia_tri_tuong_lai;
?>
<form action="" method="post">
    Luong tien dau tu: <input type="text" name="tien_dau_tu"> <br>
    Lai suat nam: <input type="text" name="lai_suat_nam" > <br>
    So nam dau tu: <input type="text" name="so_nam_dau_tu"> <br>
    <input type="submit" value="Tinh toan">
</form>