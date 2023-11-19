<form class="register_container">
    <div class="register_container__top">
        <p class="info-text">Zarejestruj się aby uzyskać dostęp do dodatkowych funkcjonalności strony</p>
    </div>
    <div class="register_container__bottom">
        <h1 class="title">Zarejestruj się</h1>
        <div class="register_container__bottom__middle">
            <div class="register-slot">
                <div class="input-slot">
                    <input type="email" name="email" id="email" placeholder="Adres email *" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                </div>
                <div class="input-slot">
                    <input type="password" name="password" id="password" placeholder="Hasło *" required>
                </div>
                <div class="input-slot">
                    <input type="password" name="repeat_password" id="repeat_password" placeholder="Powtórz hasło *" required>
                </div>
            </div>
            <div class="register-slot">
                <div class="input-slot">
                    <input type="text" name="name" id="name" placeholder="Imię *" required>
                </div>
                <div class="input-slot">
                    <input type="text" name="surname" id="surname" placeholder="Nazwisko *" required>
                </div>
                <div class="input-slot">
                    <input type="number" name="telephone" id="telephone" placeholder="Nr Telefonu">
                </div>
            </div>
            <div class="register-slot">
                <div class="input-slot">
                    <input type="text" name="company" id="company" placeholder="Nazwa Firmy *" required>
                </div>
                <div class="input-slot">
                    <input type="number" name="nip" id="nip" placeholder="NIP *">
                </div>
                <div class="input-slot">
                    <input type="text" name="street" id="street" placeholder="Ulica *">
                </div>
                <div class="input-slot">
                    <input type="text" name="zipcode" id="zipcode" placeholder="Kod pocztowy *">
                </div>
                <div class="input-slot">
                    <input type="text" name="city" id="city" placeholder="Miasto *">
                </div>
            </div>
            <div class="register-checkbox-slot">
                <div class="input-slot checkbox-slot">
                    <input type="checkbox" name="register_checkbox" id="register_checkbox" required>
                    <label class="checkbox" for="register_checkbox">Zapoznałem się i akceptuję Regulamin oraz Politykę Prywatności</label>
                </div>
            </div>
        </div>
        <div class="full-green--btn register-btn-container">
            <button class="register-btn">Zarejestruj się</button>
        </div>
    </div>
</form>