<?php
include 'connect.php';

// دریافت اطلاعات فرم
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$gender = $_POST['gender'];
$birthyear = $_POST['birthyear'];
$phone = $_POST['phone'];
$profileData = $_POST['profile_data'];

// بررسی رمز عبور
if ($password !== $confirm) {
  die("<h2 style='color:red;'>❌ رمز عبور و تأیید آن یکسان نیست</h2>");
}

// بررسی شماره تماس
if (!preg_match('/^07[0-9]{8}$/', $phone)) {
  die("<h2 style='color:red;'>❌ شماره تماس معتبر نیست (مثال: 07xxxxxxxx)</h2>");
}

// آپلود تذکره
$tazkiraName = $_FILES['tazkira']['name'];
$tazkiraTmp = $_FILES['tazkira']['tmp_name'];
$tazkiraPath = "uploads/tazkira_" . time() . "_" . basename($tazkiraName);
move_uploaded_file($tazkiraTmp, $tazkiraPath);

// ذخیره تصویر چهره از دوربین
if (!empty($profileData)) {
  $profilePath = "uploads/profile_" . time() . ".png";
  $profileData = str_replace('data:image/png;base64,', '', $profileData);
  $profileData = str_replace(' ', '+', $profileData);
  file_put_contents($profilePath, base64_decode($profileData));
} else {
  die("<h2 style='color:red;'>❌ تصویر چهره دریافت نشد</h2>");
}

// هش کردن رمز عبور
$hashed = password_hash($password, PASSWORD_DEFAULT);

// ذخیره در دیتابیس
$sql = "INSERT INTO users (fullname, email, password, gender, birthyear, phone, tazkira, profile)
        VALUES ('$fullname', '$email', '$hashed', '$gender', '$birthyear', '$phone', '$tazkiraPath', '$profilePath')";

if ($conn->query($sql) === TRUE) {
  echo "<h2 style='color:green;'>✅ ثبت‌نام موفق بود! خوش آمدید به AfghanKash 💚</h2>";
} else {
  echo "<h2 style='color:red;'>❌ خطا در ثبت‌نام: " . $conn->error . "</h2>";
}

$conn->close();
?>
