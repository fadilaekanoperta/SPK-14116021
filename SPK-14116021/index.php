<?php
session_start();
include "config.php";
if ($_SESSION['level']=="") {
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>14116021</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
      body{
        overflow-x: hidden;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href="?user=home" style="color: white;">SPK Pemilihan Oleh-Oleh Khas Lampung</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?user=home">Beranda <span class="sr-only"></span></a></li>
        <li><a href="?user=bobot_pilihan&edit&key=K001">Proses SPK</a></li>
        <li><a href="?user=hasil">Hasil SPK</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="#">|</a></li>
        <li><a href="#" style="font-weight: bold; color: white;"><?= ucfirst($_SESSION["us"]) ?></a></li>              
      </ul>
    </div>
  </nav>
  <div class="row">
    <div><?php include user($_USER); ?></div>
  </div>
  </div>  
</body>
</html>