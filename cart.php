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
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <h1 class="cart-heading">Your cart</h1>
    <div class="cart">
        <form action="">
            <?php
                require("php/connect.php");

                $userId = $_SESSION["userid"];

                $sql = "SELECT products.product_id, products.product_name, products.product_price, products.product_img FROM products INNER JOIN cart_items ON products.product_id = cart_items.product_id WHERE cart_items.cart_id = '$userId';";

                $result = mysqli_query($connection, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $productImage = $row['product_img'];
                        echo "<div class='cart-item'>";
                        echo "<img src='images/" . $row['product_img'] . "'>";
                        echo "<div class='cart-item-text'>";
                        echo "<h2>" . $row['product_name'] . "</h2>";
                        echo "<h3>Ksh " . $row['product_price'] . "</h3>";
                        echo "<div class='quantity-box'>";
                        echo "<button id='decrement' class='quantity-btn decrement' onclick='stepper(this)'> - </button>";
                        echo "<input type='number' id='my-input' class='quantity' name='quantity' min='1' max='5' step='1' value='1' readonly>";
                        echo "<button id='increment' class='quantity-btn increment' onclick='stepper(this)'> + </button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "There are 0 itmems in your cart";
                }
            ?>
        </form>
    </div>
    <script src="js/cart.js"></script>
</body>
</html>