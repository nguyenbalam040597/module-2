<?php
    // $_SERVER : thông tin máy chủ
    // $_POST : nhận dử liệu gửi lên qua method POST
    // $_GET : nhận dử liệu gửi lên qua method GET
    // $_REQUEST : nhận dử liệu gửi lên qua method GET

    // kiểm tra người dùng đã gửi dử liệu lên hay chưa
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // Xử lý
        // Lấy giá trị gửi lên
        echo '<pre>';
        print_r($_REQUEST);
        echo '</pre>';

        // Lưu trữ
        $ho_va_ten = $_REQUEST['username'];
        $mat_khau = $_REQUEST['password'];

        // Xử lý
        if( $username == 'admin' && $mat_khau == '123456' ){
            echo 'Chao mung admin';
        }else{
            echo 'Tai khoan khong dung';
        }
        
    }
    // echo '<pre>';
    // print_r($_SERVER);
    // echo '</pre>';

?>
<form action="" method="post">
    Ten dang nhap: <input type="text" name="username"> <br>
    Mat khau: <input type="password" name="password" > <br>
    <input type="submit" value="Dang nhap">
</form>