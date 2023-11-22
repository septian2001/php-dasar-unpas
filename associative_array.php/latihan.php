<!DOCTYPE html>
<html>
<head>
    <title>Pengulang Array</title>
    <style>
        .cube {
            width: 60px;
            height: 60px;
            background-color: #bada55;
            text-align: center;
            line-height: 60px;
            margin: 3px;
            float: left;
            transition: 1.3s;
        }
        .cube:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
    $numbers = [[12,34,45],[8,9,9],[8,8,3],[56,2,57]];
?>
    <?php foreach($numbers as $number) : ?>
        <?php foreach($number as $small) : ?>
        <div class="cube"><?= $small;?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>