<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spark Promotions | Koszyk - Adres dostawy - Zaloguj się</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.jpg" type="image/x-icon">
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>
        <header> 
            <?php include "./components/nav.php"; ?> 
        </header>
        <div id="main-wrapper">
            <div class="breadcrumbs">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Koszyk</a>
                    </li>
                </ul>
            </div>
            <div id="cart_steps_container">
                <ul class="cart_steps">
                    <li class="cart_steps--item">
                        <a href="#">
                            <div class="item--number">
                                <p>1</p>
                            </div>
                            <div class="item--text">
                                <p>Twój Koszyk</p>
                            </div>
                        </a>
                    </li>
                    <li class="cart_steps--item active">
                        <a href="#">
                            <div class="item--number">
                                <p>2</p>
                            </div>
                            <div class="item--text">
                                <p>Adres dostawy</p>
                            </div>
                        </a>
                    </li>
                    <li class="cart_steps--item">
                        <a href="#">
                            <div class="item--number">
                                <p>3</p>
                            </div>
                            <div class="item--text">
                                <p>Podsumowanie</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <?php include "./components/cart/cart_login_content.php"; ?>
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>