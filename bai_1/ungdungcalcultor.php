<?php
 // kiểm tra người dùng đã gửi dử liệu lên hay chưa
 if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // Xử lý
    // Lấy giá trị gửi lên
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    // gan vao bien
    $so_thu_nhat = $_REQUEST['so_thu_nhat'];
    $so_thu_hai = $_REQUEST['so_thu_hai'];
    $toan_tu = $_REQUEST['toan_tu'];
    // xu ly 
    switch ($toan_tu) {
        case 'cong':
            $ket_qua = $so_thu_nhat + $so_thu_hai;
            break;
        case "tru":
            $ket_qua = $so_thu_nhat - $so_thu_hai;
            break;
        case "nhan":
            $ket_qua = $so_thu_nhat * $so_thu_hai;
            break;
        case "chia":
            $ket_qua = $so_thu_nhat / $so_thu_hai;
            break;
        default:
            # code...
            break;
    }    
    echo $ket_qua;
 }

?>
<form action="" method="post">
    so thu nhat :<br>
    <input type="number" name="so_thu_nhat" value=""> <br>
    so thu hai : <br>
    <input type="number" name="so_thu_hai" value=""> <br>
    <select name="toantu" id="">
        <option value="cong">cong</option>
        <option value="tru">tru</option>
        <option value="nhan">nhan</option>
        <option value="chia">chia</option>
    </select><br>
    ><button type="submit">tinhtoan</button
</form>