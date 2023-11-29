<div class="send_request">
    <div class="send_request_title">Wyślij zapytanie - <span>zamówienia specjalne</span></div>
    <div class="send_request_desc">Masz pytania, wyślij nam wiadomość</div>
    <div class="send_request_box">
        <form class="send_request_form">
            <div class="send_request_form_top">
                <div class="send_request_form_top__left">
                    <div class="send_request_form_top__left--input">
                        <input type="text" name="name" placeholder="Imię *" required>
                    </div>
                    <div class="send_request_form_top__left--input">
                        <input type="text" name="company_name" placeholder="Nazwa Firmy *" required>
                    </div>
                    <div class="send_request_form_top__left--input">
                        <input type="number" name="telephone" placeholder="Nr Telefonu">
                    </div>
                    <div class="send_request_form_top__left--textarea">
                        <textarea name="message" id="message" placeholder="Wiadomość *" required></textarea>
                    </div>
                </div>
                <div class="send_request_form_top__right">
                    <div class="send_request_form_top__right--input">
                        <input type="text" name="surname" placeholder="Nazwisko *" required>
                    </div>
                    <div class="send_request_form_top__right--input">
                        <input type="email" name="email" placeholder="Adres email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                    <label for="files" class="add-files" id="add-files">
                        <p class="add-files-title">Dodaj pliki</p>
                        <img class="add-files-img" src="./assets/icons/cart/upload.svg" alt="upload" width="21" height="14">
                        <p class="add-files-text">Przeciągnij i upuść albo <br>Dodaj plik</p>
                        <input class="file file-block" type="file" id="files" required="">
                    </label>
                </div>
            </div>
            <div class="send_request_form_bottom">
                <div class="send_request_form_bottom__btn">
                    <button>Wyślij</button>
                </div>
            </div>
        </form>
    </div>
</div>

