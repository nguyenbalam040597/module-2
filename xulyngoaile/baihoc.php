<?php
//tạo hàm với một ngoại lệ
function checkNum($number) {
  if($number>1) {
    throw new Exception("Giá trị phải nhỏ hơn hoặc bằng 1.");
  }
  return true;
} 
//kích hoạt ngoại lệ trong khoi " try "
try {
checkNum(2);
echo 'Number nho hon hoac bang 1.';
}
catch(Exception $e) {
    echo $e->getMessage();
}
?>