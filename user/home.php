
<!DOCTYPE html>
<html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .btn-custom{
        padding: 5px 10px ;
    }
    .btn-custom a{
        color:black;
        text-decoration:none;
    }
</style>
</head>
<body>
<div class="container">
    <div class="text-center">
    <br><br><h1><b>Halo <?= ucfirst($_SESSION["us"]) ?></b></h1><br>
    <h3>Selamat Datang di Sistem Pendukung Keputusan Pemilihan Oleh-Oleh Khas Lampung</h3><br>
    <p>Silahkan Klik Tombol Input Nilai Dibawah Ini Untuk Mendapatkan Hasil Ranking Sesuai Kriteria Anda!</p><br>
    <button class="btn btn-info btn-xs btn-custom"><a href="?user=bobot_pilihan&edit&key=K001">INPUT NILAI</a></button>
    </div>
</div>
</body>
</html> 


