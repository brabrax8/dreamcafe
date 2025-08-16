<?php
session_start();

if(isset($_POST['username'])){

    include('dbconnect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM register WHERE user_name = '$username' AND password = '$password' AND status = '1'";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) == 1){

        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['user_name'];
        $_SESSION['password'] = $row['password'];

        header("Location: index_addmin.html");
        exit;
    } else {
        echo "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="website icon" href="img\wellcome.jpg">
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <a href="index.html"><i class='bx bx-arrow-back'></i></a>
        <form method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn"><a href="index_addmin.html"></a>Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
