<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Table Reservation</title>
<link rel="website icon" href="img\wellcome.jpg">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #2a201c;
    background-size: cover;
    background-position: center;
    background: url('https://images.unsplash.com/photo-1481833761820-0509d3217039?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80') no-repeat;
    background-size: cover;
    background-position: center;
}
.container {
    text-align: center;
    width: 45%;
    background: transparent;
    border: 2px solid rgba(255,255,255,.6);
    backdrop-filter: blur(15px);
    border-radius: 50px;
    padding: 30px 40px;
}
.container i{
  font-size: 20px;
  text-align: left;
  color: #D9A971;
}
h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 36px;
    color: #fff;
}
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}
input {
  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255,255,255,.2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 15px 20px; 
  margin-bottom: 10px;
}
.btn {
    width: 100%;
    height: 45px;
    background: #D9A971;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(255,255,255,.1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
}

</style>
</head>
<body>
<div class="container">
<a href="index.html"><i class='bx bx-arrow-back'></i></a>
  <h1>Table Reservation</h1>
  <form action="process_reservation.php" method="post">
    <input type="text" id="name" placeholder="Name" name="name" required>
    <input type="date" id="date" placeholder="Date" name="date" required>
    <input type="time" id="time" placeholder="Time" name="time" required>
    <input type="number" id="number" placeholder="จำนวนกี่ท่าน" min="1" max="6" name="number" required>
    <input type="text" id="text" placeholder="Text" name="text" required>
    <button type="submit" class="btn">Reserve Table</button>
  </form>
</div>
</body>
</html>
