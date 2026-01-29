<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

/*
	ikuti cara penulisan proses.php untuk validasi, sanitasi, RPG, data old
	dan insert ke tbl_tamu termasuk flash message ke index.php#anggota
	bedanya, kali ini diterapkan untuk anggota dosen bukan tamu
*/

$arrAnggota = [
  "noang" => $_POST["txtNoAng"] ?? "",
  "nama" => $_POST["txtNmAng"] ?? "",
  "jabatan" => $_POST["txtJabAng"] ?? "",
  "tanggal" => $_POST["txtTglJadi"] ?? "",
  "skill" => $_POST["txtSkill"] ?? "",
  "gaji" => $_POST["txtGaji"] ?? "",
  "nowa" => $_POST["txtNoWA"] ?? "",
  "batalion" => $_POST["txBatalion"] ?? "",
  "bb" => $_POST["txtBB"] ?? "",
  "tb" => $_POST["txtTB"] ?? ""
];
$_SESSION["anggota"] = $arrAnggota;

<?php
include 'koneksi.php';
include 'fungsi.php';

if (isset($_POST['kirim'])) {
    $nama  = bersih($_POST['nama']);
    $email = bersih($_POST['email']);
    $telp  = bersih($_POST['telp']);

    mysqli_query($conn, "INSERT INTO data_anggota 
        VALUES (NULL,'$nama','$email','$telp')");

    // PRG
    header("Location: read.php?status=sukses");
    exit;
}

header("location: index.php#anggota");
