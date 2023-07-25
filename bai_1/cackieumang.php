<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // $names = array("tao", "chanh", "cam", "xoai");

    // Truy cập phần tử đầu tiên trong mảng 
    // echo $names[0]; // kết quả: tao
    
    // Thay đổi giá trị của phần tử thứ 2 trong mảng
    // $names[1] = "nho";
    // Them phan tu vao cuoi mang
    // array_push($names,"khe");


    // echo "<pre>";
    // print_r($names);
    // echo "</pre>";
    
    // In ra tất cả các phần tử trong mảng
    // for ($i = 0; $i < count($names); $i++) {
    //   echo $names[$i] . " ";
    // }




    // $names = array(
    //      "tao" => 1,
    //      "chuoi" => 2,
    //      "cam" => 3,
    //      "xoai" => 4,
    //    );
    //    Truy cập giá trị của phần tử có từ khóa là "tao"
    //   echo $names["tao"]; // kết quả: 1
        // $names["chuoi"] = "xanh";
        // $names["buoi"] = "dep";
        // echo "<pre>";
        // print_r($names);
        // echo "</pre>";
    //   Thay đổi giá trị của phần tử "chuoi"
        
        
    //   $names["nho"] = 2;
      
    //   In ra tất cả các phần tử trong mảng
    //   foreach ($names as $key => $value) {
    //     echo $key . " gia " . $value . " đô <br>";
    //   }
      



    
      $sinhvien = array(
        array("ha", 23, "nu"),
        array("hai", 25, "nam"),
        array("hung", 21, "nam"),
        array("phu", 22, "nam")
      );
      
    //   Truy cập thông tin của sinh viên thứ hai
      echo $sinhvien[1][0] . " la " . $sinhvien[1][1] . " tuoi " . $students[1][2] . "."; 
      kết quả: hai la nam 25 tuoi

    //   Thay đổi giá trị của phần tử thứ nhất trong mảng con thứ ba
      $sinhvien[2][0] = "vu";
      
    //   In ra tất cả thông tin của các sinh viên
      for ($i = 0; $i < count($sinhvien); $i++) {
        echo $sinhvien[$i][0] . " is a " . $sinhvien[$i][1] . " tuoi " . $sinhvien[$i][2] . ". ";
      }
      kết quả: ha la nu 23 tuoi. hai la nam 25 tuoi. vu la nam 21 tuoi. phu la nam 22 tuoi.

      for ($i = 0; $i <count($sinhvien; i++)) {
        for ($j = 0; $j< count($cars[$i]);j++) {
            echo $cars[i][j] .'<br>';
        }
      }
    ?>
</body>
</html>