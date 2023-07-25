<!-- <?php
$r = $_POST['radius'];
if ($r < 0) {
  throw new Exception("Bán kính không hợp lệ.");
}
$area = pi() * $r * $r;
echo "Diện tích hình tròn là: " . $area;
?> -->



<?php
//tạo hàm và throw một ngoại lệ
function checkNum($number) {
  if($number > 1) {
    throw new Exception("Giá trị phải nhỏ hơn hoặc bằng 1.");
  }
  return true;
}
 
//kích hoạt ngoại lệ trong khối "try"
try {
  checkNum(2);
  // nếu ngoại lệ được ném ra thì lệnh sau không được thực thi
  echo 'Number nhỏ hơn hoặc bằng 1.';
}
 
//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>