<?php
session_start();
 $sesinama = $_GET["txtNama"];
 $sesiemail = $_GET["txtEmail"];
 $sesipesan = $_GET["txtPesan"];

$_SESSION["txtNama"] = $sesinama;
$_SESSION["txtEmail"] = $sesiemail;
$_SESSION["txtPesan"] = $sesipesan;

 header("Location: index.php");
?>