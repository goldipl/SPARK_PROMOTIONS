<div class="clients_panel_my_data_content">
    <div class="clients_panel_my_data_content__left">
        <aside class="clients_panel_aside">
            <p class="clients_panel_aside--title">Cześć!<br><span>Jan Kowalski</span></p>
            <a class="clients_panel_aside--slot orders" href="./clients-panel-orders.php">
                <p>Zamówienia</p>
            </a>
            <a class="clients_panel_aside--slot data active" href="./clients-panel-my-data.php">
                <p>Twoje Dane</p>
            </a>
            <a class="clients_panel_aside--slot fv" href="./clients-panel-fv.php">
                <p>Dane do faktury</p>
            </a>
            <a class="clients_panel_aside--slot addresses" href="./clients-panel-addresses.php">
                <p>Adres wysyłki</p>
            </a>
        </aside>
    </div>
    <form class="clients_panel_my_data_content__right">
        <h1 class="title">Dane Osobowe</h1>
        <div class="clients_panel_input__container">
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="name">Imię</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="surname">Nazwisko</label>
                    <input type="text" name="surname" id="surname">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="email">Adres e-mail</label>
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email">
                </div>
            </div>
        </div>
        <h1 class="title">Hasło</h1>
        <div class="clients_panel_input__container">
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="password">Aktualne Hasło</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="new_password">Nowe Hasło</label>
                    <input type="password" name="new_password" id="new_password">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <div class="full-green--btn">
                        <button>Zapisz zmiany</button>
                    </div>
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="confirm_new_password">Potwierdź nowe hasło</label>
                    <input type="password" name="confirm_new_password" id="confirm_new_password">
                </div>
            </div>
        </div>
    </form>
</div>