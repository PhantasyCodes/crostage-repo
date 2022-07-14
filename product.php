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
    require("php/connect.php");

    $id = $_GET['prodId'];

    $sql = "SELECT product_id, product_img, product_name, product_type, product_price, product_description FROM products WHERE product_id = $id";

    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='slider product'>";
            echo "<div class='slider-description'>";
            echo "<h2>Hoodies</h2>";
            echo "<h1>" .$row['product_name'] . "</h1>";
            echo "<h3>Ksh ". $row['product_price']."</h3>";
            echo "<p>" . $row['product_description'] . "</p>";
            echo "<a href='shop.php'><button class='shadow-btn slider-btn'>SHOP NOW</button></a>";
            echo "</div>";
            echo "<div class='slider-image'>";
            echo "<img src='images/" . $row['product_img'] . "' alt=''>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>
    <!-- <div class="slider product">
        <div class="slider-description">
            <h2>HOODIES</h2>
            <h1>Hunger Games</h1>
            <h3>Ksh 1000</h3>
            <p>Product description is what describes what the product really is. Like dont you get I'm just filling space by now?</p>
            <a href="shop.php"><button class="shadow-btn slider-btn">SHOP NOW</button></a>
        </div>
        <div class="slider-image">
            <img src="images/hunger-games.png" alt="">
        </div>
    </div> -->
</body>
</html>