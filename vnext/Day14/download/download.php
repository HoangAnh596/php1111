<?php  
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script> alert('Đăng nhập để tải ảnh'); location.href='index.php' </script>" ;
    exit();
}

$file = isset($_GET['file']) ? $_GET['file'] : false;

// kiểm tra file tồn tại thì tải xuống , nếu không thì báo không tìm thấy 
if (!empty($file) && file_exists("./img/".$file) && !is_dir($file) ){

  header("Content-Type: application/octet-stream");
  header("Content-Disposition: attachment; filename=$file ");
  header('Content-Length: ' . filesize("./img/".$file));
  readfile("./img/".$file);
  exit();
}else{
  echo "<script> alert('Không tìm thấy ảnh'); location.href='index.php' </script>" ;
  exit();
}



?>