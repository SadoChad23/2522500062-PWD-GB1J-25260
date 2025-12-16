<?php
session_start();
require_once "koneksi.php";
require_once "fungsi.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $_SESSION["chad_error"] = "Akses tidak valid!";
    redirect_ke("index.php#contact");
    exit;
}

$nama  = bersihkan($_POST["txtNama"] ?? '');
$email = bersihkan($_POST["txtEmail"] ?? '');
$pesan = bersihkan($_POST["txtPesan"] ?? '');

$errors = [];
if ($nama === '') {
    $errors[] = "Nama tidak boleh kosong.";
}

if ($email === '') {
    $errors[] = "Email tidak boleh kosong.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Format email tidak valid.";
}
if ($pesan === '') {
    $errors[] = "Pesan tidak boleh kosong.";
}
if (!empty($errors)) {
    $_SESSION["old"] = [
        "nama"  => $nama,
        "email" => $email,
        "pesan" => $pesan,
    ];
    $_SESSION["chad_error"] = implode("<br>", $errors);
    redirect_ke("index.php#contact");
    exit;
}
$arrBiodata = [
  "nim" => $_POST["txtNim"] ?? "",
  "nama" => $_POST["txtNmLengkap"] ?? "",
  "tempat" => $_POST["txtT4Lhr"] ?? "",
  "tanggal" => $_POST["txtTglLhr"] ?? "",
  "hobi" => $_POST["txtHobi"] ?? "",
  "pasangan" => $_POST["txtPasangan"] ?? "",
  "pekerjaan" => $_POST["txtKerja"] ?? "",
  "ortu" => $_POST["txtNmOrtu"] ?? "",
  "kakak" => $_POST["txtNmKakak"] ?? "",
  "adik" => $_POST["txtNmAdik"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
