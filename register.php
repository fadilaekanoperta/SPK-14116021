<?php
include "config.php";
if (isset($_POST['register'])) {
    $password = md5($_POST["password"]);

    $sql = "INSERT INTO user (`id_user`,`nama_user`, `email`, `password`,`level`) 
    VALUES (NULL,'$_POST[nama_user]', '$_POST[email]', '$password', 'user')";
    if ($db->query($sql)) {
		echo alert("Berhasil! Silahkan Login", "login.php");
	} else {
		echo alert("Gagal!", "register.php");
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
                    <div class="panel-heading"><h3 class="text-center">REGISTER</h3></div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="nama_user">Nama</label>
                                <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="Nama" autofocus="on" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-info btn-block" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
