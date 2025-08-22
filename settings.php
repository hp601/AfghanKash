<?php
session_start();
if (!isset($_SESSION['fullname']) || !isset($_SESSION['email'])) {
  header("Location: login.html");
  exit();
}
$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>⚙️ تنظیمات حساب | AfghanKash</title>
<link rel="stylesheet" href="styles/global.css">
  <style>
    body {
      font-family: 'Tahoma', sans-serif;
      background-color: #f1f3fc;
      direction: rtl;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    .settings {
      max-width: 600px;
      margin: 50px auto;
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
    form {
      margin-top: 20px;
      text-align: right;
    }
    label {
      display: block;
      margin: 10px 0 5px;
      font-size: 14px;
    }
    input, select {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    .btn {
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #007b5e;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #005f4a;
    }
    .logout {
      margin-top: 30px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>

  <div class="settings">
    <h2>⚙️ تنظیمات حساب کاربری</h2>
    <div class="info">نام کاربر: <?php echo $fullname; ?></div>
    <div class="info">ایمیل: <?php echo $email; ?></div>

    <form action="update_settings.php" method="POST">
      <label for="fullname">ویرایش نام:</label>
      <input type="text" name="fullname" value="<?php echo $fullname; ?>" required>

      <label for="password">تغییر رمز عبور:</label>
      <input type="password" name="password" placeholder="رمز جدید">

      <label for="language">زبان برنامه:</label>
      <select name="language">
        <option value="fa">فارسی</option>
        <option value="ps">پشتو</option>
        <option value="en">English</option>
      </select>

      <button type="submit" class="btn">ذخیره تنظیمات</button>
    </form>

    <div class="logout">
      <a href="logout.php">🚪 خروج از حساب</a>
    </div>
  </div>

</body>
</html>
