<?php 
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        $ten_nguoi_dung = $_REQUEST['ten_nguoi_dung'];
        $email = $_REQUEST['email'];
        $dien_thoai = $_REQUEST['dien_thoai'];

        // xu ly
        if (empty($ten_nguoi_dung)) {
            echo " vui long nhap ten nguoi dung <br> ";
        }
        if (empty($email)) {
            echo " vui long nhap email <br> ";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email  khong hợp lệ <br>";
            }
        }
        if (empty($dien_thoai)) {
            echo "vui long nhap so dien thoai: ";
        }
    }    
?>
<form action="" method="post">
    Ten nguoi dung: <input type="text" name="ten_nguoi_dung"> <br>
    Email: <input type="text" name="email"> <br>
    Dien thoai: <input type="text" name="dien_thoai"> <br>
    <input type="submit" value="nhap vao">
</form>