<?php

// $_GET

$students= [
    ["nama" => "Budi Waluyo",
     "nrp" => 122567,
     "jurusan" => "Information tech",
     "Email" => "BudiEmail.com"],
    ["nama" => "Susilo Suudzon",
     "nrp" => 135732,
     "jurusan" => "Information tech",
     "Email" => "SusiloEmail.com"],
    ["nama" => "Megalodon Kurnia",
     "nrp" => 127852,
     "jurusan" => "Information tech",
     "Email" => "MegalodonEmail.com"]];
     ?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach($students as $student) : ?>
    <li>
        <a href="link_latihan.php?nama=<?= $student["nama"]?>
        &nrp=<?=$student["nrp"] ?>
        &jurusan=<?=$student["jurusan"]?>
        &Email=<?=$student["Email"]?>
        "><?= $student["nama"]; ?></a>
        
    </li>
<?php endforeach ?>
</ul>
</body>
</html>

