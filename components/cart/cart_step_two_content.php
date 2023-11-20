<div class="cart_step_two_container inputs">
    <div class="cart_step_two_container__left">
        <div class="cart_step_two_container__box">
            <div class="cart_step_two_container__box__left">
                <div class="title">
                    <p>Dane osobowe</p>
                </div>
                <div class="input-slot">
                    <input type="text" name="name" placeholder="Imię *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="surname" placeholder="Nazwisko *" required>
                </div>
                <div class="input-slot">
                    <input type="email" name="email" placeholder="Adres email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                </div>
                <div class="input-slot">
                    <input type="number" name="telephone" placeholder="Nr Telefonu *" required>
                </div>
            </div>
            <div class="cart_step_two_container__box__right">
                <div class="input-slot radio-btns">
                    <input type="radio" id="company" name="buyer-radiobtn" value="Dane do faktury">&nbsp;<label for="company">Dane do faktury</label>
                    <input type="radio" id="person" name="buyer-radiobtn" value="Osoba fizyczna">&nbsp;<label for="person">Osoba fizyczna</label>
                </div>
                <div class="input-slot">
                    <input type="text" name="company" placeholder="Nazwa Firmy *" required>
                </div>
                <div class="input-slot">
                    <input type="number" name="nip" placeholder="NIP *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="street" placeholder="Ulica *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="zipcode" placeholder="Kod pocztowy *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="city" placeholder="Miasto *" required>
                </div>
                <div class="input-slot checkbox-slot">
                    <input type="checkbox" name="address_checkbox" id="address_checkbox" required>
                    <label class="checkbox" for="address_checkbox">Adres wysyłki inny niż na fakturze</label>
                </div>
            </div>
        </div>
        <div class="cart_bottom_button_container">
            <a class="back-btn" href="">Wróć</a>
        </div>
    </div>
    <div class="cart_step_two_container__right">
        <div class="cart_pay_box">
            <div class="cart_pay_box__content">
                <p class="desc each-price">Cena za sztukę: 1,66 PLN</p>
                <p class="desc branding-price">Znakowanie: 222 PLN</p>
                <p class="desc netto-price"><span>Suma netto:</span>100,66 PLN</p>
                <p class="desc vat"><span>Podatek VAT 23%:</span>10,66 PLN</p>
                <p class="desc delivery"><span>Dostawa Kurier:</span>20,00 PLN</p>
                <p class="desc brutto">Wartość brutto <br>(do zapłaty):</p>
                <p class="desc brutto-price"><span class="big green">100,66</span><span class="large green">PLN</span</p>
            </div>
            <div class="cart_pay_box__button">
                <a class="next-btn" href="">Dalej</a>
            </div>
        </div>
    </div>
</div>