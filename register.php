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
            <h2>Create an Account</h2>
            <form class="forms" action="/action_page.php">
                <input class="inputs" type="text" placeholder="First Name" name="">
                <input class="inputs" type="text" placeholder="Last Name" name="">
                <input class="inputs" type="text" placeholder="Username" name="">
                <input class="inputs" type="text" placeholder="Phone No" name="">
                <input class="inputs" type="text" placeholder="Email Address" name="">
                <input class="inputs" type="text" placeholder="Password" name="">
            </form>
            <a href=""><button class="shadow-btn">REGISTER</button></a>
            <a class="forgot"href="">I forgot my password</a>
        </div>
    </div>
</body>
</html>