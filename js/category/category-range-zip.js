document.addEventListener('DOMContentLoaded', function () {
    var rangeInputFrom = document.getElementById('range-input-from');
    var rangeInputTo = document.getElementById('range-input-to');
    var inputFrom = document.getElementById('price-zip-from');
    var inputTo = document.getElementById('price-zip-to');

    // Update range when input changes
    inputFrom.addEventListener('input', function () {
        updateRangeFromInput(this.value);
        ensureToInputGreaterThanFromInput();
    });

    inputTo.addEventListener('input', function () {
        updateRangeToInput(this.value);
        ensureToInputGreaterThanFromInput();
    });

    // Update input when range changes
    rangeInputFrom.addEventListener('input', function () {
        updateTextFromInput(this.value);
        ensureToInputGreaterThanFromInput();
    });

    rangeInputTo.addEventListener('input', function () {
        updateTextToInput(this.value);
        ensureToInputGreaterThanFromInput();
    });

    function updateTextFromInput(val) {
        inputFrom.value = val;
    }

    function updateTextToInput(val) {
        inputTo.value = val;
    }

    function updateRangeFromInput(val) {
        rangeInputFrom.value = val;
    }

    function updateRangeToInput(val) {
        rangeInputTo.value = val;
    }

    function ensureToInputGreaterThanFromInput() {
        // Ensure ToInput value is not smaller than FromInput value
        if (parseFloat(inputTo.value) < parseFloat(inputFrom.value)) {
            inputTo.value = inputFrom.value;
            rangeInputTo.value = inputFrom.value;
        }
    }
});