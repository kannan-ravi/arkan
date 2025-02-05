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
    <section class="hero-section maintenance">
      <div class="container h-100">
        <div class="hero-container" data-lang-class="services-maintenance-hero">
          <h1 data-locale="service-maintenance-hero-title">Maintenance Services</h1>
        </div>
      </div>
    </section>

    <section class="service-section">
      <div class="container service-wrapper">
        <div class="service-container" data-lang-class="services-maintenance-content">
          <div class="dropdown-wrapper">
            <button type="button" class="service-dropdown-button" id="dropdown-button" data-locale="service-construction-dropdown-title">
              Services
              <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="service-dropdown-container" id="dropdown-container">
              <ul class="service-dropdown-menu">
                <li class="service-dropdown-list">
                  <a href="./construction-services.php" class="service-dropdown-link" data-locale="service-construction-dropdown-one">
                    Construction
                  </a>
                </li>
                <li class="service-dropdown-list">
                  <a href="./maintenance-services.php" class="service-dropdown-link active" data-locale="service-construction-dropdown-two">
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
              <img src="./assets/img/service/maintenance/maintenance-image.jpg" alt="Arkan Maintenance Service Image">
            </div>
            <div class="service-content">
              <h2 data-locale="service-maintenance-hero-title">Construction Services</h2>
              <ul class="service-points">
                <li data-locale="service-maintenance-content-one">
                  <b>Predictive & Preventive Maintenance:</b> Predictive services to minimize downtime, improve system reliability, and extend equipment lifespan.
                </li>
                <li data-locale="service-maintenance-content-two">
                  <b>Condition Monitoring:</b> Continuous monitoring of plant systems to detect early signs of failure, ensuring minimal disruption to operations.
                </li>
                <li data-locale="service-maintenance-content-three">
                  <b>Emergency & Corrective Maintenance:</b> Rapid response to breakdowns with efficient corrective measures to restore normal operations.
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