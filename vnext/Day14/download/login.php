<?php 
session_start();

      $username =  isset($_POST['username']) ? $_POST['username'] : '';
      $password =  isset($_POST['password']) ? $_POST['password'] : '';

      if ($_SERVER["REQUEST_METHOD"] == "POST"){

            $error =[];   
            $regex_username = "/^\w{4,12}$/";
            $regex_password = "/^(?=.*?[a-z])(?=.*?[0-9]).{6,}$/";

            if ( !preg_match($regex_username, $username) ) {
                  $error['username'] = "username từ 6 đến 12 ";
            }
            if ( !preg_match($regex_password, $password) ) {
                  $error['password'] = "Mật khẩu phải chứa ít nhất một số, chữ thường và có 6 ký tự trở lên!!!";
            }

            if (empty($error)) {
                  if ($username == "admin" && $password == "admin123")
                  {
                        $_SESSION['username'] = $username;
                        if (isset($_SESSION['error']) ) { unset($_SESSION['error']);  };
                        header('Location: index.php');
                  } else  {
                            $_SESSION['error']= "username/password không đúng";
                    }                  
                //   echo "<pre>"; 
                //   print_r($_SESSION);
                //   echo "</pre>";
                //   session_destroy();
            }
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header row header_login_error">
                                <div class="action">LOGIN </div>
                                <div class="mess-error">
                                    <?php if (isset($_SESSION['error'])): ?>
                                    <b class="form-error"><?php echo $_SESSION['error']; ?></b>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST">
                                    <div class="form-group row">
                                        <label for="username"
                                            class="col-md-4 col-form-label text-md-right">Username</label>
                                        <div class="col-md-6">
                                            <input type="text" id="username" class="form-control" name="username"
                                                autofocus>
                                            <?php if (isset($error['username'])): ?>
                                            <span class="form-error"><?php echo $error['username']; ?></span>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-right">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" id="password" class="form-control" name="password">
                                            <?php if (isset($error['password'])): ?>
                                            <span class="form-error"><?php echo $error['password']; ?></span>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="submit">Login </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
