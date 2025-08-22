<?php
include 'connect.php';
session_start();

$email = $_SESSION['email'];
$newName = $_POST['fullname'];
$newPassword = $_POST['password'];
$language = $_POST['language'];

if (!empty($newPassword)) {
  $hashed = password_hash($newPassword, PASSWORD_DEFAULT);
  $sql = "UPDATE users SET fullname='$newName', password='$hashed' WHERE email='$email'";
} else {
  $sql = "UPDATE users SET fullname='$newName' WHERE email='$email'";
}

$conn->query($sql);

// ذخیره زبان در session (در آینده برای ترجمه استفاده می‌شود)
$_SESSION['fullname'] = $newName;
$_SESSION['language'] = $language;

echo "<h2 style='color:green;'>✅ تنظیمات با موفقیت ذخیره شد</h2>";
$conn->close();
?>
