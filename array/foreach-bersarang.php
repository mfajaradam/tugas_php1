<?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: cyan;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php foreach($angka as $number) : ?>
        <?php foreach($number as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>