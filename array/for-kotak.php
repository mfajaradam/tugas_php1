<?php
    $angka = [2,4,7,33,76,88,34];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: cyan;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <?php for($i = 0;$i < count($angka) ;$i++) : ?>
        <div><?= $angka[$i]; ?></div>
    <?php endfor; ?>
</body>
</html>