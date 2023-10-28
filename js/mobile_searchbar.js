const mobile_search = document.querySelector('header #nav .top-nav .search-bar-wrapper .mobile_search-btn');
const nav = document.querySelector('header #nav');
const search_submit = document.getElementById('searchQuerySubmit');
const search_input = document.getElementById('searchQueryInput');

mobile_search.addEventListener('click', () => {
    nav.classList.toggle('show-mobile-search-bar');
    search_submit.classList.toggle('active');
    search_input.classList.toggle('active');
});