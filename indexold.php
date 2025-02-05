<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arkhan</title>

  <link rel="stylesheet" href="./assets/css/global.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
  <link rel="stylesheet" href="./assets/css/header-arabic.css" />
  <link rel="stylesheet" href="./assets/css/home.css" />
  <link rel="stylesheet" href="./assets/css/home-arabic.css" />

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- SWIPER.JS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<style>
/* Default LTR Animation (Text enters from the left) */
.hero-slider-content {
    color: white;
    position: absolute;
    left: 5%;
    transform: translateY(-50%);
    opacity: 0;
    animation: slideInLeft 0.5s ease-out forwards;
}

/* Apply the top property for mobile view */
@media (max-width: 768px) {
    .hero-slider-content {
        top: 80px;
    }
}
/* Reduce height for mobile view */
@media (max-width: 768px) {
    .hero-slider-image {
        height: calc(60vh - 146px); /* Adjust this value as needed */
    }
}

@keyframes slideInLeft {
    from {
        opacity: 0;
        transform: translateX(-80px); /* Start further left */
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Arabic RTL Animation (Text enters from the right) */
.hero-container.arabic .hero-slider-content {
    left: auto;
    right: 5%; /* Align closer to the right */
    animation: slideInRight 0.5s ease-out forwards;
}

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(80px); /* Start further right */
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
@media (max-width: 768px) {
    .mb-0[data-locale="home-hero-slider-one-para"] {
        color: orange;
    }
}
.explore-content-container {
  margin: 0 20px; /* Equal margin on both sides */
}

@media (max-width: 768px) { 
  .explore-content-container {
    margin: 0 15px; /* Reduce margins slightly for mobile */
  }

  .explore-contact-info {
    gap: 5px; /* Reduce spacing */
  }

  .explore-contact-info-content {
    margin-left: -10px; /* Move number slightly to the left */
  }
   .have {
    margin-left: 6px !important; /* Set margin-left to 6px in mobile view */
  }
 .explore-contact-info-content {
    margin-left: -10px; /* Move content slightly to the left */
  }
 
}

/* Apply styles for .whyus-image-container only for mobile view (≤768px) */
@media (max-width: 768px) {
  .whyus-image-container {
    margin-left: 82px;
    position: relative;
    margin-top: 15rem;
    max-width: 350px;
    width: fit-content;
    min-width: 350px;
  }
  .mv-image-container {
    display: flex
;
    align-items: center;
    position: relative;
    margin-left: 103px;
}
}


@media (max-width: 500px) {
    .whyus-image-container {
        margin-left: 21px !important;
        position: relative;
        margin-top: 15rem;
        max-width: 350px;
        width: fit-content;
        min-width: 350px;
    }
	.mv-image-container {
    margin-left: 10px; /* Adjust margin-left for mobile view */
    display: flex;
    align-items: center;
    position: relative;
  }
}
.counter-content p {
  letter-spacing: 4px; /* Adjust the value as needed */
}
.services-section {
  position: relative;
  background: url('./assets/img/home/hero/box1.png'), 
              url('./assets/img/home/hero/box2.png');
  background-size: 70% 100%, 30% 100%; /* First image 70%, Second image 30% */
  background-position: left, right;
  background-repeat: no-repeat;
  padding: 80px 0; /* Adjust padding as needed */
}

@media (min-width: 768px) {
    .form-content-container {
        margin-bottom: 12rem;
    }
}

@media (min-width: 992px) {
    .form-alternative {
        font-size: 19px;
        text-align: center;
    }
}
.services-title {
    font-weight: bold;
    font-size: 2.6rem;
    margin-bottom: 1rem;
    position: relative;
    width: fit-content;
}
	</style>
</head>

<body>
  <?php include_once './views/header.view.php'; ?>
  <main>
    <div class="loading"></div>
    <section class="hero-section">
      <div class="hero-container" data-lang-class="home-hero">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/img/home/hero/hero-01.png" alt="Hero Slider Image" class="hero-slider-image" />
              <div class="hero-slider-content">
                <p class="mb-0" data-locale="home-hero-slider-one-para">Operating by</p>
                <h1 data-locale="home-hero-slider-one-title">emirates <br> qualified team</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/img/home/hero/hero-02.png" alt="Hero Slider Image" class="hero-slider-image" />
              <div class="hero-slider-content">
                <p class="mb-0" data-locale="home-hero-slider-two-para">construction and maintenance</p>
                <h1 data-locale="home-hero-slider-two-title">for durability</h1>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/img/home/hero/hero-03.png" alt="Hero Slider Image" class="hero-slider-image" />
              <div class="hero-slider-content">
                <p class="mb-0" data-locale="home-hero-slider-three-para">Integrated facility management solutions for</p>
                <h1 data-locale="home-hero-slider-three-title">optimal work <br> environments <br> & increased productivity</h1>
              </div>
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

    <section class="explore-section">
      <div class="container d-lg-flex align-items-lg-center justify-content-lg-center">
        <div class="explore-container" data-lang-class="home-explore">
          <div class="explore-content-container">
            <h2 class="explore-title" data-locale="home-explore-title">
              Integrated <br />
              <span>Facilities Management</span>
            </h2>
            <p class="explore-description" data-locale="home-explore-description-one">With over a decade of experience, we have built a reputation for delivering top-quality solutions across the UAE.</p>
            <p class="explore-description" data-locale="home-explore-description-two">At <b>Arkan Advanced Technical Group L.L.C S.P.C,</b> we are committed to delivering exceptional Construction, Maintenance, and Facility management, solutions bringing over a decade of experience to the UAE’s most prominent national clients.</p>
            <div class="d-flex align-items-center justify-content-between mt-4 explore-button-wrapper">
              <a href="./about.php" class="explore-button text-decoration-none">explore more</a>
              <div class="d-flex align-items-center explore-contact-info gap-2">
                <i class="fa-solid fa-phone"></i>
                <div class="explore-contact-info-content">
                  <p class="mb-0 small have" style="margin-left: -3px;">have a consultant</p>
                  <p class="mb-0">+9710123456789</p>
                </div>
              </div>
            </div>
          </div>

          <div class="d-flex align-items-center justify-content-center explore-image-wrapper">
            <div class="position-relative explore-image-container">
              <div class="explore-image-one-container">
                <img src="./assets/img/home/explore/explore-image-01.png" alt="explore image" class="explore-image-one">
              </div>
              <div class="explore-image-two-container">
                <img src="./assets/img/home/explore/explore-image-02.png" alt="explore image" class="explore-image-two">
              </div>
              <img src="./assets/img/home/explore/explore-arrow.png" alt="Explore Arrow" class="explore-image-three">
              <div class="explore-employee-count">
                <p class="mb-0">1300+</p>
                <span class="text-uppercase" data-locale="home-explore-employees">employees</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="counter-section">
      <div class="container">
        <div class="counter-container" data-lang-class="home-counter">
          <div class="counter-item">
            <div class="counter-icon">
              <img src="./assets/img/home/counter/icon-01.svg" alt="counter icon" />
            </div>
            <div class="counter-content">
              <p>30+</p>
              <span class="text-uppercase" data-locale="home-counter-card-one">high-value Projects <br> ongoing</span>
            </div>
          </div>
          <div class="counter-item">
            <div class="counter-icon">
              <img src="./assets/img/home/counter/icon-02.svg" alt="counter icon" />
            </div>
            <div class="counter-content">
              <p>300M</p>
              <span class="text-uppercase" data-locale="home-counter-card-two">total project <br> worth</span>
            </div>
          </div>
          <div class="counter-item">
            <div class="counter-icon">
              <img src="./assets/img/home/counter/icon-02.svg" alt="counter icon" />
            </div>
            <div class="counter-content">
              <p>17+</p>
              <span class="text-uppercase" data-locale="home-counter-card-three">nationalities <br> work together</span>
            </div>
          </div>
          <div class="counter-item">
            <div class="counter-icon">
              <img src="./assets/img/home/counter/icon-02.svg" alt="counter icon" />
            </div>
            <div class="counter-content">
              <p>1300+</p>
              <span class="text-uppercase" data-locale="home-counter-card-four">total <br> workforce</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="serviceslist-section">
      <div class="container">
        <div class="serviceslist-container" data-lang-class="home-servicelist">
          <div class="position-relative overflow-hidden rounded-3 servicelist-item-container">
            <div class="servicelist-item">
              <div class="servicelist-image">
                <img src="./assets/img/home/servicelist/construction-services.png" alt="construction service image">
              </div>
              <div class="servicelist-card">
                <img src="./assets/img/home/servicelist/construction-services-icon.svg" alt="Arkhan Construction Service Icon">
                <h4 data-locale="home-servicelist-card-one-title">Construction Services</h4>
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="servicelist-more-container">
              <div class="servicelist-more">
                <h5 data-locale="home-servicelist-card-one-title">Construction Services</h5>
                <ul>
                  <li data-locale="home-servicelist-card-one-point-one">
                    Civil Engineering & Construction
                  </li>
                  <li data-locale="home-servicelist-card-one-point-two">
                    Stuctural Work
                  </li>
                  <li data-locale="home-servicelist-card-one-point-three">
                    Waterproofing & Roof
                  </li>
                  <li data-locale="home-servicelist-card-one-point-four">
                    Renovations & Fit Outs
                  </li>
                  <li data-locale="home-servicelist-card-one-point-five">
                    Project Management
                  </li>
                  <li data-locale="home-servicelist-card-one-point-six">
                    Building Construction & Site Developement
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="position-relative overflow-hidden rounded-3 servicelist-item-container">
            <div class="servicelist-item">
              <div class="servicelist-image">
                <img src="./assets/img/home/servicelist/facility-management-soft-services.png" alt="construction service image">
              </div>
              <div class="servicelist-card">
                <img src="./assets/img/home/servicelist/facility-management-soft-services.svg" alt="Arkhan Construction Service Icon">
                <h4 data-locale="home-servicelist-card-two-title">Facility Management Soft Services</h4>
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="servicelist-more-container">
              <div class="servicelist-more">
                <h5 data-locale="home-servicelist-card-two-title">Facility Management Soft Services</h5>
                <ul>
                  <li data-locale="home-servicelist-card-two-point-one">
                    Cleaning & Housekeeping services
                  </li>
                  <li data-locale="home-servicelist-card-two-point-two">
                    Facade glass and Rope access cleaning services
                  </li>
                  <li data-locale="home-servicelist-card-two-point-three">
                    Waste management services
                  </li>
                  <li data-locale="home-servicelist-card-two-point-four">
                    Manpower supply services
                  </li>
                  <li data-locale="home-servicelist-card-two-point-five">
                    Laundry services
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="position-relative overflow-hidden rounded-3 servicelist-item-container">
            <div class="servicelist-item">
              <div class="servicelist-image">
                <img src="./assets/img/home/servicelist/maintenance-services.png" alt="construction service image">
              </div>
              <div class="servicelist-card">
                <img src="./assets/img/home/servicelist/maintenance-services.svg" alt="Arkhan Construction Service Icon">
                <h4 data-locale="home-servicelist-card-three-title">Maintenance Services</h4>
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="servicelist-more-container">
              <div class="servicelist-more">
                <h5 data-locale="home-servicelist-card-three-title">Maintenance Services</h5>
                <ul>
                  <li data-locale="home-servicelist-card-three-point-one">
                    Predictive & Preventive Maintenance
                  </li>
                  <li data-locale="home-servicelist-card-three-point-two">
                    Plumbing
                  </li>
                  <li data-locale="home-servicelist-card-three-point-three">
                    Emergency & Corrective Maintenance
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="whyus-section">
      <div class="container">
        <div class="whyus-container" data-lang-class="home-whyus">
          <div class="whyus-content-container">
            <h2>Why Choose Arkhan Technical group?</h2>
            <p>Our renewable energy solutions not only reduce your energy costs, but they also make a positive impact on the environment. Join us in our mission to create a more sustainable future, one panel at a time.</p>

            <div class="whyus-point-container">
              <div class="whyus-point">
                <div class="whyus-point-icon">
                  <i class="fa-solid fa-user-group"></i>
                </div>
                <div class="whyus-point-content">
                  <h3 data-locale="home-whyus-point-one-title">Commitment to QHSE</h3>
                  <p data-locale="home-whyus-point-one-para">Our team rigorously follows international procedures and specifications, ensuring that every project is completed safely, sustainably, and to the highest quality.</p>
                </div>
              </div>
              <div class="whyus-point">
                <div class="whyus-point-icon">
                  <i class="fa-solid fa-clock"></i>
                </div>
                <div class="whyus-point-content">
                  <h3 data-locale="home-whyus-point-two-title">Proven Track of Success</h3>
                  <p data-locale="home-whyus-point-one-para">Our strategic approach and focus on quality enable us to consistently meet the evolving needs of our clients, helping them achieve their goals.</p>
                </div>
              </div>
            </div>

            <a href="./policies.php" class="whyus-button text-decoration-none">explore more</a>
          </div>

          <div class="d-flex align-items-center whyus-image-wrapper">
            <div class="whyus-image-container">
              <div class="whyus-image-one">
                <img src="./assets/img/home/whyus/whyus-one.png" alt="Arkhan Image">
              </div>
              <div class="whyus-image-two">
                <img src="./assets/img/home/whyus/whyus-two.png" alt="Arkhan Image">
              </div>
              <div class="whyus-experience-box">
                <p>10</p>
                <span>years of Experience</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services-section">
      <div class="container d-lg-flex align-items-lg-center justify-content-lg-center">
        <div class="services-container" data-lang-class="home-service">
          <h2 class="services-title">Services</h2>
         <div class="services-item-container">
  <div class="services-item">
    <img src="./assets/img/home/services/service-card-01.png" alt="" />
    <h3>
      <a href="./construction-services.php" data-locale="home-services-card-one-title" class="text-decoration-none text-light">Construction Services</a>
    </h3>
  </div>
  <div class="services-item">
    <img src="./assets/img/home/services/service-card-02.png" alt="" />
    <h3>
      <a href="./facility-services.php" data-locale="home-services-card-two-title" class="text-decoration-none text-light">Facility Management Soft Services</a>
    </h3>
  </div>
  <div class="services-item">
    <img src="./assets/img/home/services/service-card-03.png" alt="" />
    <h3>
      <a href="./maintenance-services.php" data-locale="home-services-card-three-title" class="text-decoration-none text-light">Maintenance Services</a>
    </h3>
  </div>
</div>

        </div>
      </div>
    </section>

    <section class="qhse-section">
      <div class="container d-flex justify-content-center">
        <div class="qhse-container" data-lang-class="home-qhse">
          <div class="d-flex align-items-center justify-content-center">
            <p class="qhse-badge" data-locale="home-qhse-badge">qhse standards</p>
          </div>

          <p class="qhse-description" data-locale="home-qhse-description">
            At Arkan Advanced Technical Group L.L.C S.P.C, we prioritise compliance with national and international regulations, promote ecological sustainability,  and focus on the health and safety of our employees and stakeholders.
          </p>

          <div class="qhse-items-container">
            <div class="qhse-item">
              <i class="fa-regular fa-circle-right"></i>
              <p data-locale="home-qhse-card-one">
                Comply with National and International Standards.
              </p>
            </div>
            <div class="qhse-item">
              <i class="fa-regular fa-circle-right"></i>
              <p data-locale="home-qhse-card-two">
                Ensure Health and Safety of Employees.
              </p>
            </div>
            <div class="qhse-item">
              <i class="fa-regular fa-circle-right"></i>
              <p data-locale="home-qhse-card-three">
                Promote Ecological Sustainability through Waste Reduction.
              </p>
            </div>
            <div class="qhse-item">
              <i class="fa-regular fa-circle-right"></i>
              <p data-locale="home-qhse-card-four">
                Prevent Pollution and Reduce Workplace Risks.
              </p>
            </div>
            <div class="qhse-item">
              <i class="fa-regular fa-circle-right"></i>
              <p data-locale="home-qhse-card-five">
                Continually Improve QHSE Management System.
              </p>
            </div>
            <div class="qhse-item">
              <i class="fa-regular fa-circle-right"></i>
              <p data-locale="home-qhse-card-six">
                Provide High-Quality Products and Services.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="help-section">
      <div class="container d-lg-flex align-items-lg-center justify-content-lg-center">
        <div class="help-container">
          <div class="help-inner-container">
            <div class="help-heading">
              <h3>Arkan</h3>
              <p>Advanced <br class="d-lg-none"> Technical Group</p>
            </div>
            <img src="./assets/img/home/help/construction-worker-image.png" alt="Construction Worker Image" class="help-construction-image">
            <div class="help-call-wrapper">
              <div class="help-call-container">
                <div class="help-icon">
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div class="help-text">
                  <p class="help-text-desc">Need help? Call Us now</p>
                  <p class="help-text-number">+971012345678</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-section">
      <img src="./assets/img/home/faq/left-decoration.png" alt="Decoration Image" class="faq-decoration left" />
      <img src="./assets/img/home/faq/right-decoration.png" alt="Decoration Image" class="faq-decoration right" />
      <div class="container d-lg-flex align-items-lg-center justify-content-lg-center">
        <div class="faq-container">
          <div class="faq-content-container">
            <p class="faq-badge">Frequently Asked Questions</p>
            <h2 class="faq-title">do you have <br> any questions? <br> find answers <br> here</h2>
            <p class="faq-description">Some Frequently Asked Questions About Arkan Advanced Technical Group</p>
          </div>
          <div class="faq-questions-container">
            <div class="accordion faq-accordion" id="accordionExample">
              <div class="accordion-item faq-accordion-item">
                <h2 class="accordion-header faq-accordion-header">
                  <button class="accordion-button faq-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse01" aria-expanded="true" aria-controls="collapse01">
                    Lorem
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    This is the answer
                  </div>
                </div>
              </div>
              <div class="accordion-item faq-accordion-item">
                <h2 class="accordion-header faq-accordion-header">
                  <button class="accordion-button faq-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse02" aria-expanded="true" aria-controls="collapse02">
                    Lorem
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    This is the answer
                  </div>
                </div>
              </div>
              <div class="accordion-item faq-accordion-item">
                <h2 class="accordion-header faq-accordion-header">
                  <button class="accordion-button faq-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse03" aria-expanded="true" aria-controls="collapse03">
                    Lorem
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    This is the answer
                  </div>
                </div>
              </div>
              <div class="accordion-item faq-accordion-item">
                <h2 class="accordion-header faq-accordion-header">
                  <button class="accordion-button faq-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse04" aria-expanded="true" aria-controls="collapse04">
                    Lorem
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    This is the answer
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mv-section">
      <div class="container">
        <div class="mv-wrapper" data-lang-class="home-mv">
          <div class="mv-container">
            <div class="mv-content-container mission">
              <h3 class="mv-title" data-locale="home-mission-title">Our Mission</h3>
              <p class="mv-text" data-locale="home-mission-para">Our mission is to provide exceptional, integrated solutions that enhance the efficiency, safety, and sustainability of the facilities and infrastructure we manage. We aim to deliver superior value to our esteemed clients through innovative services, reliable execution, and a customer-centric approach. With a focus on professionalism and excellence, we strive to build long-term partnerships based on trust, quality, and accountability, while fostering a safe and sustainable future for our employees, clients, and communities.</p>
            </div>
            <div class="mv-image-container mission">
              <div class="position-relative">
                <div class="overflow-hidden rounded-2">
                  <img src="./assets/img/home/mission-vision/mv-image.png" alt="Arkan Mission & Vision" class="mv-image">
                </div>
                <img src="./assets/img/home/mission-vision/mv-leaf.png" alt="Leaf Image" class="mv-art mission" />
              </div>
            </div>
          </div>
          <div class="mv-container">
            <div class="mv-content-container vision">
              <h3 class="mv-title" data-locale="home-vision-title">Our Vision</h3>
              <p class="mv-text" data-locale="home-vision-para">At Arkan Advanced Technical Group L.L.C S.P.C, our vision is to be the leading provider of innovative and sustainable solutions in Construction, Maintenance & Facility Management Soft Services. We are committed to exceeding stakeholder expectations by delivering optimal value in every product and service. Our dedication to upholding the highest standards of quality, safety, environmental responsibility, and community engagement drives us to continuously elevate our performance and positively impact the industries we serve.</p>
            </div>
            <div class="mv-image-container vision">
              <div class="position-relative">
                <div class="overflow-hidden rounded-2">
                  <img src="./assets/img/home/mission-vision/mv-image.png" alt="Arkan Mission & Vision" class="mv-image">
                </div>
                <img src="./assets/img/home/mission-vision/mv-rocket.png" alt="Leaf Image" class="mv-art vision" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="team-section position-relative">
      <img src="./assets/img/home/faq/left-decoration.png" alt="Decoration Image" class="faq-decoration left" />
      <img src="./assets/img/home/faq/right-decoration.png" alt="Decoration Image" class="faq-decoration right" />
      <div class="container">
        <div class="team-container arabic" data-lang-class="home-team">
          <div class="d-flex align-items-center justify-content-center">
            <p class="team-badge">meet our team</p>
          </div>
          <h3 class="team-title">Meet the key team members</h3>

          <div class="team-slider-container">
            <div class="swiper position-relative" id="team-slider">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <div class="d-flex justify-content-center">
                    <div class="team-card">
                      <img src="https://api.slingacademy.com/public/sample-users/11.png" alt="Team Member Image">
                      <div class="team-info">
                        <p class="team-name" data-locale="home-team-card-one-name">Khalaf Rashed Al Qubaisi</p>
                        <p class="team-position" data-locale="home-team-card-one-position">Brigadier General</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex justify-content-center">
                    <div class="team-card">
                      <img src="https://api.slingacademy.com/public/sample-users/11.png" alt="Team Member Image">
                      <div class="team-info">
                        <p class="team-name" data-locale="home-team-card-two-name">Hamad Mohammed Al Zaabi</p>
                        <p class="team-position" data-locale="home-team-card-two-position">Brigadier General</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex justify-content-center">
                    <div class="team-card">
                      <img src="https://api.slingacademy.com/public/sample-users/11.png" alt="Team Member Image">
                      <div class="team-info">
                        <p class="team-name" data-locale="home-team-card-three-name">Abdullah Ahmed Obaid Al Ali</p>
                        <p class="team-position" data-locale="home-team-card-three-position">Colonel</p>
                      </div>
                    </div>
                  </div>
                </div>
				<div class="swiper-slide">
                  <div class="d-flex justify-content-center">
                    <div class="team-card">
                      <img src="https://api.slingacademy.com/public/sample-users/11.png" alt="Team Member Image">
                      <div class="team-info">
                        <p class="team-name" data-locale="home-team-card-four-name">Ahmed Muhammad Rasul Al
                        Harmoudi</p>
                        <p class="team-position" data-locale="home-team-card-four-position">Colonel</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="d-flex justify-content-center">
                    <div class="team-card">
                      <img src="https://api.slingacademy.com/public/sample-users/11.png" alt="Team Member Image">
                      <div class="team-info">
                        <p class="team-name" data-locale="home-team-card-five-name">Ali Muhammad Saeed Al-Amimi</p>
                        <p class="team-position" data-locale="home-team-card-five-position">Major</p>
                      </div>
                    </div>
                  </div>
                </div>
				 <div class="swiper-slide">
                  <div class="d-flex justify-content-center">
                    <div class="team-card">
                      <img src="https://api.slingacademy.com/public/sample-users/11.png" alt="Team Member Image">
                      <div class="team-info">
                        <p class="team-name" data-locale="home-team-card-six-name">Mohammad Al
                        Marzooqi</p>
                        <p class="team-position" data-locale="home-team-card-six-position">General Manager</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- If we need navigation buttons -->
              <div class="team-prev-button">
                <i class="fa-solid fa-chevron-left"></i>
              </div>
              <div class="team-next-button">
                <i class="fa-solid fa-chevron-right"></i>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="form-section">
      <div class="container">
        <div class="form-container">
          <div class="quote-form-container">
            <h3>Request Quote Form</h3>
            <form action="" class="request-form">
              <p class="form-small-text">Personal Information</p>
              <input type="text" placeholder="Full Name" name="full-name" id="full-name" class="form-input" />
              <div class="row">
                <div class="col-6">
                  <input type="email" name="email" id="email" placeholder="Email" class="form-input">
                </div>
                <div class="col-6">
                  <input type="number" name="phone" id="phone" placeholder="Phone" class="form-input">
                </div>
              </div>
              <input type="text" placeholder="Company Name" name="company-name" id="company-name" class="form-input">
              <textarea name="your-message" id="your-message" placeholder="Your Message" class="form-input"></textarea>
              <button type="submit" class="form-submit">Get A Quote <span>
                  <i class="fa-solid fa-check"></i>
                </span></button>
            </form>
            <p class="form-alternative">Or Give us a call +9710123456789</p>
          </div>
          <div class="form-content-container">
            <h3><span class="fw-bold">REDEFINING</span> <br> Business <br> <span class="fw-semibold">Services</span></h3>
            <div class="form-content-icon">
              <i class="fa-solid fa-arrow-up-long"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="department-section" data-lang-class="home-department">
      <div class="department-empty-div"></div>
      <div class="container department-wrapper">
        <div class="department-container">
          <h2 class="department-title pt-4" data-locale="home-department-title">
            Our Departments
          </h2>

          <p class="department-description" data-locale="home-department-description">
            Our dedicated departments work in synergy to ensure the highest standards of quality, safety, and efficiency across all projects. Each team brings specialized expertise to deliver reliable, sustainable solutions for our clients.
          </p>

          <div class="department-points-container">
            <div class="department-point">
              <div class="department-point-title" >
                <img src="./assets/img/home/department/department-points-icon.png" alt="Title Icon">
                <h3 data-locale="home-department-point-one-title">Construction & Maintenance</h3>
              </div>
              <p class="department-point-description" data-locale="home-department-point-one-description">
                Delivering quality from start to finish, our team ensures precise construction and reliable maintenance, guaranteeing lasting value and operational excellence for every project.
              </p>
            </div>
            <div class="department-point">
              <div class="department-point-title">
                <img src="./assets/img/home/department/department-points-icon.png" alt="Title Icon">
                <h3 data-locale="home-department-point-two-title">Finance</h3>
              </div>
              <p class="department-point-description" data-locale="home-department-point-two-description">
                This Department manages our financial strategy and budgeting, ensuring sustainable growth and meticulous resource allocation for optimal operational efficiency.
              </p>
            </div>
            <div class="department-point">
              <div class="department-point-title">
                <img src="./assets/img/home/department/department-points-icon.png" alt="Title Icon">
                <h3 data-locale="home-department-point-three-title">Accommodation & Transportation</h3>
              </div>
              <p class="department-point-description" data-locale="home-department-point-three-description">
                Dedicated to smooth logistics, this department handles accommodation & transportation needs, ensuring efficient mobility and comfortable lodging for our workforce.
              </p>
            </div>
            <div class="department-point">
              <div class="department-point-title">
                <img src="./assets/img/home/department/department-points-icon.png" alt="Title Icon">
                <h3 data-locale="home-department-point-four-title">Facility management soft services</h3>
              </div>
              <p class="department-point-description" data-locale="home-department-point-four-description">
                Our Soft Services team specializes in creating a clean, safe, and well-maintained environment, focusing on enhancing the comfort and productivity of your spaces.
              </p>
            </div>
            <div class="department-point">
              <div class="department-point-title">
                <img src="./assets/img/home/department/department-points-icon.png" alt="Title Icon">
                <h3 data-locale="home-department-point-five-title">Human Resource</h3>
              </div>
              <p class="department-point-description" data-locale="home-department-point-five-description">
                Our Department is committed to fostering a productive & supportive workplace, handling recruitment and performance management to empower our team.
              </p>
            </div>
            <div class="department-point">
              <div class="department-point-title">
                <img src="./assets/img/home/department/department-points-icon.png" alt="Title Icon">
                <h3 data-locale="home-department-point-six-title">Procurement</h3>
              </div>
              <p class="department-point-description" data-locale="home-department-point-six-description">
                This Department secures high-quality materials and services, building reliable partnerships and optimizing resources to support project success & cost-effectiveness.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include_once './views/footer.view.php'; ?>

  <!-- BOOTSTRAP SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- SWIPER.JS SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- MAIN SCRIPT -->
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/home.js"></script>
</body>
</html>