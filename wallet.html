<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['fullname']) || !isset($_SESSION['email'])) {
  header("Location: login.html");
  exit();
}

$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];

// دریافت امتیاز از دیتابیس
$sql = "SELECT points FROM wallet WHERE email='$email'";
$result = $conn->query($sql);

$points = 0;
if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  $points = $row['points'];
}

$cash = $points * 1; // هر امتیاز = 1 افغانی
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>💰 کیف پول | AfghanKash</title>
  <link rel="stylesheet" href="styles/global.css">
  <style>
    .wallet {
      max-width: 500px;
      margin: 100px auto;
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    h2 {
      color: #007b5e;
      margin-bottom: 20px;
    }
    .info {
      font-size: 18px;
      margin: 10px 0;
    }
  </style>
</head>
<body>

  <div class="wallet">
    <h2>💰 کیف پول شما</h2>
    <div class="info">نام: <?php echo $fullname; ?></div>
    <div class="info">ایمیل: <?php echo $email; ?></div>
    <div class="info">امتیاز فعلی: <strong><?php echo $points; ?></strong></div>
    <div class="info">معادل نقدی: <strong><?php echo $cash; ?> افغانی</strong></div>
  </div>

</body>
</html>
