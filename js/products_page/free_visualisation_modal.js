const free_visualisation_modal_open_btn = document.querySelector('.free-visualisation-btn');
const free_visualisation_modal = document.querySelector('.visualisation_modal.free-visualisation');
const free_visualisation_modal_close = document.querySelector('.visualisation_modal.free-visualisation .visualisation_modal--close-icon');

free_visualisation_modal_open_btn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0,0);
    free_visualisation_modal.classList.toggle('show');
    document.body.classList.toggle('open-modal');
});

free_visualisation_modal_close.addEventListener('click', () => {
    free_visualisation_modal.classList.remove('show');
    document.body.classList.remove('open-modal');
});