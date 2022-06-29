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
    include_once 'header.php';
    ?>
    <div class="shop-container">
        <div class="shop-sidebar">

        </div>
        <div class="shop-content">
            <?php
            require("php/connect.php");

            $sql = "SELECT product_img, product_id, product_name, product_price FROM products";

            $result = mysqli_query($connection, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['product_id'];
                    echo "<div class='shop-item' data-href='http://www.crostage.co.ke/admin/product_edit.php?id=$id'><img class='admin-img' src='images/" . $row['product_img'] . "><h1>" . $row["product_name"] . "</h1><h2>" . $row["product_price"] . "</h2></div>";
                }
            } else {
                echo "0 results";
            }
            
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>