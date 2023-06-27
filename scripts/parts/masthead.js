var swiper = new Swiper("#mastheadSwiper", {
  direction: "vertical",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 7500,
    disableOnInteraction: true,
  },
  speed: 1500,
  breakpoints: {
    // when window width is >= 320px
    320: {
      direction: "horizontal",
    },
    // when window width is >= 640px
    992: {
      direction: "vertical",
    },
  },
});
