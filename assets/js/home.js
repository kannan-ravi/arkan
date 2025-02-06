// ---------------------------------------------
// ------------- TEAM SLIDER ANIMATION ------------
// ---------------------------------------------
const swiper = new Swiper("#team-slider", {
  direction: "horizontal",
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    992: {
      slidesPerView: 4,
    },
  },
  navigation: {
    nextEl: ".team-next-button",
    prevEl: ".team-prev-button",
  },
});

// ---------------------------------------------
// ------------- HERO SLIDER ANIMATION ------------
// ---------------------------------------------
const heroSwiper = new Swiper("#hero-swiper", {
  direction: "horizontal",
  slidesPerView: 1,
  loop: true,
  spaceBetween: 10,
  autoplay: {
    delay: 5000,
  },
  on: {
    init: function (swiper) {
      swiper.slides[swiper.activeIndex].classList.add("active");
    },
    slideChangeTransitionStart: function (swiper) {
      swiper.slides.forEach((slide) => {
        slide.classList.remove("active");
      });
      swiper.slides[swiper.activeIndex].classList.add("active");
    },
  },
});
