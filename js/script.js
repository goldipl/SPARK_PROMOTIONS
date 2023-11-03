const hamburger = document.querySelector('header #nav .top-nav .hamburger');
const menu = document.querySelector('header #nav .bottom-nav');
const menu_li = document.querySelectorAll('header #nav .bottom-nav .left-container ul li .bottom-nav-sublist > ul > li');
const footer_year = document.querySelector('.footer_bottom span');
const header = document.querySelector('body header');
const search_mobile_bar = document.querySelector('header #nav .top-nav .search-bar-wrapper');
const bottom_nav_links = document.querySelectorAll('header #nav .bottom-nav .left-container ul li.bottom-nav-links');
const main_wrapper = document.querySelector('body #main-wrapper');
const top_nav = document.querySelector('header #nav .top-nav');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    menu.classList.toggle('active');
    header.classList.toggle('menu-open');
    search_mobile_bar.classList.toggle('z-index');
    window.scrollTo(0,0);
});

menu_li.forEach(e => e.addEventListener('click', () => {
    e.classList.toggle('active');
}));

footer_year.innerHTML = new Date().getFullYear();

bottom_nav_links.forEach(e => e.addEventListener('mouseenter', () => {
    main_wrapper.classList.toggle('dark-background');
}));

main_wrapper.addEventListener('mouseenter', () => {
    main_wrapper.classList.remove('dark-background');
    top_nav.classList.remove('dark-background');
});