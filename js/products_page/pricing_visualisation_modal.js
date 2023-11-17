const pricing_visualisation_modal_open_btn = document.querySelector('.products_details__top .pricing_availability_container__btn button');
const pricing_visualisation_modal = document.querySelector('.visualisation_modal.pricing-visualisation');
const pricing_visualisation_modal_close = document.querySelector('.visualisation_modal.pricing-visualisation .visualisation_modal--close-icon');

pricing_visualisation_modal_open_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    pricing_visualisation_modal.classList.toggle('show');
    document.body.classList.toggle('open-modal');
});

pricing_visualisation_modal_close.addEventListener('click', () => {
    pricing_visualisation_modal.classList.remove('show');
    document.body.classList.remove('open-modal');
});

