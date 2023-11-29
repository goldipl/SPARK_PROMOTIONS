<!DOCTYPE html>
<html lang="pl">
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
            <div class="row__container products-page-row">
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
        <!-- Pricing and visualisation modal -->
        <form class="products_card_modal pricing-visualisation">
            <span class="products_card_modal--close-icon"></span>
            <p class="products_card_modal--title">Wycena i wizualizacja na email</p>
            <p class="products_card_modal--desc">Wykonamy bezpłatnie wycenę i wizualizację produktu, w tym celu prosimy o uzupełnienie formularza.</p>
            <div class="products_card_modal__inputs">
                <div class="products_card_modal__inputs__left">
                    <div class="products_card_modal__inputs__left--input">
                        <input type="text" name="name" placeholder="Imię *" required>
                    </div>
                    <div class="products_card_modal__inputs__left--input">
                        <input type="text" name="company_name" placeholder="Nazwa Firmy *" required>
                    </div>
                    <div class="products_card_modal__inputs__left--input">
                        <input type="number" name="telephone" placeholder="Nr Telefonu">
                    </div>
                    <div class="products_card_modal__inputs__left--textarea">
                        <textarea name="message" id="message" placeholder="Wiadomość *" required></textarea>
                    </div>
                </div>
                <div class="products_card_modal__inputs__right">
                    <div class="products_card_modal__inputs__right--input">
                        <input type="text" name="surname" placeholder="Nazwisko *" required>
                    </div>
                    <div class="products_card_modal__inputs__right--input">
                        <input type="email" name="email" placeholder="Adres email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <label for="files" class="add-files" id="add-files">
                        <p class="add-files-title">Dodaj pliki</p>
                        <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                        <p class="add-files-text">Przeciągnij i upuść albo <br>Dodaj plik</p>
                        <input class="file file-block" type="file" id="files">
                    </label>
                </div>
            </div>
            <p class="products_card_modal--desc green">Jeśli nie masz plików nic nie szkodzi, nasz grafik pomoże Ci w tym.</p>
            <div class="products_card_modal__btn">
                <button>Wyślij</button>
            </div>
        </form>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/products_page/products_gallery.js"></script>
        <script src="./js/products_page/pricing_visualisation_modal.js"></script>
        <script src="./js/products_page/product_colors.js"></script>
        <script src="./js/file_upload.js"></script>
    </body>
</html>