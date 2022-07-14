<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crostaǵe</title>
    <link rel="icon" type="image/x-icon" href="../images/bird.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="product-page-wrapper">
        <div class="side-panel">
            <img src="../images/logo-white.png" alt="">
            <div class="side-panel-links">
                <a href=""><button class="big-btn side-btns">Dashboard</button></a>
                <a href="products.php"><button class="big-btn side-btns btn-active">Products</button></a>
                <a href="categories.php"><button class="big-btn side-btns">Categories</button></a>
                <a href=""><button class="big-btn side-btns">Sign Out</button></a>
            </div>
        </div>
        <div class="product-content">
            <div class="product-form-wrapper">
                <h1>Edit Product:</h1>

                <?php
                require ("../php/connect.php");
                $prod_id = $_GET['id'];
                $sql = "SELECT product_name, product_price, product_description, stock, product_description FROM products WHERE product_id = $prod_id";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                mysqli_close($conn);
                ?>
                <form id="form2" class="product-form" action="../php/product_update.php" method="post" enctype="multipart/form-data">
                    <?php echo "<input type='hidden' name='id' value='$prod_id'>";?>
                    <input type="text" name="pname" placeholder="Product Name" value="<?php echo $row['product_name'];?>">
                    <input type="text" name="price" placeholder="Product Price" value="<?php echo $row['product_price'];?>">
                    <input type="text" name="stock" placeholder="No in stock" value="<?php echo $row['stock'];?>">
                    <input type="text" name="pdescription" placeholder="Product description" value="<?php echo $row['product_description'];?>">       
                </form>
                <a href=""><button action="submit" form="form2" class="shadow-btn">EDIT</button></a>
            </div>
        </div>
    </div>
    <script src="../js/dragndrop.js"></script>
</body>
</html>