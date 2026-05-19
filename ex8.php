<?php
$number = 200;
$message = "Enfin !!!!";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($number = 200; $number > -5; $number -= 12) {
        if ($number > -4) { ?>
            <?= $number ?>
        <?php } else { ?>
            <?= $message ?>
    <?php }
    } ?>
</body>

</html>