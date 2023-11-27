document.addEventListener('DOMContentLoaded', function () {
    var rangeInputFrom = document.getElementById('range-input-from');
    var rangeInputTo = document.getElementById('range-input-to');
    var inputFrom = document.getElementById('price-zip-from');
    var inputTo = document.getElementById('price-zip-to');

    rangeInputFrom.addEventListener('input', function () {
        updateTextFromInput(this.value);
    });

    rangeInputTo.addEventListener('input', function () {
        updateTextToInput(this.value);
    });

    function updateTextFromInput(val) {
        inputFrom.value = val;
    }

    function updateTextToInput(val) {
        inputTo.value = val;
    }
});