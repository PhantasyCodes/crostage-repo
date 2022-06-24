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
                <a href="users.php"><button class="big-btn side-btns">Users</button></a>
                <a href=""><button class="big-btn side-btns btn-active">Products</button></a>
                    <a href="product_register.php"><button class="side-btns sub-button">Add New</button></a>
                <a href="categories.php"><button class="big-btn side-btns">Categories</button></a>
                <a href=""><button class="big-btn side-btns">Sign Out</button></a>
            </div>
        </div>
        <div class="product-content">
            <?php
            $id = $_REQUEST['id'];
            
            require("../php/connect.php");

            $sql = "SELECT product_img, product_id, product_name, product_price FROM products WHERE product_id = '$id'";

            $result = mysqli_query($connection, $sql);

            $row = mysqli_fetch_assoc($result);
            echo $row;
            mysqli_close($conn);

            ?>
        </div>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/admin.js"></script>
</body>
</html>