document.addEventListener("DOMContentLoaded", function () {
  // document.querySelector(".loading").style.top = "-100%";
  // -------------------------------------------------
  // ----------- HEADER SCRIPT STARTED ---------------
  // -------------------------------------------------
  const headerOpen = document.querySelector(".hamburger-icon");
  const headerClose = document.querySelector(".close-button");
  const headerNav = document.querySelector(".header-navbar");

  headerOpen.addEventListener("click", () => {
    headerNav.classList.add("active");
  });
  headerClose.addEventListener("click", () => {
    headerNav.classList.remove("active");
  });

  // -------------------------------------------------
  // ----------- HEADER SCRIPT ENDED -----------------
  // -------------------------------------------------

  // -------------------------------------------------
  // --------- TRANSLATION SCRIPT STARTED ------------
  // -------------------------------------------------
  const languageSelect = document.getElementById("language-select");

  languageSelect.addEventListener("change", function () {
    const selectedLanguage = this.value;
    sessionStorage.setItem("selectedLanguage", selectedLanguage);
    loadLanguage(selectedLanguage);
  });

  async function loadLanguage(lang) {
    try {
      const flag = document.querySelector(".lang-flag");
      const response = await fetch(`./locale/${lang}.json`);
      const data = await response.json();
      document.querySelectorAll("[data-locale]").forEach((element) => {
        const key = element.getAttribute("data-locale");
        if (data[key]) {
          element.innerHTML = data[key];
        }
      });

      document.querySelectorAll("[data-input]").forEach((element) => {
        const key = element.getAttribute("data-input");
        if (data[key]) {
          element.placeholder = data[key];
        }
      });

      if (languageSelect.value === "ar") {
        const elements = document.querySelectorAll("[data-lang-class]");
        elements.forEach((element) => {
          const langClass = element.getAttribute("data-lang-class");
          if (langClass) {
            element.classList.add(`arabic`);
          }
        });

        document.querySelectorAll("#marquee-container").forEach((element) => {
          const parent = element.parentNode;
          element.setAttribute("direction", "right");
          const clone = element.cloneNode(true);
          parent.replaceChild(clone, element);
        });

        document.body.classList.add("arabic");
        document.body.classList.remove("english");
        flag.src = "https://flagsapi.com/AE/flat/32.png";
      }

      if (languageSelect.value === "en") {
        const elements = document.querySelectorAll("[data-lang-class]");
        elements.forEach((element) => {
          const langClass = element.getAttribute("data-lang-class");
          if (langClass) {
            element.classList.remove(`arabic`);
          }
        });

        document.querySelectorAll("#marquee-container").forEach((element) => {
          const parent = element.parentNode;
          element.setAttribute("direction", "left");
          const clone = element.cloneNode(true);
          parent.replaceChild(clone, element);
        });

        document.body.classList.add("english");
        document.body.classList.remove("arabic");
        flag.src = "https://flagsapi.com/GB/flat/32.png";
      }
    } catch (error) {
      console.error("Error loading language file:", error);
    } finally {
    }
  }

  const savedLanguage = sessionStorage.getItem("selectedLanguage");
  if (savedLanguage) {
    languageSelect.value = savedLanguage;
    loadLanguage(savedLanguage);
  } else {
    loadLanguage("en");
  }

  // -------------------------------------------------
  // --------- TRANSLATION SCRIPT ENDED --------------
  // -------------------------------------------------

  const loader = document.querySelector(".loading");

  setTimeout(() => {
    loader.classList.add("hide");
  }, 500);

  document.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", function (event) {
      if (this.classList.contains("no-preloader")) {
        return;
      }
      event.preventDefault();
      const href = this.getAttribute("href");

      if (href && !href.startsWith("#")) {
        loader.classList.remove("hide");
        loader.classList.add("show");

        setTimeout(() => {
          window.location.href = href;
        }, 600);
      }
    });
  });
});
