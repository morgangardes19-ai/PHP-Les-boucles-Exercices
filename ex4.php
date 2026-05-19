<?php
$number = 1;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    while ($number <= 10) { ?>
        <p> <?= $number ?></p>
    <?php
        $number += $number / 2;
    }
    ?>
</body>

</html>