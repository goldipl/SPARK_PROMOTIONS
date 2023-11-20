const person_radio_btn = document.querySelector('.input-slot.radio-btns #person');
const company_radio_btn = document.querySelector('.input-slot.radio-btns #company');
const company_input = document.querySelector('.input-slot.company');
const nip_input = document.querySelector('.input-slot.nip');
const checkbox = document.querySelector('.input-slot.checkbox-slot');
const address_checkbox = document.getElementById('address_checkbox');
const other_address_inputs = document.querySelectorAll('.input-slot.other-address')

person_radio_btn.addEventListener('click', () => {
    if (person_radio_btn.checked == true) {
        company_input.classList.add('hide');
        nip_input.classList.add('hide');
        checkbox.classList.add('hide');
    }
});

company_radio_btn.addEventListener('click', () => {
    if (company_radio_btn.checked == true) {
        company_input.classList.remove('hide');
        nip_input.classList.remove('hide');
        checkbox.classList.remove('hide');
    }
});

address_checkbox.addEventListener('click', () => {
    if (address_checkbox.checked == true) {
        other_address_inputs.forEach(e => {
            e.classList.add('show');
        });
    } else {
        other_address_inputs.forEach(e => {
            e.classList.remove('show');
        });
    };
});
