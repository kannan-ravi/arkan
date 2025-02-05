const swiper = new Swiper("#team-slider", {
  direction: "horizontal",
  slidesPerView: 1,
  loop: true,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    992: {
      slidesPerView: 3,
    },
  },
  navigation: {
    nextEl: ".team-button-next",
    prevEl: ".team-button-prev",
  },
});
