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
                <a href=""><button class="big-btn side-btns btn-active">Users</button></a>
                <a href="products.php"><button class="big-btn side-btns">Products</button></a>
                <a href="categories.php"><button class="big-btn side-btns">Categories</button></a>
                <a href=""><button class="big-btn side-btns">Sign Out</button></a>
            </div>
        </div>
        <div class="product-content">
            <div class="product-head">
                <h1>Users</h1>
            </div>
            <div class="products-table">
                <table>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                    <?php
                    require("../php/connect.php");

                    $sql = "SELECT user_id, first_name, last_name, username, email FROM users";

                    $result = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr class='clickable-row' data-href='http://www.crostage.co.ke'><td>" . $row["user_id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] ."</td></tr>";
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