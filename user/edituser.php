<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    require ("../header.php");
    ?>
    <div class="hero register-hero">
        <div class="sign-in-right register-wrapper">
            <h2>Edit your Account</h2>
            <form id="form1" class="forms" action="../php/process_edit.php" method="post" enctype="multipart/form-data">
                <?php
                require("../php/connect.php");
                $id = $_SESSION["userid"]; 

                $sql = "SELECT first_name, last_name, username, profile_picture, phone_no, email, password FROM users WHERE user_id = $id";
            
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                mysqli_close($conn);
                echo "<input type='hidden' name='id' value='$id'>";
                ?>
                <input class="inputs" type="text" placeholder="New First Name" name="firstname" value="<?php echo $row['first_name'];?>">
                <input class="inputs" type="text" placeholder="New Last Name" name="lastname" value="<?php echo $row['last_name'];?>">
                <input class="inputs" type="text" placeholder="New Username" name="username" value="<?php echo $row['username'];?>">
                <input class="inputs" type="text" placeholder="New Phone No" name="number" value="<?php echo $row['phone_no'];?>">
                <input class="inputs" type="text" placeholder="New Email Address" name="email" value="<?php echo $row['email'];?>">
                <input class="inputs" type="password" placeholder="New Password" name="password" value="<?php echo $row['password'];?>">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <button action="submit" form="form1" class="shadow-btn reg-btn" name="submit">EDIT</button>
            </form>
            <a class="forgot"href="">I forgot my password</a>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Make sure to fill all fields</p>";
                }
                elseif ($_GET["error"] == "invaliduid") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Please use a valid username</p>";
                }
                elseif ($_GET["error"] == "invalidemail") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Please use a valid email</p>";
                }
                elseif ($_GET["error"] == "takenuid") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Username/email is already taken</p>";
                }
            }
            ?>
        </div>
    </div>
    <script src="../js/dragndrop.js"></script>
</body>
</html>