<?php
session_start();
include "config.php";
if ($_SESSION['level']=="") {
  header('location: login.php');
}elseif($_SESSION['level']=="user"){
  echo alert("Anda Tidak Bisa Mengakses Laman Ini!", "index.php");
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      body{
        overflow-x: hidden;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href="?admin=data_oleh" style="color: white;">SPK Pemilihan Oleh-Oleh Khas Lampung</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?admin=data_oleh">Nama Oleh-Oleh</a></li>
        <li><a href="?admin=kriteria">Kriteria</a></li>
        <li><a href="?admin=ket_kriteria">Keterangan Kriteria</a></li>
        <li><a href="?admin=alternatif">Data Oleh-Oleh</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="#">|</a></li>
        <li><a href="#" style="font-weight: bold; color: white;"><?= ucfirst($_SESSION["us"]) ?></a></li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <div><?php include admin($_ADMIN); ?></div>
  </div>
  </div>  
</body>
</html>
