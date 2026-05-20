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
    <h1>debut de la boucle</h1>
    <ul>


        <?php for ($number = 200; $number > -5; $number -= 12) {
            if ($number > -4) { ?>
                <li> <?= $number ?> </li>
            <?php } else { ?>
                <li><?= $message ?></li>
        <?php }
        } ?>

    </ul>
</body>

</html>