var swiper = new Swiper(".cards-depoimentos", {
  slidesPerView: 2.1,
  spaceBetween: 30,
  speed: 800,
  pagination: {
    el: ".depoimentos .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".btn-next",
    prevEl: ".btn-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      spaceBetween: 16,
    },
    767: {
      slidesPerView: 1.5,
      spaceBetween: 16,
    },
    1200: {
      slidesPerView: 2.1,
      spaceBetween: 30,
    },
  },
})
