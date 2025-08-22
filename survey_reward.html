<?php
include 'connect.php';
session_start();

$email = $_POST['email'];
$points = intval($_POST['points']);

$sql = "SELECT * FROM wallet WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  $newPoints = $row['points'] + $points;
  $update = "UPDATE wallet SET points=$newPoints WHERE email='$email'";
  $conn->query($update);
} else {
  $insert = "INSERT INTO wallet (email, points) VALUES ('$email', $points)";
  $conn->query($insert);
}

echo "<h2 style='color:green;'>✅ امتیاز نظرسنجی ثبت شد! مجموع امتیاز: " . ($row['points'] + $points) . "</h2>";
$conn->close();
?>
