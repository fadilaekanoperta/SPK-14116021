<?php

/**
 * Database connection setup
 */
if (!$db = new Mysqli("localhost", "root", "", "spk_pemilihan_oleh_oleh_lampung")) {
  echo "<h3>ERROR: Koneksi database gagal!</h3>";
}

/**
 * Page initialize
 */
if (isset($_GET["user"])) {
  $_USER = $_GET["user"];
} else {
  $_USER = "home";
}

if (isset($_GET["admin"])) {
  $_ADMIN = $_GET["admin"];
} else {
  $_ADMIN = "data_oleh";
}

/**
 * Page setup
 * @param page
 * @return page filename
 */
function user($user) {
  return "user/" . $user . ".php";
}
function admin($admin) {
  return "admin/" . $admin . ".php";
}

/**
 * Alert notification
 * @param message, redirection
 * @return alert notify
 */
function alert($msg, $to = null) {
  $to = ($to) ? $to : $_SERVER["PHP_SELF"];
  return "<script>alert('{$msg}');window.location='{$to}';</script>";
}

// membaca kode alternatif terbesar
$query = "SELECT max(id_alternatif) as max_id FROM alternatif";//mengambil id terbesar
$hasil = mysqli_query($db, $query);
$data  = mysqli_fetch_array($hasil);
$kode_alternatif = $data['max_id'];
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 4 karakter
// misal 'A001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($kode_alternatif, 1, 3);
$noUrut++;
$char = "A";
$current_id = $char . sprintf("%03s", $noUrut);

// membaca kode alternatif terbesar
$query = "SELECT max(id_oleh_oleh) as max_id FROM data_oleh";//mengambil id terbesar
$hasil = mysqli_query($db, $query);
$data  = mysqli_fetch_array($hasil);
$kode_data_oleh = $data['max_id'];
$noUrut = (int) substr($kode_data_oleh, 1, 3);
$noUrut++;
$char = "O";
$current_idO = $char . sprintf("%03s", $noUrut);

// membaca kode kriteria terbesar
$query = "SELECT max(id_kriteria) as max_id FROM kriteria";
$hasil = mysqli_query($db, $query);
$data  = mysqli_fetch_array($hasil);
$kode_kriteria = $data['max_id'];
$noUrutK = (int) substr($kode_kriteria, 1, 3);
$noUrutK++;
$char = "C";
$current_idK = $char . sprintf("%03s", $noUrutK);

// membaca kode keterangan kriteria terbesar
$queryKK = "SELECT max(id_ket_kriteria) as max_id FROM ket_kriteria";
$hasilKK = mysqli_query($db, $queryKK);
$dataKK  = mysqli_fetch_array($hasilKK);
$kodeket__kriteria = $dataKK['max_id'];
$noUrutKK = (int) substr($kodeket__kriteria, 1, 3);
$noUrutKK++;
$char = "K";
$current_idKK = $char . sprintf("%03s", $noUrutKK);
