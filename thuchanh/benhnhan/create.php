<?php
include_once 'db.php';
$sql = "SELECT * FROM `BENHNHAN `";
// Truy vấn
$stmt = $conn->query($sql);
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array

// Trả về dữ liệu
$rows = $stmt->fetchAll();

// kiêm tra du lieu duoc gui len hay chua
if ($_SERVER['REQUEST_METHOD'] == "POST") {
   
    //  lay gia tri gui len
    $tenbenhnhan = $_REQUEST['tenbenhnhan'];
    $phong = $_REQUEST['phong'];
    $ngaynhapvien = $_REQUEST['ngaynhapvien'];
    $gioitinh = $_REQUEST['gioitinh'];
    $tinhtrang = $_REQUEST['tinhtrang'];
    $thongtinbenhnhan = $_REQUEST['thongtinbenhnhan'];
    
  
}
    // tạo sql 
    $sql = "INSERT INTO `benhnhan` 
    (`tenbenhnhan`, `phong`, `ngaynhapvien`, `gioitinh`, `tinhtrang`, `thongtinbenhnhan`) VALUES 
    ('$tenbenhnhan', '$phong', '$ngaynhapvien', '$gioitinh', '$tinhtrang', '$thongtinbenhnhan')
    ";
    //Thuc hien truy van
    $conn->exec($sql);

    
    // chuyen huong ve trang danh sach
    header("Location: index.php");



?>


<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content"> 

        <h2 class="blink" style="text-align: center;">THÊM BỆNH NHÂN</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="" class="form-label">Tên bệnh nhân</label>
                <input type="text" name="tenbenhnhan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phòng</label>
                <input type="text" name="phong" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Ngày nhập viện</label>
                <input type="text" name="ngaynhapvien" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Giới tính</label>
                <input type="text" name="gioitinh" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tình trạng</label>
                <input type="file" name="tinhtrang" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Thông tin bệnh nhân</label>
                <input type="file" name="thongtinbenhnhan" class="form-control">
            </div>
            <input type="submit" value="Gửi">
        </form>






    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    
    <!-- End of Footer -->