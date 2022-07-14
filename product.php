<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crostaǵe</title>
    <link rel="icon" type="image/x-icon" href="images/bird.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
</head>
<body>
    <?php
    require ("header.php");
    ?>
    <div class="slider">
        <div class="slider-description">
            <h2>HOODIES</h2>
            <h1>Hunger Games</h1>
            <h3>Ksh 1000</h3>
            <p>Product description is what describes what the product really is. Like dont you get I’m just filling space by now?</p>
            <a href="shop.php"><button class="shadow-btn slider-btn">SHOP NOW</button></a>
        </div>
        <div class="slider-image">
            <img src="images/hunger-games.png" alt="">
        </div>
    </div>
</body>
</html>