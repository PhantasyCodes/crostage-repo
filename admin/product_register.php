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
                    <a href="product_register.php"><button class="side-btns sub-button">Add New</button></a>
                <a href="categories.php"><button class="big-btn side-btns">Categories</button></a>
                <a href=""><button class="big-btn side-btns">Sign Out</button></a>
            </div>
        </div>
        <div class="product-content">
            <div class="product-form-wrapper">
                <h1>Add New Product:</h1>
                <form id="form2" class="product-form" action="../php/product_push.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="pname" placeholder="Product Name">
                    <input type="text" name="price" placeholder="Product Price">
                    <input type="text" name="stock" placeholder="No in stock">
                    <textarea name="pdescription" id="" cols="30" rows="10" placeholder="Product description"></textarea>
                    <select name="category" id="">
                    <?php
                    require("../php/connect.php");

                    $category_sql = "SELECT category_id, category_name FROM categories;";
                    $category_table = mysqli_query($connection, $category_sql);

                    for($i = 0; $i < mysqli_num_rows($category_table); $i++){
                        $row = mysqli_fetch_array($category_table, MYSQLI_ASSOC);
                        $option_value = $row['category_id'];
                        $option_name = $row['category_name'];
                        echo "<option value='$option_value'>$option_name</option>";
                    }
                    ?>
                    </select>
                    <div class="drop-box">
                        <h2 class="drop-box-prompt">DRAG OR CLICK TO UPLOAD PRODUCT IMAGE</h2>
                        <input class="drop-zone-input" name="file" type="file">
                    </div>
                    
                </form>

                <a href=""><button action="submit" form="form2" class="shadow-btn">DONE</button></a>
            </div>
        </div>
    </div>
    <script src="../js/dragndrop.js"></script>
</body>
</html>