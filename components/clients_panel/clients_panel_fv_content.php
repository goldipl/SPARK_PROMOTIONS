<div class="clients_panel_fv_content">
    <div class="clients_panel_fv_content__left">
        <aside class="clients_panel_aside">
            <p class="clients_panel_aside--title">Cześć!<br><span>Jan Kowalski</span></p>
            <a class="clients_panel_aside--slot orders" href="./clients-panel-orders.php">
                <p>Zamówienia</p>
            </a>
            <a class="clients_panel_aside--slot data" href="./clients-panel-my-data.php">
                <p>Twoje Dane</p>
            </a>
            <a class="clients_panel_aside--slot fv active" href="./clients-panel-fv.php">
                <p>Dane do faktury</p>
            </a>
            <a class="clients_panel_aside--slot addresses" href="./clients-panel-addresses.php">
                <p>Adres wysyłki</p>
            </a>
        </aside>
    </div>
    <form class="clients_panel_fv_content__right">
        <h1 class="title">Dane do faktury</h1>
        <div class="clients_panel_input__container">
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="company">Nazwa Firmy</label>
                    <input type="text" name="company" id="company">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="street">Ulica</label>
                    <input type="text" name="street" id="street">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="nip">NIP</label>
                    <input type="number" name="nip" id="nip">
                </div>
                <div class="input-slot">
                    <label class="label-slot" for="zip">Kod pocztowy</label>
                    <input type="text" name="zip" id="zip">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <label class="label-slot" for="city">Miasto</label>
                    <input type="text" name="city" id="city">
                </div>
            </div>
            <div class="clients_panel_row">
                <div class="input-slot">
                    <div class="full-green--btn">
                        <button>Zapisz zmiany</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>