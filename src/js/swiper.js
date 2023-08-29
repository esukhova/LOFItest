"use strict";

new Swiper(".versions__swiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },

  slideToClickedSlide: true,

  slidesPerView: "auto",
  spaceBetween: 10,

  keyboard: {
    enabled: true,
  },
  mousewheel: {
    sensitivity: 1,
  },

  breakpoints: {
    320: {
      centeredSlides: true,
      slidesPerView: 1,
      freeMode: false,
    },
    480: {
      centeredSlides: false,
      slidesPerView: "auto",
      freeMode: true,
    },
    992: {},
  },
});
