const accordion_title = document.querySelectorAll('.accordion_box_title');
accordion_title.forEach(e => e.addEventListener('click', () => {
    e.nextElementSibling.classList.toggle('hide');
    e.classList.toggle('active');
}));