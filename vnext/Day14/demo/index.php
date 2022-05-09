<?php require "user.php";
if ($user->is_logged()){ ?>
        <a href="logout.php">Đăng Xuất</a>
        <?php } else { ?>
        <a href="login.php">Đăng Nhập</a>
        <?php } ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
         <style>
             .img {
                border-top: solid 1px; 
                text-align: center;
             }
             .img a{
                 margin: 30px;
             }
         </style>
    </head>
    <body  style="border:solid 1px; padding: 10px; margin:10px;">
         
        <div class="img">
            <a href="./src/img.jpg">Download Hình 1</a> 
            <a href="./src/img.jpg">Download Hình 2</a> 
            <a href="./src/img.jpg">Download Hình 3</a> 
        </div>
         
        <script language="javascript">
         
            // Biến javascript dùng để kiểm tra đã login hay chưa
            var is_logged = <?php echo ($user->is_logged()) ? 'true' : 'false'; ?>;
             
            // Khi click vào các thẻ download
            $('div a').click(function()
            {
                // Nếu như chưa login thì thông báo và chuyển hướng sang trang login
                // trong này tôi có để một tham số trên url là redirect, tham số này
                // sẽ được xử lý ở trang login, nghĩa là sau khi login sẽ redirect về 
                // cái trang nằm trong redirect
                if (!is_logged){
                    if (confirm('Bạn chưa đăng nhập, vui lòng đăng nhập rồi download')){
                        window.location = 'login.php?redirect=index.php';
                    }
                     
                    // Và return false không cho download
                    return false;
                }
                 
                // Nếu login rồi thì return true cho phép download
                return true;
            });
 
        </script>
    </body>
</html>