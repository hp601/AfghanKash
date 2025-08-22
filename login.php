<?php
include 'connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  if (password_verify($password, $row['password'])) {
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['email'] = $row['email'];
    header("Location: dashboard.php");
    exit();
  } else {
    echo "<h2 style='color:red;'>❌ رمز عبور اشتباه است</h2>";
  }
} else {
  echo "<h2 style='color:red;'>❌ ایمیل یافت نشد</h2>";
}

$conn->close();
?>
