<?php

// function pengulangan untuk array
// for atau foreach
$numbers = [3,4,14,36,43,65,22,13,13,7,2];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengulang Array</title>
    <style>
        .cube {
            width: 50px;
            height: 50px;
            background-color: lightskyblue;
            text-align: center;
            line-height: 50px;
            float: left;
        }
        .clear {clear:both;}
    </style>
</head>
<body>

<?php for($i = 0;$i < count($numbers); $i++ ) { ?>
    <div class="cube"> <?php echo $numbers[$i]; ?></div>
<?php } ?>
<!-- menggunakan as untuk pengulangan isi array -->
<div class="clear"></div>
<?PHP foreach($numbers as $number){ ?>
    <div class="cube"><?php echo $number;?></div>
<?php }?>
<!-- script diatas bisa disederhanakan  -->
<div class="clear"></div>
<?PHP foreach($numbers as $number): ?>
    <div class="cube"><?= $number;?></div>
<?php endforeach?>
</body>
</html>