const arrow_right = document.querySelector('.the_tabs__arrow-right');
const arrow_left = document.querySelector('.the_tabs__arrow-left');
const tabs_elements = 5;
const tabs_elements_minus_one = tabs_elements - 1;
let i = 1;

arrow_right.addEventListener('click', () => {
    if (i <= tabs_elements_minus_one) {
        i++;
    }
    element = `tab_${i}`;
    document.getElementById(element).checked = true;
})

arrow_left.addEventListener('click', () => {
    if (i >= 0 && i <= tabs_elements) {
        i = Math.max(1, i - 1);
    }
    element = `tab_${i}`;
    document.getElementById(element).checked = true;
})