<?php
function salam($time = "Datang",$name = "Bambang"){
    return "Selamat $time, $name!";
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam(); ?></h1>
</body>
</html>