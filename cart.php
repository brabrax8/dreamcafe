<?php
session_start();

require('dbconnect.php');

$product = $_GET['product'];
$price = $_GET['price'];


$sql = "INSERT INTO menu_product (name_product,price_product) VALUE ('$product','$price')";
$result = mysqli_query($con,$sql);
if($result){
    echo "Added $product to cart with price $price";
    header("Location: menupage.html");
}
else{
    echo "ทำการสั่งซื้อไม่สำเร็จ";
}
?>