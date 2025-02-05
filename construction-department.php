<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Construction & Maintenance Department</title>

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
    <div class="loading"></div>
    <section class="hero-section">
      <div class="hero-section">
        <div class="container position-relative h-100">
          <div class="hero-container" data-lang-class="dep-construction-hero">
            <h1 data-locale="dep-construction-hero-title">Construction & Maintenance</h1>
            <nav aria-label="hero-breadcrumb">
              <ol class="hero-breadcrumb">
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-one">Home</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-two">Department</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item active" aria-current="page" data-locale="dep-construction-hero-title">Construction & Maintenance</li>
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
                  <a href="./construction-department.php" class="department-dropdown-link active">
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
                  <a href="procurement.php" class="department-dropdown-link">
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
            <div class="department-image">
              <img src="./assets/img/department/construction-maintenance/content/construction-image.jpg" alt="Arkan Construction Department Image" />
            </div>
            <div class="department-content-text">
              <p data-locale="dep-construction-content-one">Our Construction & Maintenance department delivers exceptional solutions tailored to meet the diverse needs of clients. From construction and installations to comprehensive maintenance services, we focus on quality, precision, and safety.</p>
              <p data-locale="dep-construction-content-two">Backed by over a decades of expertise, we ensure every project adheres to international standards while exceeding client expectations. Our skilled team of engineers and technicians work diligently to provide seamless, cost-effective solutions that stand the test of time.</p>
              <p data-locale="dep-construction-content-three">We are dedicated to providing precision and care in all our construction and maintenance projects.</p>
            </div>
            <div class="service-points-container">
              <ul class="nav nav-tabs service-points-lists">
                <li class="nav-item">
                  <a class="nav-link active service-points-link" aria-current="page" href="#civil" data-bs-toggle="tab" data-locale="dep-construction-tab-title-one">Civil Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link service-points-link" href="#mechanical" data-bs-toggle="tab" data-locale="dep-construction-tab-title-two">Mechanical Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link service-points-link" href="#plumbing" data-bs-toggle="tab" data-locale="dep-construction-tab-title-three">Plumbing Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link service-points-link" href="#electrical" data-bs-toggle="tab" data-locale="dep-construction-tab-title-four">Electrical Services</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="civil">
                  <div class="d-lg-flex gap-lg-5">
                    <ul class="service-points-content">
                      <li data-locale="dep-construction-tab-content-one-point-one">Preliminaries work</li>
                      <li data-locale="dep-construction-tab-content-one-point-two">Sub Structure</li>
                      <li data-locale="dep-construction-tab-content-one-point-three">Super Structure</li>
                      <li data-locale="dep-construction-tab-content-one-point-four">Blocks works</li>
                      <li data-locale="dep-construction-tab-content-one-point-five">Paviour works</li>
                    </ul>
                    <ul class="service-points-content">
                      <li data-locale="dep-construction-tab-content-one-point-six">Water proofing & roofing</li>
                      <li data-locale="dep-construction-tab-content-one-point-seven">Paints work</li>
                      <li data-locale="dep-construction-tab-content-one-point-eight">Aluminium and metal works</li>
                      <li data-locale="dep-construction-tab-content-one-point-nine">External work</li>
                      <li data-locale="dep-construction-tab-content-one-point-ten">Tiles and marble</li>
                    </ul>
                  </div>
                </div>
                <div class="tab-pane fade" id="mechanical">
                  <ul class="service-points-content">
                    <li data-locale="dep-construction-tab-content-two-point-one">HVAC System</li>
                    <li data-locale="dep-construction-tab-content-two-point-two">Exhaust Fans</li>
                    <li data-locale="dep-construction-tab-content-two-point-three">Duct Works</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="plumbing">
                  <ul class="service-points-content">
                    <li data-locale="dep-construction-tab-content-three-point-one">External Drainage System</li>
                    <li data-locale="dep-construction-tab-content-three-point-two">Water Supply networks</li>
                    <li data-locale="dep-construction-tab-content-three-point-three">Sanitary ware fixing</li>
                    <li data-locale="dep-construction-tab-content-three-point-four">Manhole & inspection chambers</li>
                    <li data-locale="dep-construction-tab-content-three-point-five">Installations and maintenance of pumps</li>
                  </ul>
                </div>
                <div class="tab-pane fade" id="electrical">
                  <ul class="service-points-content">
                    <li data-locale="dep-construction-tab-content-four-point-one">Electromechanical equipment installation & maintenance</li>
                    <li data-locale="dep-construction-tab-content-four-point-two">Installation of cable TRYS</li>
                    <li data-locale="dep-construction-tab-content-four-point-three">Installation of testing all kinds of cables</li>
                    <li data-locale="dep-construction-tab-content-four-point-four">Cable jointing</li>
                    <li data-locale="dep-construction-tab-content-four-point-five">Installation of all kinds of panel & distribution boards</li>
                  </ul>
                </div>
              </div>
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