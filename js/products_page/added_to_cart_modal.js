const added_to_cart_modal_open_btn = document.querySelector('.add-to-cart-btn');
const added_to_cart_modal = document.querySelector('.products_card_modal.added-to-cart');
const added_to_cart_modal_close = document.querySelector('.products_card_modal.added-to-cart .products_card_modal--close-icon');

added_to_cart_modal_open_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    added_to_cart_modal.classList.toggle('show');
    document.body.classList.toggle('open-modal');
});

added_to_cart_modal_close.addEventListener('click', () => {
    added_to_cart_modal.classList.remove('show');
    document.body.classList.remove('open-modal');
});