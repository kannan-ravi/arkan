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
// ------------- CAROUSAL ANIMATION ------------
// ---------------------------------------------

document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.getElementById("carouselExampleSlidesOnly");

  carousel.addEventListener("slide.bs.carousel", function (event) {
    // Remove animation class from all slides
    document.querySelectorAll(".hero-slider-content").forEach(content => {
      content.style.opacity = "0";
    });

    // Add animation class to the new active slide
    const nextSlide = event.relatedTarget;
    const nextContent = nextSlide.querySelector(".hero-slider-content");

    if (nextContent) {
      setTimeout(() => {
        nextContent.style.opacity = "1";
      }, 200); // Small delay to ensure smooth transition
    }
  });
});
