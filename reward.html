<?php
include 'connect.php';
session_start();

$email = $_POST['email'];
$points = intval($_POST['points']);

// بررسی وجود رکورد قبلی
$sql = "SELECT * FROM wallet WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  // بروزرسانی امتیاز
  $row = $result->fetch_assoc();
  $newPoints = $row['points'] + $points;
  $update = "UPDATE wallet SET points=$newPoints WHERE email='$email'";
  $conn->query($update);
  echo "<h2 style='color:green;'>✅ امتیاز شما ثبت شد! مجموع امتیاز: $newPoints</h2>";
} else {
  // ایجاد رکورد جدید
  $insert = "INSERT INTO wallet (email, points) VALUES ('$email', $points)";
  $conn->query($insert);
  echo "<h2 style='color:green;'>✅ امتیاز شما ثبت شد! مجموع امتیاز: $points</h2>";
}

$conn->close();
?>
