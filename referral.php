<?php
session_start();
if (!isset($_SESSION['fullname']) || !isset($_SESSION['email'])) {
  header("Location: login.html");
  exit();
}
$fullname = $_SESSION['fullname'];
$email = $_SESSION['email'];
$referralLink = "https://afghankash.af/register.html?ref=" . urlencode($email);
?>

<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <title>🔗 ارجاع برنامه | AfghanKash</title>
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
    .referral {
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
    .link-box {
      background-color: #eef;
      padding: 10px;
      border-radius: 8px;
      margin-bottom: 15px;
      font-size: 14px;
      word-break: break-all;
    }
    .btn {
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
    .social {
      margin-top: 20px;
      font-size: 20px;
    }
    .social span {
      margin: 0 10px;
      cursor: pointer;
    }
  </style>
  <script>
    function copyLink() {
      const link = document.getElementById("refLink");
      navigator.clipboard.writeText(link.innerText);
      alert("لینک دعوت کپی شد ✅");
    }
  </script>
</head>
<body>

  <div class="referral">
    <h2>🔗 دعوت دوستان | دریافت 3 افغانی برای هر نفر</h2>
    <div class="link-box" id="refLink"><?php echo $referralLink; ?></div>
    <button class="btn" onclick="copyLink()">کپی لینک دعوت</button>

    <div class="social">
      <p>اشتراک‌گذاری در صفحات اجتماعی:</p>
      <span>📱 WhatsApp</span>
      <span>📘 Facebook</span>
      <span>📷 Instagram</span>
      <span>📨 Telegram</span>
    </div>
  </div>

</body>
</html>
