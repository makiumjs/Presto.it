// import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

const swiper = new Swiper('.swiper', {

    slidesPerView: 1,
    spaceBetween: 0,
  
    // Pagination
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // Breakpoints
    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1400: {
            slidesPerView: 3,
            spaceBetween: 0,
        },
    },

});