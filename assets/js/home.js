// ---------------------------------------------
// ----------- TEAM SLIDER ANIMATION -----------
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
// ----------- HERO SLIDER ANIMATION -----------
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

// ---------------------------------------------
// -------------COUNTER ANIMATION---------------
// ---------------------------------------------

function animateCounters(targets, duration) {
  const startTime = performance.now();

  function update() {
    const elapsedTime = performance.now() - startTime;
    const progress = Math.min(elapsedTime / duration, 1);

    targets.forEach((target) => {
      const endValue = parseInt(target.dataset.target, 10);
      const newValue = Math.round(progress * endValue);
      target.textContent =
        newValue + (target.textContent.includes("M") ? "M+" : "+");
    });

    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }

  requestAnimationFrame(update);
}

function handleIntersection(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const counters = entry.target.querySelectorAll(".counter-content p");
      animateCounters(counters, 3000);
      observer.unobserve(entry.target);
    }
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".counter-section");
  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.5,
  });
  sections.forEach((section) => observer.observe(section));
});
