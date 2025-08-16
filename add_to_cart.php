<?php
session_start();

require('dbconnect.php');

$product = $_GET['product'];
$price = $_GET['price'];

$sql = "INSERT INTO menu_product (name_product,price_product) VALUE ('$product','$price')";
$result = mysqli_query($con,$sql);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['product']) && isset($_GET['price'])) {
        $product = $_GET['product'];
        $price = $_GET['price'];

        // ตรวจสอบว่ามีตะกร้าสินค้าใน session หรือยัง
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // เพิ่มสินค้าในตะกร้าสินค้า
        $item = array('product' => $product, 'price' => $price);
        array_push($_SESSION['cart'], $item);

        echo "เพิ่มสินค้า $product ลงในตะกร้าสำเร็จ";
    } else {
        echo "ไม่พบข้อมูลสินค้า";
    }
}
?>