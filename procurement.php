<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Human Resources Department</title>

  <link rel="stylesheet" href="./assets/css/global.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
  <link rel="stylesheet" href="./assets/css/header-arabic.css" />
  <link rel="stylesheet" href="./assets/css/department.css" />
  <link rel="stylesheet" href="./assets/css/department-arabic.css" />

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include_once './views/header.view.php'; ?>
  <main>
    <div class="loading"><img src="./assets/img/logo/logo-89px.png" alt="loading..."></div>
    <section class="hero-section">
      <div class="hero-section">
        <div class="container position-relative h-100">
          <div class="hero-container" data-lang-class="dep-construction-hero">
            <h1 data-locale="dep-procurement-hero-title">Accommodation & Transportation</h1>
            <nav aria-label="hero-breadcrumb">
              <ol class="hero-breadcrumb">
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-one">Home</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-two">Department</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item active" aria-current="page" data-locale="dep-procurement-hero-title">Accommodation & Transportation
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="department-section">
      <div class="container">
        <div class="department-container" data-lang-class="dep-construction-department">
          <div class="dropdown-wrapper">
            <button class="department-dropdown-button" id="dropdown-button" data-locale="dep-construction-dropdown-title">
              Departments
              <i class="fa-solid fa-chevron-right"></i>
            </button>
            <div class="department-dropdown-container" id="dropdown-container">
              <ul class="department-dropdown-menu">
                <li class="department-dropdown-list">
                  <a href="./construction-department.php" class="department-dropdown-link">
                    <div class="department-dropdown-title">
                      <i class="fa-solid fa-wrench"></i>
                      <span data-locale="dep-construction-dropdown-one">Construction & Maintenance</span>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </li>
                <li class="department-dropdown-list">
                  <a href="./facility-management.php" class="department-dropdown-link">
                    <div class="department-dropdown-title">
                      <i class="fa-solid fa-toolbox"></i>
                      <span data-locale="dep-construction-dropdown-two">Facility Management - Soft Services</span>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </li>
                <li class="department-dropdown-list">
                  <a href="./finance-department.php" class="department-dropdown-link">
                    <div class="department-dropdown-title">
                      <i class="fa-solid fa-calculator"></i>
                      <span data-locale="dep-construction-dropdown-three">Finance Department</span>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </li>
                <li class="department-dropdown-list">
                  <a href="./human-resources.php" class="department-dropdown-link">
                    <div class="department-dropdown-title">
                      <i class="fa-solid fa-user"></i>
                      <span data-locale="dep-construction-dropdown-four">Human Resources</span>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </li>
                <li class="department-dropdown-list">
                  <a href="./accommodation-transportation.php" class="department-dropdown-link">
                    <div class="department-dropdown-title">
                      <i class="fa-solid fa-couch"></i>
                      <span data-locale="dep-construction-dropdown-five">Accommodation & Transportation</span>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </li>
                <li class="department-dropdown-list">
                  <a href="./procurement.php" class="department-dropdown-link active">
                    <div class="department-dropdown-title">
                      <i class="fa-solid fa-cart-shopping"></i>
                      <span data-locale="dep-construction-dropdown-six">Procurement</span>
                    </div>
                    <i class="fa-solid fa-chevron-right"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="department-content">
            <div class="department-image"><img src="./assets/img/department/procurement/content/procurement-image.jpg" alt="Arkan Finance Management Image" /></div>
            <div class="department-content-text points">
              <p data-locale="dep-procurement-content-one">The Procurement Department at <b>Arkan Advanced Technical Group L.L.C. S.P.C.</b> is responsible for acquiring the goods, services, and resources needed for the organization’s day-to-day operations. Our team ensures that these acquisitions meet the required standards of quality, price, and delivery timelines, while supporting the group strategic goals and operational needs.</p>
              <p data-locale="dep-procurement-content-two">At <b>Arkan Advanced Technical Group L.L.C. S.P.C.,</b> we are committed to deliver exceptional service and our procurement department is no exception. We strive to exceed our clines expectation by providing high-quality services that are reliable, efficient, and cost-effective. Contact us today to learn more about how we can support your procurement needs.</p>
              <p data-locale="dep-procurement-content-three">Our mission is to optimize the procurement process to deliver value to <b>Arkan Advanced Technical Group L.L.C. S.P.C.</b>  through cost-effective sourcing, strategic supplier partnerships, and efficient procurement practices. We aim to ensure that all products and services required by the Group are sourced sustainably and ethically, contributing to the overall success and growth of the group.</p>
            </div>
          </div>
          <div class="department-ad-container">
            <img src="./assets/img/department/construction-maintenance/ad/department-ad.jpg" alt="Arkan Department Call Number" />
            <div class="department-ad-info">
              <i class="fa-solid fa-phone"></i>
              <p class="department-ad-text">Need help? Call Us now</p>
              <p class="department-ad-number">+97125539900</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include_once './views/footer.view.php'; ?>

  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/department.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>