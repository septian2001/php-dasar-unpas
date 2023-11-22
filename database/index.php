<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// ambil data dari table yg ada di database phpdasar
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
// ambil data dari variable result (fetch) 
// ada 4 cara 
// mysqli_fetch_row() / mengembalikan menjadi array dengan index numerik
// mysqli_fetch_assoc() / mengembalikan menjadi array associative dengan index key
// mysqli_fetch_array() / mengembalikan menjadi array doble associative dan numerik 
// tidak cocok buat menampilkan isi semua data 
// mysqli_fetch_object()

// $student = mysqli_fetch_row($result);
// while ($student = mysqli_fetch_assoc($result)){
// var_dump($student["nrp"]);
// }


?>


<!DOCTYPE html>
<html >
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
<?php while ($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $row["id"];?></td>
            <td>
                <a href="" >ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
<?php endwhile;?>
        </table>

</body>

</html>