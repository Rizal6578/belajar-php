<?php
require 'function.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
</head>
<body>
    <h1>Screenshot Hasil</h1>

    <?php
    
    $imagePath = 'assest/image/ss 1.png';
    $imagePath1 = 'assest/image/ss 2.png';

    
    echo '<img src="' . $imagePath . '" alt="Screenshot">';
    echo '<img src="' . $imagePath1 . '" alt="Screenshot">';
    ?>
</body>
</html>
