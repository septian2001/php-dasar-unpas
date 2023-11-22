<?php
require "function.php";
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

if( isset($_POST["submit"]) ){
    
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];

    $query = "INSERT INTO mahasiswa VALUES
('$nama', '$nrp', '$email', '$jurusan')";
global $conn;
        mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <button type="submit" name="submit">Masukan Data</button>
            </li>
        </ul>
    </form>
</body>
</html>