<?php
session_start();
if (!isset($_SESSION['fullname']) || !isset($_SESSION['email'])) {
  header("Location: login.html");
  exit();
}
$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];

// اتصال به دیتابیس (در مرحله نهایی فعال شود)
// include 'connect.php';
// $sql = "SELECT points FROM wallet WHERE email='$email'";
// $result = $conn->query($sql);
// $points = ($result->num_rows === 1) ? $result->fetch_assoc()['points'] : 0;

// نسخه آزمایشی بدون اتصال
$points = 120; // امتیاز فرضی برای تست
$cash = intval($points / 10); // تبدیل به افغانی
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>کیف پول دیجیتال | AfghanKash</title>
  <style>
    body {
      font-family: 'Tahoma', sans-serif;
      background-color: #f1f3fc;
      direction: rtl;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    .wallet {
      max-width: 500px;
      margin: 80px auto;
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      color: #007b5e;
      margin-bottom: 20px;
    }
    .info {
      font-size: 16px;
      margin: 10px 0;
    }
    .convert {
      margin-top: 20px;
      font-size: 14px;
      color: #555;
    }
  </style>
</head>
<body>

  <div class="wallet">
    <h2>💰 کیف پول دیجیتال</h2>
    <div class="info">کاربر: <?php echo $fullname; ?></div>
    <div class="info">ایمیل: <?php echo $email; ?></div>
    <div class="info">امتیاز فعلی: <?php echo $points; ?> امتیاز</div>
    <div class="info">معادل نقدی: <?php echo $cash; ?> افغانی</div>
    <div class="convert">هر 10 امتیاز = 1 افغانی | قابل تبدیل به کارت موبایل یا پول نقد</div>
  </div>

</body>
</html>
