<?php
$number = 20;
$phrase = "C'est presque bon.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($number = 20; $number >= 0; $number--) {
        if ($number > 0) { ?>
            <p><?= $number ?></p>
        <?php } else { ?>
            <p><?= $phrase ?></p>

    <?php }
    } ?>
</body>

</html>