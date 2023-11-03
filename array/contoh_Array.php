<?php
$students= [
["Budi Waluyo",122567,"Information tech","Email"],
["Susilo Suudzon",135732,"Information tech","Email"],
["Megalodon Kurnia",127852,"Information tech","Email"]]
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
    <li>Nama : <?php echo$student[0] ?> </li>
    <li>Nrp : <?php echo$student[1] ?> </li>
    <li>Jurusan : <?php echo$student[2] ?> </li>
    <li>Email : <?php echo$student[3] ?> </li>
</ul>
<?php endforeach ?>
</body>
</html>