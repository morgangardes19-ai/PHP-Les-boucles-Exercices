<?php
$number = 1;
$phrase = "On y arrive presque.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php for ($number = 1; $number <= 15; $number++) {
        if ($number < 15) { ?>
            <p><?= $number; ?></p>
        <?php } else { ?>
            <p><?= $phrase; ?></p>
    <?php }
    } ?>
</body>

</html>