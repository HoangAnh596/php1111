<?php
session_start();
//Cần xử lý nếu như chưa login thì ko cho truy
//cập trang này
if (isset($_COOKIE['username'])) {
  $_SESSION['username'] = $_COOKIE['username'];
}


if (!isset($_SESSION['username'])) {
  $_SESSION['error'] = 'Bạn chưa đăng nhập';
  header("Location: form_login.php");
  exit();
}


if (isset($_SESSION['success'])) {
  echo $_SESSION['success'];
  unset($_SESSION['success']);
}

$username = $_SESSION['username'];
echo "Xin chào: <span style='color:red'><b>$username</b></span>, Chúc mừng b đã đăng nhập thành công!";
echo "</br>";
//Hiển thị link Logout
echo "<a href='logout.php'><span style='color:red'>Logout</span></a>";
