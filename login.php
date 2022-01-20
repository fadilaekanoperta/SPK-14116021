<?php
if (isset($_POST['login'])) {
    session_start();
    include "config.php";
    $sql = $db->query("SELECT * FROM user WHERE email='$_POST[email]' AND password='" . md5($_POST['password']) . "'");
    $row = $sql->num_rows;

    if ($row > 0) {
        $data = $sql->fetch_array();
        if ($data['level']=="admin") {
            $_SESSION["us"] = $data["nama_user"];
            $_SESSION["email"] = $data["email"];
            $_SESSION['level'] = "admin";
            header('location: admin.php');
        }else if($data['level']=="user"){
            $_SESSION["us"] = $data["nama_user"];
            $_SESSION["email"] = $data["email"];
            $_SESSION['level'] = "user";
            header('location: index.php');
        }else{
            echo alert("Email / Password tidak sesuai!", "login.php");
        }
    }else{
        echo alert("Email / Password tidak sesuai!", "login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK Pemilihan Oleh Oleh Khas Lampung</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        body {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading"><h3 class="text-center">LOGIN</h3></div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" autofocus="on">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-info btn-block">Login</button>
                            <br><p class="text-center"><small>Belum Punya Akun?</small></p>
                            <a href="register.php" class="btn btn-info btn-block">Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
