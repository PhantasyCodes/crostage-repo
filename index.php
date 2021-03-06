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
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="anim" class="loader">
    </div>
    <?php
        include 'header.php';
    ?>
    <div id="butter">
        <div class="hero">
            <div class="hero-left">
                <h1>Make yourself feel <br> comfortable</h1>
                <h2>Be best dressed. All day, everyday</h2>
                <a href="shop.php"><button id="btn1">Our collection <i class="fa fa-arrow-right"></i></button></a>
                <img src="images/fur_hat.png" alt="">
            </div>
            <div class="hero-right">
                <div class="todays-closet">
                    <div class="carousel-wrapper">
                        <div class="class">
                            <div class="cardList">
                                <button class="cardList__btn btn btn--left">
                                    <div class="icon">
                                        <svg>
                                            <use xlink:href="#arrow-left"></use>
                                        </svg>
                                    </div>
                                </button>
                                <div class="cards__wrapper">
                                    <div class="card current--card">
                                        <div class="card__image">
                                            <img src="images/brown_shirt_front.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card next--card">
                                        <div class="card__image">
                                            <img src="images/turtle_neck.png" alt="">
                                        </div>
                                    </div>
                                    <div class="card previous--card">
                                        <div class="card__image">
                                            <img src="images/magnum_hoodie.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <button class="cardList__btn btn btn--right">
                                    <div class="icon">
                                        <svg>
                                            <use xlink:href="#arrow-right"></use>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div class="infoList">
                                <div class="info__wrapper">
                                    <div class="info current--info">
                                        <h1 class="text name">Brown Shirt</h1>
                                        <h4 class="text location">Shirts</h4>
                                        <p class="text description">And it's see through</p>
                                    </div>
                                    <div class="info next--info">
                                        <h1 class="text name">Turtle</h1>
                                        <h4 class="text location">Tops</h4>
                                        <p class="text description">It's pretty heavy</p>
                                    </div>
                                    <div class="info previous--info">
                                        <h1 class="text name">Magnum Hoodie</h1>
                                        <h4 class="text location">Hoodies</h4>
                                        <p class="text description">And it's waterproof</p>
                                    </div>
                                </div>
                            </div>
                        </div>              
                        <svg class="icons" style="display: none;">
                            <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                                <polyline points='328 112 184 256 328 400'
                                             style='fill:none;stroke:rgb(0, 0, 0);stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                            </symbol>
                            <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
                                <polyline points='184 112 328 256 184 400'
                                             style='fill:none;stroke:rgb(0, 0, 0);stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
                            </symbol>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="carousel-heading">
                <h1>What's Hot</h1>
                <h2>Our new season tops</h2>
            </div>
            <div class="owl-carousel-wrapper">
                <div class="owl-carousel owl-theme">
                    <div class="slider">
                        <div class="slider-description">
                            <h2>HOODIES</h2>
                            <h1>Hunger Games</h1>
                            <h3>Ksh 1000</h3>
                            <p>Product description is what describes what the product really is. Like dont you get I’m just filling space by now?</p>
                            <a href="shop.php"><button class="shadow-btn slider-btn">SHOP NOW</button></a>
                        </div>
                        <div class="slider-image">
                            <img src="images/hunger-games.png" alt="">
                        </div>
                    </div>
                    <div class="slider">
                        <div class="slider-description">
                            <h2>HOODIES</h2>
                            <h1>Afro Hoodie</h1>
                            <h3>Ksh 1000</h3>
                            <p>Product description is what describes what the product really is. Like dont you get I’m just filling space by now?</p>
                            <a href=""><button class="shadow-btn slider-btn">SHOP NOW</button></a>
                        </div>
                        <div class="slider-image">
                            <img src="images/afro-hoodie.png" alt="">
                        </div>
                    </div>
                    <div class="slider">
                        <div class="slider-description">
                            <h2>HOODIES</h2>
                            <h1>Pink Raincoat</h1>
                            <h3>Ksh 1500</h3>
                            <p>Product description is what describes what the product really is. Like dont you get I’m just filling space by now?</p>
                            <a href=""><button class="shadow-btn slider-btn">SHOP NOW</button></a>
                        </div>
                        <div class="slider-image">
                            <img src="images/raincoat-pink.png" alt="">
                        </div>
                    </div>
                    <div class="slider">
                        <div class="slider-description">
                            <h2>SHIRTS</h2>
                            <h1>Brown See-Through</h1>
                            <h3>Ksh 1000</h3>
                            <p>Product description is what describes what the product really is. Like dont you get I’m just filling space by now?</p>
                            <a href=""><button class="shadow-btn slider-btn">SHOP NOW</button></a>
                        </div>
                        <div class="slider-image">
                            <img src="images/brown_shirt_front.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3">
            <div class="sec-3-wrapper">
                <div class="section-3-left">
                    <h1>We beleive everyone should have great fashion, paired with the latest looks.</h1>
                    <h2>Save more with our unbeatable prices. This month, every purchase<br>comes with a free coupon and gift. There's always something for<br>everyone.</h2>
                    <a href=""><button class="shadow-btn sec-3-btn">SHOP NOW</button></a>
                </div>
                <div class="section-3-right">
                    <img src="images/ascending_khaki.png" alt="">
                </div>
            </div>
        </div>
        <div class="slider-2">
            <h1>Featured Products</h1>
            <div class="products">
                <div class="box">
                    <img src="images/afro-hoodie.png" alt="">
                    <h2>BROWN SHIRT</h2>
                    <h3>SHIRTS</h3>
                    <p>Ksh 1500<p>
                    <a href=""><button id="btn2">Add To Cart</button></a>
                </div>
                <div class="box">
                    <img src="images/brown_shirt_front.png" alt="">
                    <h2>BROWN SHIRT</h2>
                    <h3>SHIRTS</h3>
                    <p>Ksh 1500<p>
                    <a href=""><button id="btn2">Add To Cart</button></a>
                </div>
                <div class="box">
                    <img src="images/raincoat-pink.png" alt="">
                    <h2>BROWN SHIRT</h2>
                    <h3>SHIRTS</h3>
                    <p>Ksh 1500<p>
                    <a href=""><button id="btn2">Add To Cart</button></a>
                </div>
                <div class="box">
                    <img src="images/turtle_neck.png" alt="">
                    <h2>BROWN SHIRT</h2>
                    <h3>SHIRTS</h3>
                    <p>Ksh 1500<p>
                    <a href=""><button id="btn2">Add To Cart</button></a>
                </div>
            </div>
        </div>
        <div class="section-4">
            <h1>Ordering your merch has never been easier. Get your clothes on the go!</h1>
            <h2>Make your order and have it delivered in as low as 30 minutes,<br> 
                or visit our store, and we’ll help you make a wonderful selection</h2>
            <img src="images/icons-sec-4.png" alt="">
        </div>
        <?php
        include_once 'footer.php';
        ?>
    </div>
    
    
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/bb2f5ec7b2.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/lottie-interactive@latest/dist/lottie-interactive.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/interactivity.js"></script>
    <script src="js/lottie.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/butter.js"></script>
    <script>
        // smooth like buttah...
        butter.init();
    </script>
    <script src="js/script.js"></script>

</body>
</html>