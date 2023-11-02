const clients_swiper = new Swiper('.clients_swiper', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 7,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    breakpoints: {
      // when window width is >= 1320px
      1320: {
        slidesPerView: 7,
      },
      // when window width is >= 960px
      960: {
        slidesPerView: 5,
      },
      // when window width is >= 760px
      660: {
        slidesPerView: 4,
      },
      // when window width is >= 200px
      200: {
        slidesPerView: 3,
      },
    },

  });