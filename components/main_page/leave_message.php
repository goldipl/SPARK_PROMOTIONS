<section id="leave_message">
    <h1 class="title">Zostaw nam <span>wiadomość</span></h1>
    <p class="desc">Napisz do nas</p>
    <div class="leave_message_container">
        <form>
            <div class="leave_message_container__top">
                <div class="leave_message_container__top__left">
                    <input type="text" name="leave_message_name" id="leave_message_name" placeholder="Twoje imię">
                </div>
                <div class="leave_message_container__top__right">
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="leave_message_email" id="leave_message_email" placeholder="Twój adres e-mail">
                </div>
            </div>
            <div class="leave_message_container__bottom">
                <textarea name="leave_message_textarea" id="leave_message_textarea" placeholder="Wiadomość"></textarea>
            </div>
            <div class="leave_message_container__button">
                <div class="captcha">
                    <img src="./assets/img/contact_component/recaptcha.jpg" alt="captcha" width="308" height="82">
                </div>
                <div class="button">
                    <a href="">Wyślij<img src="./assets/icons/arrow-right-grey.svg" alt="captcha" width="12" height="12"></a>
                </div>
            </div>
        </form>
    </div>
</section>