<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['success']);
$_SESSION['success'] = "<span style='color:blue'><b>Đăng xuất thành công</b></span>";
// + Xóa cookie liên quan đến username và password đã lưu cho
//chức năng Ghi nhớ đăng nhập
setcookie('username', 'dsadsa', time() - 1);
setcookie('password', 'sadsasda', time() - 1);

header('Location: form_login.php');
exit();