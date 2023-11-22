<?php
// script keamanan menggunakan redirect
if( !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["Email"])) {
//  akan dikimbalikan ke halaman awal apabila ada user yg
// mencoba menerobor masuk 
header("Location: variabel_get.php");
exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
<ul>
    <li><?= $_GET["nama"] ?></li>
    <li><?= $_GET["nrp"] ?></li>
    <li><?= $_GET["jurusan"] ?></li>
    <li><?= $_GET["Email"] ?></li>
</ul>
    <a href="variabel_get.php">Menu Awal</a>
</body>
</html>