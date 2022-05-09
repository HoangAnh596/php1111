<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DOWNLOAD IMG</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
            <?php if (!isset($_SESSION['username']) ){ ?>
                <a class="navbar-brand title-logo" href="./login.php">LOGIN</a>
            <?php } else { ?>
                <a class="navbar-brand title-logo" href="./logout.php">LOGOUT</a>
            <?php } ?>   
        </nav>
        <main class="login-form">
            <div class="row col-md-8 justify-content-center fix-img-row">
                <div class="col-md-4">
                    <div class="img-rounded card img-download ">
                        <img src="./img/img.jpg" class="card-header"  />
                        <a href="./download.php?file=img.jpg" class="card-body">Download 1</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-rounded card img-download">
                        <img src="./img/img.jpg" class="card-header"  />
                        <a href="./download.php?file=img.jpg" class="card-body">Download 2</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-rounded card img-download">
                        <img src="./img/img.jpg" class="card-header"  />
                        <a href="./download.php?file=img.jpg" class="card-body">Download 3</a>
                    </div>
                </div>
        </main>
    </div>
    <script>
        let check = <?php echo (isset($_SESSION['username'])) ? 'true' : 'false'; ?>;
        let test = document.querySelectorAll('.img-download a');
        //Khi click vào các thẻ download
        for (var i = 0; i < test.length; i++) {
            test[i].onclick = function (e) {   
                if (!check){
                    e.preventDefault(); 
                    alert('Bạn chưa đăng nhập, vui lòng đăng nhập rồi download');
                }
            }  
        }
    </script>
</body>
</html>