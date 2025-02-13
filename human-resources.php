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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

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
            <h1 data-locale="dep-hr-hero-title">Human Resources</h1>
            <nav aria-label="hero-breadcrumb">
              <ol class="hero-breadcrumb">
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-one">Home</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-two">Department</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item active" aria-current="page" data-locale="dep-hr-hero-title">Human Resources
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
                  <a href="./human-resources.php" class="department-dropdown-link active">
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
                  <a href="./procurement.php" class="department-dropdown-link">
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
            <div class="department-image"><img src="./assets/img/department/human-resources/content/human-resource-image.jpg" alt="Arkan Finance Management Image" /></div>
            <div class="department-content-text points">
              <p data-locale="dep-hr-content-one"><b>At Arkan Advanced Technical Group L.L.C. S.P.C,</b> we value the role of human resources in our success. We focus on recruiting, training, and retaining the best employees, while providing a supportive and safe work environment. We offer comprehensive benefits including health insurance, retirement plans, and continuous training.</p>
              <p data-locale="dep-hr-content-two">We are committed to fostering diversity and inclusion, with a strong focus on employee safety.</p>
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