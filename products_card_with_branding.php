<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spark Promotions | Karta produktu z znakowaniem</title>
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
                    <?php include "./components/products_card/products_details_with_branding.php"; ?> 
                </div> 
            </div>
            <?php include "./components/products_card/products_tabs.php"; ?> 
            <?php include "./components/products_card/products_mostly_view.php"; ?> 
        </div>
        <footer> 
            <?php include "./components/footer.php"; ?> 
        </footer>
         <!-- Pricing and visualisation modal -->
         <form class="visualisation_modal pricing-visualisation">
            <span class="visualisation_modal--close-icon"></span>
            <p class="visualisation_modal--title">Wycena i wizualizacja na email</p>
            <p class="visualisation_modal--desc">Wykonamy bezpłatnie wycenę i wizualizację produktu, w tym celu prosimy o uzupełnienie formularza.</p>
            <div class="visualisation_modal__inputs">
                <div class="visualisation_modal__inputs__left">
                    <div class="visualisation_modal__inputs__left--input">
                        <input type="text" name="name" placeholder="Imię *" required>
                    </div>
                    <div class="visualisation_modal__inputs__left--input">
                        <input type="text" name="company_name" placeholder="Nazwa Firmy *" required>
                    </div>
                    <div class="visualisation_modal__inputs__left--input">
                        <input type="number" name="telephone" placeholder="Nr Telefonu">
                    </div>
                    <div class="visualisation_modal__inputs__left--textarea">
                        <textarea name="message" id="message" placeholder="Wiadomość *" required></textarea>
                    </div>
                </div>
                <div class="visualisation_modal__inputs__right">
                    <div class="visualisation_modal__inputs__right--input">
                        <input type="text" name="surname" placeholder="Nazwisko *" required>
                    </div>
                    <div class="visualisation_modal__inputs__right--input">
                        <input type="email" name="email" placeholder="Adres email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <div class="add-files">
                        <p class="add-files-title">Dodaj pliki</p>
                        <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                        <p class="add-files-text">Przeciągnij i upuść albo <br>Dodaj plik</p>
                    </div>
                </div>
            </div>
            <p class="visualisation_modal--desc green">Jeśli nie masz plików nic nie szkodzi, nasz grafik pomoże Ci w tym.</p>
            <div class="visualisation_modal__btn">
                <button>Wyślij</button>
            </div>
        </form>
        <!-- Free visualisation modal -->
        <form class="visualisation_modal free-visualisation">
            <span class="visualisation_modal--close-icon"></span>
            <p class="visualisation_modal--title">Darmowa wizualizacja na email</p>
            <p class="visualisation_modal--desc">Wykonamy bezpłatnie wizualizację produktu, w tym celu prosimy o uzupełnienie formularza.</p>
            <div class="visualisation_modal__inputs">
                <div class="visualisation_modal__inputs__left">
                    <div class="visualisation_modal__inputs__left--input">
                        <input type="text" name="name" placeholder="Imię *" required>
                    </div>
                    <div class="visualisation_modal__inputs__left--input">
                        <input type="text" name="company_name" placeholder="Nazwa Firmy *" required>
                    </div>
                    <div class="visualisation_modal__inputs__left--input">
                        <input type="number" name="telephone" placeholder="Nr Telefonu">
                    </div>
                    <div class="visualisation_modal__inputs__left--textarea">
                        <textarea name="message" id="message" placeholder="Wiadomość *" required></textarea>
                    </div>
                </div>
                <div class="visualisation_modal__inputs__right">
                    <div class="visualisation_modal__inputs__right--input">
                        <input type="text" name="surname" placeholder="Nazwisko *" required>
                    </div>
                    <div class="visualisation_modal__inputs__right--input">
                        <input type="email" name="email" placeholder="Adres email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <div class="add-files">
                        <p class="add-files-title">Dodaj pliki</p>
                        <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                        <p class="add-files-text">Przeciągnij i upuść albo <br>Dodaj plik</p>
                    </div>
                </div>
            </div>
            <p class="visualisation_modal--desc green">Jeśli nie masz plików nic nie szkodzi, nasz grafik pomoże Ci w tym.</p>
            <div class="free_pricing_visualisation_box">
                <p class="title">Wycena dla:<span>21 sztuk</span></p>
                <p class="desc">Cena za sztukę: 1,66 PLN</p>
                <p class="desc">Znakowanie: 222 PLN</p>
            </div>
            <div class="free_summary_visualisation_box">
                <p class="summary netto">Wartość całkowita netto zamówienia:<span class="price green big">100,66</span><span class="price green">PLN</span></p>
                <p class="desc brutto">122.88 PLN brutto</p>
            </div>
            <div class="visualisation_modal__btn">
                <button>Wyślij</button>
            </div>
        </form>
        <script src="./js/mobile_searchbar.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/products_page/products_gallery.js"></script>
        <script src="./js/products_page/pricing_visualisation_modal.js"></script>
        <script src="./js/products_page/free_visualisation_modal.js"></script>
    </body>
</html>