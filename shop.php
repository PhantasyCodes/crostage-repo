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
            <div class="sidebar-heading">
                <h1>Filter by:</h1>
            </div>
            <div class="sidebar-categories">
                <?php
                require("php/connect.php");

                $sql = "SELECT category_name FROM categories";

                $result = mysqli_query($connection, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        $category = $row['category_name'];
                        echo "<form action='php/shop.categories.php' id='category-form' method='post'>";
                        echo "<input type='checkbox' name='choice' value='$category'>";
                        echo "<label for='choice'>$category<label><br>";
                        echo "</form>";
                    }
                } else {
                    echo "0 results";
                }

                echo "<button action='submit' form='category-form' class='shadow-btn'>SUBMIT</button>";

                mysqli_close($conn);
                if (isset($_GET["category"])) {
                    $choice = $_GET["category"];
                }
                ?>

            </div>
        </div>
        <div class="shop-content">
            <?php
            require("php/connect.php");

            $sql = "SELECT products.product_id, products.product_img, products.product_name, products.product_type, products.product_price, categories.category_name FROM products INNER JOIN category_item ON products.product_id = category_item.product_id INNER JOIN categories ON categories.category_id = category_item.category_id;";

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
                    echo "<a href='product.php?prodId=". $row['product_id'] ."'><button class='shadow-btn'>VIEW</button></a>";
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

            $userId = $_SESSION["userid"];
            
            if(isset($_POST["button"])) {
                $prodId = $_POST["button"];
                $sql2 = "INSERT INTO cart_items (cart_id, product_id, quantity, is_active) VALUES ('$userId', '$prodId', '1', 'yes')";

                mysqli_query($connection, $sql2);
            }

            unset($_POST["button"]);

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>