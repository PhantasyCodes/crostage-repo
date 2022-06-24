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
            <form class="forms" action="/action_page.php">
                <input class="inputs" type="text" placeholder="Email Address" name="">
                <input class="inputs" type="text" placeholder="Password" name="">
            </form>
            <a href=""><button class="shadow-btn">SIGN IN</button></a>
            <a class="forgot"href="">I forgot my password</a>
        </div>
    </div>
</body>
</html>