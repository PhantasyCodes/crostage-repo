<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crostaǵe</title>
    <link rel="icon" type="image/x-icon" href="images/bird.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="product-page-wrapper">
        <div class="side-panel">
            <img src="../images/logo-white.png" alt="">
            <div class="side-panel-links">
                <a href=""><button class="big-btn side-btns">Dashboard</button></a>
                <a href="products.php"><button class="big-btn side-btns">Products</button></a>
                <a href="categories.php"><button class="big-btn side-btns">Categories</button></a>
                <a href=""><button class="big-btn side-btns">Sign Out</button></a>
            </div>
        </div>
        <div class="product-content">
            <div class="product-head">
                <h1>Users</h1>
                <a href="category_register.php"><button class="btn4">Add New</button></a>
            </div>
            <div class="products-table">
            <?php
            require("./php/connect.php");
            $sql = "SELECT * FROM users";

            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) > 0) {
                print_r($result);
            }
            else {
                echo "Damn";
            }
            ?>
            </div>
        </div>
    </div>
</body>
</html>