const free_products_card_modal_open_btn = document.querySelector('.free-visualisation-btn');
const free_products_card_modal = document.querySelector('.products_card_modal.free-visualisation');
const free_products_card_modal_close = document.querySelector('.products_card_modal.free-visualisation .products_card_modal--close-icon');

free_products_card_modal_open_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    free_products_card_modal.classList.toggle('show');
    document.body.classList.toggle('open-modal');
});

free_products_card_modal_close.addEventListener('click', () => {
    free_products_card_modal.classList.remove('show');
    document.body.classList.remove('open-modal');
});