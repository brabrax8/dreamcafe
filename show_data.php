<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <!-- รวมไฟล์ Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Table</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // การเชื่อมต่อฐานข้อมูล
                require('dbconnect.php');
                // ตรวจสอบการเชื่อมต่อฐานข้อมูล
                if ($con === false) {
                    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . mysqli_connect_error());
                }

                // ดึงข้อมูลจากฐานข้อมูล
                $query = "SELECT * FROM menu_product";
                $result = mysqli_query($con, $query);

                // แสดงข้อมูลในรูปแบบของตาราง
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_product'] . "</td>";
                    echo "<td>" . $row['name_product'] . "</td>";
                    echo "<td>" . $row['price_product'] . "</td>";
                    echo "</tr>";
                }

                // ปิดการเชื่อมต่อฐานข้อมูล
                mysqli_close($con);
                ?>
            </tbody>
        </table>
    </div>

    <!-- รวมไฟล์ Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
