<?php
include_once 'db.php';
$sql = "SELECT * FROM `benhnhan`";
// Truy vấn
$stmt = $conn->query($sql);
// Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC); //array

// Trả về dữ liệu
$rows = $stmt->fetchAll(); //[]
// Tim kiem

$sql = "SELECT * FROM `benhnhan`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['search'])) {
    $searchTerm = $_GET['search'];
    // Thực hiện truy vấn tìm kiếm
    $sql = "SELECT * FROM `mathang` WHERE `ten` LIKE :searchTerm";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll();
}

// echo '<pre>';
// print_r($rows);
// die();
?>




<h2 class="blink" style="text-align: center;"> LIỆT KÊ BỆNH NHÂN</h2>
<a class="btn btn-primary" href="http://localhost/module2/thuchanh/benhnhan/index.php" role="button">Thêm Bệnh Nhân</a>
<form action="" method="GET" enctype="multipart/form-data">
    <label for="search">Tìm kiếm bệnh nhân:</label>
    <input type="text" name="search" id="search" placeholder="Nhập tên bệnh nhân">
    <input type="submit" value="Tìm kiếm">
</form>
<table class="table">
    <tr>
        <th>STT</th>
    
        <th>Tên bệnh nhân</th>
        <th>Phòng</th>
        <th>Ngày nhập viện</th>
        <th>Giới tính</th>
        <th>Tình trạng</th>
        <th>Thông tin bệnh nhân</th>

        <th>Hành động</th>
    </tr>

    <?php foreach ($rows as $r): ?>
    <tr>
        <td><?php echo $r['mabenhnhan']; ?></td>
        
        <td><?php echo $r['tenbenhnhan']; ?></td>
        <td><?php echo $r['phong']; ?></td>
        <td><?php echo $r['ngaynhapvien']; ?></td>
        <td><?php echo $r['gioitinh']; ?></td>
        <td><?php echo $r['tinhtrang']; ?></td>
        <td><?php echo $r['thongtinbenhnhan']; ?></td>

        <td>
            <a class="btn btn-info" href="edit.php?id=<?php echo $r['id']; ?>" role="button">Sửa</a>|
            <a class="btn btn-danger" href="delete.php?id=<?php echo $r['id']; ?>"
                onclick="return confirm('Are you sure?');" role="button">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

