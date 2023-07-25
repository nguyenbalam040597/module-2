<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #808000;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
        value=""/>
        đến: <input id="to" type="date" name="to" placeholder="yyyy/mmm/dd"
        value=""/>
        <input type="submit" id="submit" value="Lọc"/>
    </form>
    <?php
    $customerList = [
        "1" => [
            "name" => "Mai Văn Hoàn",
            "day_of_birth" => "1983/08/20",
            "address" => "Hà Nội",
            "profile" => "https://images.pexels.com/photos/1326946/pexels-photo-1326946.jpeg"],
        "2" => [
            "name" => "Nguyễn Văn Nam",
            "day_of_birth" => "1983/08/21",
            "address" => "Bắc Giang",
            "profile" => "https://images.pexels.com/photos/6567607/pexels-photo-6567607.jpeg"],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "1983/08/22",
            "address" => "Nam Định",
            "profile" => "https://images.pexels.com/photos/3706938/pexels-photo-3706938.jpeg"],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "1983/08/17",
            "address" => "Hà Tây",
            "profile" => "https://images.pexels.com/photos/914927/pexels-photo-914927.jpeg"],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "1983/08/19",
            "address" => "Hà Nội",
            "profile" => "https://images.pexels.com/photos/6348124/pexels-photo-6348124.jpeg"],
    ];
    
    function searchByDate($customers, $fromDate, $toDate) {
        if(empty($fromDate) || empte($toDate)) {
            return $customers;
        }
        $filteredCustomers = [];
        foreach ($customers as $customer) {
            if(strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
            if(strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
            $filteredCustomers[] = $customer;
        }
        return $filteredCustomers;
    }

    $fromDate = $_REQUEST["from"] ?? null;
    $toDate = $_REQUEST["to"] ?? null;
    $filteredCustomers = searchByDate($customerList, $fromDate, $toDate)
    
    ?>
    <table>
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img width="100" src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>