<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once 'header.php';
    ?>
    <div class="hero sign-in-hero">
        <div class="hero-left sign-in-left">
            <h2>No Account?</h2>
            <a href="register.php"><button class="shadow-btn">REGISTER</button></a>
        </div>
        <div class="hero-right sign-in-right">
            <h2>Heey!</h2>
            <h3>Welcome back! Sign in here:</h3>
            <form class="forms" action="php/process_login.php">
                <input class="inputs" type="text" placeholder="Email Address/Username" name="username">
                <input class="inputs" type="password" placeholder="Password" name="password">
                <button action="submit" class="shadow-btn reg-btn" name="submit" class="shadow-btn">SIGN IN</button>
            </form>
            <a class="forgot"href="">I forgot my password</a>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Make sure to fill all fields</p>";
                }
                elseif ($_GET["error"] == "invalidusername") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Username/email does not exist</p>";
                }
                elseif ($_GET["error"] == "wrongpassword") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Incorrect password</p>";
                }
                elseif ($_GET["error"] == "takenuid") {
                    echo "<p style='font-family:Josefin Sans; padding: 20px 0px;'>*Username/email is already taken</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>