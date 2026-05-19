<?php 
$variableMultiplication = 0;
$number = 100;
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php for ($variableMultiplication = 0; $variableMultiplication < 20; $variableMultiplication++) { ?>
       <p><?= $variableMultiplication * $number; ?></p> 
    <?php } ?>
    
</body>
</html>