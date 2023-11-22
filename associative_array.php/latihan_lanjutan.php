<?php
//array associative
//penggunaan munggunakan key => value
// cara print out array ass tidak sama dengan array numeric
// yaitu menggunakan key dari masing2 value
// contoh numeric echo $variable[]
// array associative $variable["key"] 


$students= [
    ["nama" => "Budi Waluyo",
    "nrp" => 122567,
    "jurusan" => "Information tech",
    "Email" => "Email.com",
    "gambar" => "download.jpg"],
   ["nama" => "Susilo Suudzon",
    "nrp" => 135732,
    "jurusan" => "Information tech",
    "Email" => "Email.com"],
   ["nrp" => 127852,
   "nama" => "Megalodon Kurnia",
    "jurusan" => "Information tech",
    "Email" => "Email.com"]];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>
<!-- menampilkan menggunakan pengulangan -->
<?php foreach ($students as $student) : ?>
<ul>
    <li><img src="img/download.jpg"></li>
    <li>Nama : <?php echo$student["nama"] ?> </li>
    <li>Nrp : <?php echo$student["nrp"] ?> </li>
    <li>Jurusan : <?php echo$student["jurusan"] ?> </li>
    <li>Email : <?php echo$student["Email"] ?> </li>
</ul>
<?php endforeach ?>
</body>
</html>
