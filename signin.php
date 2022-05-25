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
    <nav class="navbar">
        <div class="container">
            <div class="search-bar">
              <form action="/action_page.php">
                  <input type="text" placeholder="Find something..." name="search">
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