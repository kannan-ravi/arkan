<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arkhan</title>

  <link rel="stylesheet" href="./assets/css/global.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
  <link rel="stylesheet" href="./assets/css/header-arabic.css" />
  <link rel="stylesheet" href="./assets/css/service.css" />
  <link rel="stylesheet" href="./assets/css/service-arabic.css" />

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
  <?php include_once './views/header.view.php'; ?>
  <main>
    <div class="loading"></div>
    <section class="hero-section construction">
      <div class="container h-100">
        <div class="hero-container" data-lang-class="services-construction-hero">
          <h1 data-locale="service-construction-hero-title">Construction Services</h1>
        </div>
      </div>
    </section>

    <section class="service-section">
      <div class="container service-wrapper">
        <div class="service-container" data-lang-class="services-construction-content">
          <div class="dropdown-wrapper">
            <button type="button" class="service-dropdown-button" id="dropdown-button" data-locale="service-construction-dropdown-title">
              Services
              <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="service-dropdown-container" id="dropdown-container">
              <ul class="service-dropdown-menu">
                <li class="service-dropdown-list">
                  <a href="./construction-services.php" class="service-dropdown-link active" data-locale="service-construction-dropdown-one">
                    Construction
                  </a>
                </li>
                <li class="service-dropdown-list">
                  <a href="./maintenance-services.php" class="service-dropdown-link" data-locale="service-construction-dropdown-two">
                    Maintenance
                  </a>
                </li>
                <li class="service-dropdown-list">
                  <a href="./facility-services.php" class="service-dropdown-link" data-locale="service-construction-dropdown-three">
                    Facility Management
                    Soft Services
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="service-content-container">
            <div class="service-content-image">
              <img src="./assets/img/service/construction/construction-service-image.jpg" alt="Arkan Construction Service Image">
            </div>
            <div class="service-content">
              <h2 data-locale="service-construction-hero-title">Construction Services</h2>
              <ul class="service-points">
                <li data-locale="service-construction-content-one">
                  <b>Civil Engineering & Construction:</b> We offer a full range of civil works, including foundations, superstructures, block works, paving, and road construction.
                </li>
                <li data-locale="service-construction-content-two">
                  <b>Structural Work:</b> Construction and installation of steel and concrete structures for commercial, residential, and industrial projects.
                </li>
                <li data-locale="service-construction-content-three">
                  <b>Waterproofing & Roofing:</b> Installation and maintenance of waterproofing systems, roof repairs, and replacements.
                </li>
                <li data-locale="service-construction-content-four">
                  <b>Renovations & Fit-Outs:</b> Office and commercial building renovations, including interior fit-outs and remodeling.
                </li>
                <li data-locale="service-construction-content-five">
                  <b>Project Management:</b> End-to-end project management services, from design and planning to execution and completion, ensuring that timelines and budgets are met.
                </li>
                <li data-locale="service-construction-content-six">
                  <b>Building Construction & Site Development:</b> Full-scale construction services for new builds, including site preparation, excavation, and infrastructure development.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include_once './views/service-projects.view.php'; ?>
    <?php include_once './views/service-request.view.php'; ?>
  </main>
  <?php include_once './views/footer.view.php'; ?>

  <!-- BOOTSTRAP SCRIPT -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- MAIN SCRIPT -->
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/department.js"></script>

</body>

</html>