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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <div class="shop-container">
        <div class="shop-sidebar">

        </div>
        <div class="shop-content">
            <?php
            require("php/connect.php");

            $sql = "SELECT product_img, product_id, product_name, product_type, product_price FROM products";

            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['product_id'];
                    echo "<div class='shop-item'>";
                    echo "<img class='admin-img' src='images/" . $row['product_img'] . "'>";
                    echo "<div class='shop-item-child'>";
                    echo "<div class='shop-item-child-left'>";
                    echo "<h1 style='font-weight:400;'>" . $row["product_name"] . "</h1>";
                    echo "<h2 style='font-weight:300;'>" . $row["product_type"] . "</h2>";
                    echo "<h2 style='font-weight:300;'>" . $row["product_price"] . "</h2>";
                    echo "</div>";
                    echo "<div class='shop-item-child-right'>";
                    echo "<button class='shadow-btn'>VIEW</button>";
                    echo "<form method='post'>";
                    echo "<button action='submit' class='shadow-btn' name='button' value='" . $id . "'>ADD TO CART</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }
            
            if(isset($_POST["button"])) {
                echo $_POST["button"];
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>