<header data-lang-class="header">
  <div class="header-top-container">
    <div class="container">
      <div class="header-top">
        <i class="fa-solid fa-bars hamburger-icon"></i>
        <div class="opening-hours">
          <i class="fa-regular fa-clock"></i>
          <p class="mb-0"><b>Opening Hours:</b> Mon - Thu: 8AM to 5PM</p>
        </div>
        <div class="location-contact-info">
          <div class="location">
            <i class="fa-solid fa-location-dot"></i>
            <p class="mb-0" data-locale="header-address">Abu dhabi, United Arab Emirates</p>
          </div>
          <div class="social-media">
            <p class="mb-0 text-uppercase fw-bold" data-locale="header-reach-us">Reach us:</p>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
          </div>
          <div class="lang-select">
            <select class="form-select form-select-sm" aria-label="Small select example" id="language-select">
              <option value="en" selected>English</option>
              <option value="ar">اَلْعَرَبِيَّةُ</option>
            </select>
            <img src="https://flagsapi.com/GB/flat/32.png" class="lang-flag" alt="language flag">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="header-nav-container">
    <div class="container">
      <div class="header-nav">
        <div class="logo">
          <img src="./assets/img/logo/logo-89px.png" alt="logo" class="w-100">
          <div>
            <p class="logo-text" data-locale="header-company-name">Arkan Advanced Technical Group</p>
            <p class="logo-small-text" data-locale="header-company-description">Retired Military Personnel Association Project</p>
          </div>
        </div>

        <nav class="header-navbar">
          <i class="fa-solid fa-xmark close-button"></i>
          <ul class="nav-list">
            <li class="nav-item">
              <a href="./index.php" class="nav-link" data-locale="header-link-one">Home</a>
            </li>
            <li class="nav-item">
              <a href="./about.php" class="nav-link" data-locale="header-link-two">About Us</a>
            </li>
            <li class="nav-item">
              <a href="./policies.php" class="nav-link" data-locale="header-link-three">Policies</a>
            </li>
            <li class="nav-item">
              <a href="./construction-services.php" class="nav-link" data-locale="header-link-four">Services</a>
            </li>
            <li class="nav-item">
              <a href="./construction-department.php" class="nav-link" data-locale="header-link-five">Departments</a>
            </li>
            <li class="nav-item d-none d-xl-flex align-items-lg-center gap-2">
              <i class="fa-solid fa-comments"></i>
              <div>
                <p class="mb-0" data-locale="header-call-us">Call Us</p>
                <p class="mb-0">
                 +97125539900
                </p>
              </div>
            </li>
          </ul>

          <div class="h-line"></div>

          <div class="download-brochure">
            <a href="#" data-locale="header-brochure">Download Brochure</a>
            <i class="fa-solid fa-download"></i>
          </div>

          <div class="contact-info w-100">
            <div class="contact-item">
              <div class="contact-item-icon">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="contact-item-content">
                <p data-locale="header-call-us">Call Us</p>
                <span>009712-5539900 | 009712-5539922</span>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon">
                <i class="fa-solid fa-envelopes-bulk"></i>
              </div>
              <div class="contact-item-content">
                <p data-locale="header-opening-hours">Opening Hours</p>
                <span data-locale="header-opening-hours-time">Mon - Thu: 8AM to 5PM </span>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon">
                <i class="fa-solid fa-map-pin"></i>
              </div>
              <div class="contact-item-content">
                <p data-locale="header-address-title">Address</p>
                <span>Abu dhabi, United Arab Emirates</span>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-list .nav-item .nav-link");
    
    navLinks.forEach(link => {
        if (link.href === window.location.href) {
            link.parentElement.classList.add("active");
        }
    });
});


</script>