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
  <title>ویدیوهای درآمدزا | AfghanKash</title>
<link rel="stylesheet" href="styles/global.css">
  <style>
    body {
      font-family: 'Tahoma', sans-serif;
      background-color: #f1f3fc;
      direction: rtl;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      color: #007b5e;
      text-align: center;
      margin-bottom: 30px;
    }
    .video {
      margin-bottom: 25px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #eef;
    }
    .video h3 {
      margin-bottom: 10px;
      font-size: 16px;
    }
    .video iframe {
      width: 100%;
      height: 250px;
      border-radius: 8px;
    }
    .btn {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 16px;
      background-color: #007b5e;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #005f4a;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>🎥 خوش آمدید <?php echo $fullname; ?>! ویدیو ببینید و امتیاز بگیرید</h2>

    <!-- ویدیو اول -->
    <div class="video">
      <h3>ویدیو انگیزشی: چگونه هدف‌گذاری کنیم؟</h3>
      <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" allowfullscreen></iframe>
      <form action="reward.php" method="POST">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="points" value="10">
        <button type="submit" class="btn">تماشا و دریافت امتیاز</button>
      </form>
    </div>

    <!-- ویدیو دوم -->
    <div class="video">
      <h3>ویدیو آموزشی: مهارت‌های دیجیتال برای جوانان افغان</h3>
      <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
      <form action="reward.php" method="POST">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="points" value="15">
        <button type="submit" class="btn">تماشا و دریافت امتیاز</button>
      </form>
    </div>

    <!-- ویدیو سوم -->
    <div class="video">
      <h3>ویدیو تبلیغاتی: محصولات محلی افغانستان</h3>
      <iframe src="https://www.youtube.com/embed/VIDEO_ID_3" allowfullscreen></iframe>
      <form action="reward.php" method="POST">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="points" value="20">
        <button type="submit" class="btn">تماشا و دریافت امتیاز</button>
      </form>
    </div>

  </div>

</body>
</html>
