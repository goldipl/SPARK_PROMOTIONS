<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spark Promotions | Karta produktu</title>
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
                        <a href="#">Artykuły biurowe</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Akcesoria biurowe</a>
                    </li>
                    <li class="breadcrumb-item actual">
                        <a href="#">Klip do dokumentów</a>
                    </li>
                </ul>
            </div>
            <div class="row__container">
                <div class="col__product_images">
                    <?php include "./components/products_card/products_gallery.php"; ?> 
                </div> 
                <div class="col__product_details">
                    <?php include "./components/products_card/products_details.php"; ?> 
                </div> 
            </div>
            <?php include "./components/products_card/products_tabs.php"; ?> 
            <?php include "./components/products_card/products_mostly_view.php"; ?> 
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/products_page/products_gallery.js"></script>
    </body>
</html>