<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ตรวจสอบว่ามีการส่งข้อมูลมาด้วยเมธอด POST หรือไม่

    require('dbconnect.php'); // เชื่อมต่อกับฐานข้อมูล

    // รับค่าไอดีของโต๊ะที่ผู้ใช้เลือก
    $tableId = $_POST['tableId'];

    // ทำการเพิ่มข้อมูลการจองโต๊ะลงในฐานข้อมูล
    $sql = "INSERT INTO reservations (table_id, reservation_time) VALUES ('$tableId', NOW())";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "จองโต๊ะสำเร็จ";
    } else {
        echo "เกิดข้อผิดพลาดในการจองโต๊ะ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve</title>
    <link rel="website icon" href="img\wellcome.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" >
    <link rel="stylesheet" href="reserve.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <h1>reserve</h1>
        <div class="table-plan">
            <div class="table-row">
                <img class="table empty" src="reserve\chair.png" data-table-id="1">
                <img class="table" src="reserve\chair.png" data-table-id="2">
                <img class="table" src="reserve\chair.png" data-table-id="3">
                <img class="table" src="reserve\chair.png" data-table-id="4">
            </div>
            <div class="table-row">
                <img class="table" src="reserve\chair.png" data-table-id="5">                
                <img class="table" src="reserve\chair.png" data-table-id="6">
                <img class="table empty" src="reserve\chair.png" data-table-id="7">
                <img class="table" src="reserve\chair.png" data-table-id="8">
            </div>
            <div class="table-row">
                <img class="table" src="reserve\chair.png" data-table-id="9">
                <img class="table empty" src="reserve\chair.png" data-table-id="10">
                <img class="table" src="reserve\chair.png" data-table-id="11">
                <img class="table" src="reserve\chair.png" data-table-id="12">
            </div>
            <div class="table-row">
                <img class="table empty" src="reserve\chair.png" data-table-id="13">
                <img class="table" src="reserve\chair.png" data-table-id="14">
                <img class="table" src="reserve\chair.png"data-table-id="15">
                <img class="table" src="reserve\chair.png" data-table-id="16">
            </div>
        </div>
        <div class="btn">
            <a href="index.html"><i class='bx bx-chevron-left-circle'></i>Back home</a>
            <a href="confirm.php">confirm<i class='bx bx-chevron-right-circle'></i></a>
        </div>
    </div>
    <script src="reserve.js"></script>
</body>
</html>