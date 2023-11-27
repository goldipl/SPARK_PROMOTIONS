<div class="category_filters">
    <div class="accordion_box_title">
        <h1 class="title producer accordion">Producent</h1>
        <div class="accordion_box_title--img">
            <img src="./assets/icons/chevron-down-grey.svg" alt="chevron-down-grey" width="12" height="12">
        </div>
    </div>
    <div class="category_filters-slot">
        <ul class="category_filters-slot--list producer">
            <li>
                <input type="checkbox" id="tag01" name="tag01" value="Tag 01">
                <label for="tag01">Acme<p>(<span>457</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="tag02" name="tag02" value="Tag 02">
                <label for="tag02">Alladin<p>(<span>4</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="tag03" name="tag03" value="Tag 03">
                <label for="tag03">Trust<p>(<span>4</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="tag04" name="tag04" value="Tag 04">
                <label for="tag04">pqi<p>(<span>4</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="tag05" name="tag05" value="Tag 05">
                <label for="tag05">JBL<p>(<span>4</span>)</p></label>
            </li>
        </ul>
    </div>

    <div class="accordion_box_title">
        <h1 class="title color accordion">Kolor</h1>
        <div class="accordion_box_title--img">
            <img src="./assets/icons/chevron-down-grey.svg" alt="chevron-down-grey" width="12" height="12">
        </div>
    </div>
    <div class="category_filters-slot">
        <ul class="category_filters-slot--list color">
            <li>
                <input type="checkbox" id="color01" name="color01" value="color 01">
                <label for="color01"><div class="color_square white"></div>Biały <p>(<span>457</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="color02" name="color02" value="color 02">
                <label for="color02"><div class="color_square darkblue"></div>Granatowy <p>(<span>457</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="color03" name="color03" value="color 03">
                <label for="color03"><div class="color_square red"></div>Czerwony <p>(<span>4</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="color04" name="color04" value="color 04">
                <label for="color04"><div class="color_square yellow"></div>Żółty <p>(<span>4</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="color05" name="color05" value="color 05">
                <label for="color05"><div class="color_square green"></div>Zielony <p>(<span>4</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="color06" name="color06" value="color 06">
                <label for="color06"><div class="color_square purple"></div>Fioletowy <p>(<span>4</span>)</p></label>
            </li>
            <li>
                <input type="checkbox" id="color07" name="color07" value="color 07">
                <label for="color07"><div class="color_square brown"></div>Brązowy <p>(<span>4</span>)</p></label>
            </li>
        </ul>
    </div>

    <div class="accordion_box_title">
        <h1 class="title price accordion">Cena</h1>
        <div class="accordion_box_title--img">
            <img src="./assets/icons/chevron-down-grey.svg" alt="chevron-down-grey" width="12" height="12">
        </div>
    </div>
    <div class="category_filters-slot">
        <div class="price_filters_box">
            <div class="range-slider">
                <input id="range-input-from" value="120" min="1" max="1000" step="1" type="range" oninput="amount.value=rangeInput.value">
                <input id="range-input-to" value="780" min="1" max="1000" step="1" type="range" onchange="updateTextToInput(this.value);">
            </div>
            <div class="price_filter_container">
                <div class="price_filter_container--from">
                    <input type="number" name="price-zip-from" id="price-zip-from" placeholder="od" min="0">
                </div>
                <div class="price_filter_container--to">
                    <input type="number" name="price-zip-to" id="price-zip-to" placeholder="do" min="0">
                </div>
            </div>
            <div class="set-prices">
                <button>Zastosuj zakres cen</button>
            </div>
        </div>
    </div>
</div>