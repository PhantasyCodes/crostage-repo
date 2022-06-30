<?php
    session_start();
?>
<nav class="navbar">
    <div class="container">
        <div class="search-bar">
            <form action="/action_page.php" class="search-form">
                <input type="text" placeholder="Find something..." name="search" >
                <i class="fa fa-search"></i>
            </form>
        </div>
        <div class="logo-wrapper">
            <a href="#"><img class=logo src="images/logo-black.png" alt=""></a>
        </div>
        <div class="nav-links">
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<a href='php/logout.php' class='signin-link' href='signin.php'>Profile page</a>";
                    echo "<a href='cart.php'><i class='fa fa-shopping-bag' aria-hidden='true'></i></a>";
                }
                else {
                    echo "<a class='signin-link' href='signin.php'>SIGN IN</a>";
                    echo "<a href=''><i class='fa fa-shopping-bag' aria-hidden='true'></i></a>";
                }
            ?>
        </div>
    </div>
</nav>