<?php
include_once 'db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = 0;
}

if(!$id){
    header("Location: index.php");
}

$sql = "SELECT * FROM `benhnhan` WHERE `mabenhnhan` = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$row = $stmt->fetch();
// echo '<pre>';
// print_r($row);
// die();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $tenbenhnhan = $_POST['tenbenhnhan'];
    $phong = $_POST['phong'];
    $ngaynhapvien = $_POST['ngaynhapvien'];
    $gioitinh = $_POST['gioitinh'];
    $tinhtrang = $_POST['tinhtrang'];
    $thongtinbenhnhan = $_POST['thongtinbenhnhan'];

    


    $sql = "UPDATE `benhnhan` SET `tenbenhnhan` = '$tenbenhnhan', `phong` = '$phong', `ngaynhapvien` = $ngaynhapvien, `gioitinh` = $gioitinh, `tinhtrang` = '$tinhtrang', `thongtinbenhnhan` = '$thongtinbenhnhan' WHERE `mabenhnhan` = $id";
    $conn->exec($sql);
    header("Location: index.php");
}
?>


<h2>SỬA BỆNH NHÂN</h2>

<form action="" method="POST" enctype="multipart/form-data" >
  <label for="fname">Tên bệnh nhân</label><br>
  <input type="text" name="tenbenhnhan" value="<?= $row['tenbenhnhan'];?>"><br>
  <label for="fname">Phòng</label><br>
  <input type="text" name="phong" value="<?= $row['phong'];?>"><br>
  <label for="fname">Ngày nhập viện</label><br>
  <input type="number" name="ngaynhapvien" value="<?= $row['ngaynhapvien'];?>"><br>
  <label for="fname">Giới tính</label><br>
  <input type="text" name="gioitinh" value="<?= $row['gioitinh'];?>"><br>
  <label for="fname">Tình trạng</label><br>
  <input type="file" name="tinhtrang" value="<?= $row['tinhtrang'];?>"><br>
  <label for="fname">Thông tin bệnh nhân</label><br>
  <input type="file" name="thongtinbenhnhan" value="<?= $row['thongtinbenhnhan'];?>"><br>

  <input type="submit" value="Submit">
</form> 

