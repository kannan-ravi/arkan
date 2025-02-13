<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arkhan</title>

  <link rel="stylesheet" href="./assets/css/global.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
  <link rel="stylesheet" href="./assets/css/header-arabic.css" />
  <link rel="stylesheet" href="./assets/css/about.css" />
  <link rel="stylesheet" href="./assets/css/about-arabic.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- SWIPER.JS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
  <?php include_once './views/header.view.php'; ?>
  <main>
    <div class="loading"> <img src="./assets/img/logo/logo-89px.png" alt=""></div>
    <section class="hero-section">
      <div class="container h-100">
        <div class="hero-container" data-lang-class="about-hero">
          <h1 data-locale="about-hero-title">About Us</h1>
        </div>
      </div>
    </section>

    <section class="who-section" data-lang-class="about-who">
      <div class="who-title">
        <h2 data-locale="about-who-title">Who We Are</h2>
      </div>
      <div class="container">
        <div class="who-container">
          <div class="who-content-container">
            <p data-locale="about-para-one">We are a specialized group providing comprehensive solutions in Construction, Maintenance and Facility Management Soft Services across the UAE. With over 10 years of experience, we offer innovative and effective services to meet the needs of clients across various sectors.</p>
            <p data-locale="about-para-two">We are committed to delivering a highly efficient operational environment through a dedicated team focused on quality, safety, and sustainable performance. Our services include the management of electrical and mechanical systems, facility and equipment maintenance, as well as the execution of construction projects from design to operation.</p>
            <p data-locale="about-para-three">We are proud of our partnerships with the General Command of the Armed Forces. Ensuring the highest levels of satisfaction in every project we undertake.</p>
          </div>
          <div class="who-image-container">
            <div class="image-wrapper">
              <img src="./assets/img/about/who/who-image.jpg" alt="Who is Arkan">
            </div>
          </div>
        </div>
      </div>

      <marquee behavior="scroll" class="marquee" direction="left" id="marquee-container">
        <div class="marquee-content">
          <p class="mb-0">
            <i class="fa-solid fa-circle-check"></i>
            <span data-locale="marquee-text-one">Honesty & integrity</span>
          </p>
          <p class="mb-0">
            <i class="fa-solid fa-circle-check"></i>
            <span data-locale="marquee-text-two">Commitment & Dedication</span>
          </p>
          <p class="mb-0">
            <i class="fa-solid fa-circle-check"></i>
            <span data-locale="marquee-text-three">Fairness & Competence</span>
          </p>
          <p class="mb-0">
            <i class="fa-solid fa-circle-check"></i>
            <span data-locale="marquee-text-four">Teamwork & Collaboration</span>
          </p>
          <p class="mb-0">
            <i class="fa-solid fa-circle-check"></i>
            <span data-locale="marquee-text-five">Humility & Mutual Respect</span>
          </p>
          <p class="mb-0">
            <i class="fa-solid fa-circle-check"></i>
            <span data-locale="marquee-text-six">Care & Social Responsibility</span>
          </p>
        </div>
      </marquee>
    </section>

    <section class="mv-section">
      <div class="container">
        <div class="mv-container" data-lang-class="about-mv">
          <div class="mv-single-container">
            <div class="mv-icon">
              <i class="fa-solid fa-rocket"></i>
            </div>
            <div class="mv-content-container">
              <div class="mv-art"></div>
              <div class="mv-content">
                <h3 data-locale="about-vision-title">Vision</h3>
                <p data-locale="about-vision-text">At Arkan Advanced Technical Group L.L.C S.P.C, our vision is to be the leading provider of innovative and sustainable solutions in facility management soft services, construction & maintenance. We are committed to exceeding stakeholder expectations by delivering optimal value in every product and service. Our dedication to upholding the highest standards of quality, safety, environmental responsibility, and community engagement drives us to continuously elevate our performance and positively impact the industries we serve.</p>
              </div>
            </div>
          </div>
          <div class="mv-single-container">
            <div class="mv-icon">
              <i class="fa-brands fa-envira"></i>
            </div>
            <div class="mv-content-container">
              <div class="mv-art"></div>
              <div class="mv-content">
                <h3 data-locale="about-mission-title">Mission</h3>
                <p data-locale="about-mission-text">Our mission is to provide exceptional, integrated solutions that enhance the efficiency, safety, and sustainability of the facilities and infrastructure we manage. We aim to deliver superior value to our esteemed clients through innovative services, reliable execution, and a customer-centric approach. With a focus on professionalism and excellence, we strive to build long-term partnerships based on trust, quality, and accountability, while fostering a safe and sustainable future for our employees, clients, and communities.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="counter-section">
      <div class="container">
        <div class="counter-container" data-lang-class="about-counter">
          <div class="counter-item">
            <h3 data-locale="about-counter-one">30+</h3>
            <p data-locale="about-counter-one-description">high-value <br> projects ongoing</p>
          </div>
          <div class="counter-item">
            <h3 class="counter-title-small" data-locale="about-counter-two-title">AED 300 million+</h3>
            <p data-locale="about-counter-two-description">total projects <br> worth</p>
          </div>
          <div class="counter-item">
            <h3 data-locale="about-counter-two">1300+</h3>
            <p data-locale="about-counter-three-description">total <br> workforce</p>
          </div>
          <div class="counter-item">
            <h3 data-locale="about-counter-three">17+</h3>
            <p data-locale="about-counter-four-description">nationalities <br> work together</p>
          </div>
        </div>
      </div>
      </div>
    </section>

    <!--<section class="team-section">
      <div class="team-container" data-lang-class="about-team">
        <div class="team-title">
          <h2 data-locale="about-team-title">Meet Our Executive Team</h2>
        </div>
        <div class="team-slider-container">


          <!-- Slider main container -->
    <!--<div class="swiper" id="team-slider">
            <!-- Additional required wrapper -->
    <!--<div class="swiper-wrapper">
              <!-- Slides -->
    <!--<div class="swiper-slide">
                <div class="d-flex align-items-center justify-content-center team-card-wrapper">
                  <div class="team-card">
                    <div class="team-card-image"></div>
                    <div class="team-card-info">
                      <p class="team-position" data-locale="about-team-card-one-position">Chairman RMPA-</p>
                      <p class="team-name" data-locale="about-team-card-one-name">Khalaf Rashed Nasser Al
                        Qubaisi</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="d-flex align-items-center justify-content-center team-card-wrapper">
                  <div class="team-card">
                    <div class="team-card-image"></div>
                    <div class="team-card-info">
                      <p class="team-position" data-locale="about-team-card-two-position">Brigadier General</p>
                      <p class="team-name" data-locale="about-team-card-two-name">Hamad Mohammed Nasser Al Zaabi</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="d-flex align-items-center justify-content-center team-card-wrapper">
                  <div class="team-card">
                    <div class="team-card-image"></div>
                    <div class="team-card-info">
                      <p class="team-position" data-locale="about-team-card-three-position">Colonel</p>
                      <p class="team-name" data-locale="about-team-card-three-name">Abdullah Ahmed Obaid Al
                        Ali</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="d-flex align-items-center justify-content-center team-card-wrapper">
                  <div class="team-card">
                    <div class="team-card-image"></div>
                    <div class="team-card-info">
                      <p class="team-position" data-locale="about-team-card-four-position">Colonel</p>
                      <p class="team-name" data-locale="about-team-card-four-name">Ahmed Muhammad Rasul Al
                        Harmoudi</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="d-flex align-items-center justify-content-center team-card-wrapper">
                  <div class="team-card">
                    <div class="team-card-image"></div>
                    <div class="team-card-info">
                      <p class="team-position" data-locale="about-team-card-five-position">Major</p>
                      <p class="team-name" data-locale="about-team-card-five-name">Ali Muhammad Saeed Al
                        Amimi</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="d-flex align-items-center justify-content-center team-card-wrapper">
                  <div class="team-card">
                    <div class="team-card-image"></div>
                    <div class="team-card-info">
                      <p class="team-position" data-locale="about-team-card-six-position">General Manager</p>
                      <p class="team-name" data-locale="about-team-card-six-name">Mohammad Al
                        Marzooqi</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="team-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
          <div class="team-button-next"><i class="fa-solid fa-chevron-right"></i></div>
        </div>
      </div>
    </section>-->



    <section class="speecher-section" data-lang-class="about-speecher">
      <!--<div class="speecher-title">
        <h2 data-locale="about-speecher-title">General Manager's Speech</h2>
      </div>-->
      <div class="team-title">
        <h2 data-locale="about-team-title">Meet Our Executive Team</h2>
      </div>
      <div class="container">
        <div class="speecher-container">
          <div class="speecher-image-container">
            <div class="speecher-inner-image">
              <div class="speecher-image"><img src="./assets/img/about/speecher/about-speecher-general-manager.jpeg" alt="Arkan Technical Team General Manager Mohamed Matouq Farhani Almarzooqi"></div>
              <div class="speecher-info">
                <p class="speecher-position" data-locale="about-speecher-position">General Manager</p>
                <p class="speecher-name" data-locale="about-speecher-name">Mohamed Matouq Farhani Almarzooqi</p>
              </div>
            </div>
          </div>
          <div class="speecher-content-container">
            <p data-locale="about-speecher-content-one">We are Arkan Advanced Technical Group, and in alignment with the vision of "We the UAE 2031" of His Highness Sheikh Mohamed bin Zayed Al Nahyan, President of the UAE may God protect and bless him, we embark on our developmental journey for the next decade that focusing on investment and development aspects. Through this vision, the country aims to strengthen its position as a global partner, an attractive and influential economic hub.</p>
            <p data-locale="about-speecher-content-two">We take pride in being trusted providers of innovative and sustainable solutions in the fields of constructions, general maintenance, and facilities management services. Our goal is to deliver continuous excellence, ensuring our clients and partners experience the highest levels of quality and professionalism in everything we do.</p>
            <p data-locale="about-speecher-content-three">With a passion for continuous improvement and a commitment to achieving outstanding results, we foster a culture of collaboration, responsibility, and respect, empowering our teams to deliver reliable and tailored solutions that meet the unique needs of each client.</p>
            <p data-locale="about-speecher-content-four">Our values — honesty, integrity, teamwork, and social responsibility — form the foundation of our operations. These principles guide us in building meaningful relationships and creating lasting value for our clients and the communities we support.</p>
            <p data-locale="about-speecher-content-five">As we look to the future, we remain committed to setting new standards of excellence and contributing to a safer, more sustainable world. Together, we will continue to innovate, grow, and leave a positive impact on every project we undertake.</p>
            <p class="speecher-regards" data-locale="about-speecher-regards-one">With sincere regards,</p>
            <p class="speecher-regards" data-locale="about-speecher-name">Mohamed Matouq Farhani Almarzooqi</p>
            <p class="speecher-regards" data-locale="about-speecher-position">General Manager</p>
            <p class="speecher-regards" data-locale="header-company-name">Arkan Advanced Technical Group</p>
          </div>
        </div>
      </div>
    </section>

    <!-- THIS IS HIDDEN -->
    <!-- <section class="contact-section">
      <a href="" data-locale="about-contact-button">contact us</a>
    </section> -->
  </main>
  <?php include_once './views/footer.view.php'; ?>

  <!-- BOOTSTRAP SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- SWIPER.JS SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- MAIN SCRIPT -->
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/about.js"></script>
</body>

</html>