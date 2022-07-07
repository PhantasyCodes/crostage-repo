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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/user.css">
</head>
<body>
    <?php
    require ("./header.php");
    ?>
    <div class="user-body">
        <div class="profile-picture">
            <img src="./images/patrick.png" alt="">
        </div>
        <div class="details">
            <h1>David King</h1>
            <h2>phantasythenoob</h2>
            <h3>davidkingmwai@gmail.com</h3>
        </div>
        <div class="cart-details">
            <h2>You have</h2>
            <h1>0</h1>
            <h2>items in your cart</h2>
        </div>
    </div>
</body>
</html>