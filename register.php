<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require('dbconnect.php');

    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO register (user_name,email,password) VALUES ('$user','$email','$pass')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header("Location: login.php");
        exit;
    } else {
        echo "สมัครไม่สำเร็จ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img\wellcome.jpg">    
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="register-form">
        <a href="login.php"><i class='bx bx-arrow-back'></i></a>
        <h2>Register</h2>
        <form action="register.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="form-group">
                <input type="email" placeholder="E-mail" name="email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
