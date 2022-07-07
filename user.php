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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>
    <?php
    require ("header.php");
    require("php/connect.php");

    $userId = $_SESSION["userid"];
    $sql = "SELECT first_name, last_name, username, profile_picture, phone_no, email FROM users WHERE 'user_id' = '$userId';";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='user-body'>";
            echo "<div class='profile-picture'>";
            echo "<img src='../images/" . $row['profile_picture'] . "' alt=''>";
            echo "</div>";
            echo "<div class='details'>";
            echo "<h1>". $row['first_name'] . "</h1>";
            echo "<h2>" . $row['username'] . "</h2>";
            echo "<h3>" . $row['email'] . "</h3>";
            echo "</div>";
            echo "<div class='cart-details'>";
            echo "<h2>You have</h2>";
            echo "<h1>0</h1>";
            echo "<h2>items in your cart</h2>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 results";
    }



    if(isset($_POST["button"])) {
        $prodId = $_POST["button"];
        $sql2 = "INSERT INTO cart_items (cart_id, product_id, quantity, is_active) VALUES ('$userId', '$prodId', '1', 'yes')";

        mysqli_query($connection, $sql2);
    }

    unset($_POST["button"]);

    mysqli_close($conn);


    ?>
</body>
</html>