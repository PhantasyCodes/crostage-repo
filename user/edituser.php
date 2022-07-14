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
    <nav class="navbar">
        <div class="container">
            <div class="search-bar">
              <form action="/action_page.php" class="search-form">
                  <input type="text" placeholder="Find something..." name="search" >
                  <i class="fa fa-search"></i>
              </form>
            </div>
            <div class="logo-wrapper">
                <a href="index.php"><img class=logo src="images/logo-black.png" alt=""></a>
            </div>
            <div class="nav-links">
                <a class="signin-link" href="signin.php">SIGN IN</a>
                <a href=""><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            </div>
        </div>
    </nav>
    <div class="hero register-hero">
        <div class="sign-in-right register-wrapper">
            <h2>Edit your Account</h2>
            <form id="form1" class="forms" action="php/process_edit.php" method="post" enctype="multipart/form-data">
                <input class="inputs" type="text" placeholder="New First Name" name="firstname">
                <input class="inputs" type="text" placeholder="New Last Name" name="lastname">
                <input class="inputs" type="text" placeholder="New Username" name="username">
                <input class="inputs" type="text" placeholder="New Phone No" name="number">
                <input class="inputs" type="text" placeholder="New Email Address" name="email">
                <input class="inputs" type="password" placeholder="New Password" name="password">
                <?php
                $id = $_SESSION["useruid"]; 
                echo "<input type='hidden' name='id' value='$id'>";
                ?>
                <input type="hidden" name="id" value="">
                <div class="drop-box drop-box2">
                    <h2 class="drop-box-prompt">New profile picture</h2>
                    <input style="display:none" class="drop-zone-input" name="file" type="file">
                </div>
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