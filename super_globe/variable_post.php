

<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"])):  ?>
    <h1>Halo Selamat Datang,<?= $_POST["Nama"] ; ?>!</h1>
<?php endif; ?>
    <form action="" method="post" >
        Masukan Nama :
        <input type="text" name="Nama">
        <br>
        <button type="submit" name="submit">KIRIM</button>
    </form>
</body>
</html>