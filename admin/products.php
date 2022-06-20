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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="product-page-wrapper">
        <div class="side-panel">
            <img src="../images/logo-white.png" alt="">
            <div class="side-panel-links">
                <a href=""><button class="big-btn side-btns">Dashboard</button></a>
                <a href=""><button class="big-btn side-btns btn-active">Products</button></a>
                    <a href="product_register.php"><button class="side-btns sub-button">Add New</button></a>
                <a href="categories.php"><button class="big-btn side-btns">Categories</button></a>
                <a href=""><button class="big-btn side-btns">Sign Out</button></a>
            </div>
        </div>
        <div class="product-content">
            <div class="product-head">
                <h1>Products</h1>
                <a href=""><button class="btn4">Add New</button></a>
            </div>
            <div class="products-table">
                <table>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                    </tr>
                    <?php
                    require("../php/connect.php");

                    $sql = "SELECT product_img, product_id, product_name, product_price FROM products";

                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr class='clickable-row' data-href='http://www.crostage.co.ke'><img src='../images/" . $row['product_img'] . "'><td>" . $row["product_id"] . "</td><td>" . $row["product_name"] . "</td><td>" . $row["product_price"] . "</td></tr>";
                        }
                    } else {
                        echo "0 results";
                    }
                    
                    mysqli_close($conn);
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/admin.js"></script>
</body>
</html>