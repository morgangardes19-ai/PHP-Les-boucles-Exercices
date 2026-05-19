<?php 
$variableMultiplication = 100;
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
    <?php for ($variableMultiplication = 100; $variableMultiplication >= 10 ; $variableMultiplication--) { ?>
       <?=  $variableMultiplication * $number?>
   <?php } ?>
</body>
</html>