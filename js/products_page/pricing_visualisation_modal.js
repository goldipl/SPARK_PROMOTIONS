const pricing_products_card_modal_open_btn = document.querySelector('.products_details__top .pricing_availability_container__btn button');
const pricing_products_card_modal = document.querySelector('.products_card_modal.pricing-visualisation');
const pricing_products_card_modal_close = document.querySelector('.products_card_modal.pricing-visualisation .products_card_modal--close-icon');

pricing_products_card_modal_open_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    pricing_products_card_modal.classList.toggle('show');
    document.body.classList.toggle('open-modal');
});

pricing_products_card_modal_close.addEventListener('click', () => {
    pricing_products_card_modal.classList.remove('show');
    document.body.classList.remove('open-modal');
});

