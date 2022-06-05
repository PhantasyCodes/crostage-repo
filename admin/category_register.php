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
                <a href=""><button class="side-btns">Dashboard</button></a>
                <a href=""><button class="side-btns btn-active">Products</button></a>
                <a href=""><button class="side-btns">Sign Out</button></a>
            </div>
        </div>
        <div class="product-content">
            <div class="product-form-wrapper">
                <h1>Add New Category:</h1>
                <form id="form2" class="product-form" action="../php/category_push.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="cname" placeholder="Category Name">
                    <textarea name="cdescription" id="" cols="30" rows="10" placeholder="Category description"></textarea>
                    <div class="drop-box">
                        <h2 class="drop-box-prompt">DRAG OR CLICK TO UPLOAD CATEGORY IMAGE</h2>
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