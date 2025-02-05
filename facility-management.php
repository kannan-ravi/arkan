<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facility Management - Soft Services Department</title>

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
            <h1 data-locale="dep-facility-hero-title">Facility Management – Soft Services</h1>
            <nav aria-label="hero-breadcrumb">
              <ol class="hero-breadcrumb">
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-one">Home</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item"><a href="#" data-locale="dep-construction-breadcrumb-link-two">Department</a></li>
                <p class="hero-breadcrumb-item mb-0 mt-1">></p>
                <li class="hero-breadcrumb-item active" aria-current="page" data-locale="dep-facility-hero-title">Facility Management – Soft Services
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
                  <a href="./facility-management.php" class="department-dropdown-link active">
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
            <div class="department-image"><img src="./assets/img/department/facility-management/content/facility-management-image.jpg" alt="Arkan Facility Management Image" /></div>
            <div class="department-content-text points">
              <p data-locale="dep-facility-content-one">Our Facility Management division specializes in providing soft services to maintain a clean, safe, and organized environment. We offer a wide range of services, including housekeeping, waste management, pest control, and landscaping, tailored to suit commercial and residential spaces.</p>
              <p data-locale="dep-facility-content-two">With a strong emphasis on sustainability and attention to detail, our team ensures smooth daily operations, allowing clients to focus on their core business activities while enjoying a well-maintained facility.</p>
              <p data-locale="dep-facility-content-three">Currently, we maintain:</p>
            </div>
            <ul class="department-content-list">
              <li data-locale="dep-facility-point-one"><b>Cleaning & Housekeeping services:</b> Professional cleaning and housekeeping solutions to maintain a clean, organized, and hygienic environment in offices, commercial spaces, and residential properties. Services include regular cleaning, sanitization, and upkeep of restrooms, floors, and surfaces.</li>
              <li data-locale="dep-facility-point-two"><b>Facade glass and Rope access cleaning services:</b> Our Rope Access Cleaning services offer an efficient solution for maintaining high-rise buildings, industrial structures, and hard-to-reach areas. Using advanced techniques, our highly trained technicians deliver exceptional results while minimizing disruption to your operations.</li>
              <li data-locale="dep-facility-point-three"><b>Waste management services:</b> Comprehensive waste collection, disposal, and recycling services aimed at keeping facilities clean and environmentally responsible. This includes segregation of waste, recycling programs, and regular waste removal to promote sustainability</li>
              <li data-locale="dep-facility-point-four"><b>Manpower supply services:</b> Providing skilled manpower for various roles to ensure smooth operations, security, and administrative support in both office and residential settings</li>
              <li data-locale="dep-facility-point-five"><b>Laundry services:</b> Professional laundry solutions for both residential and commercial clients. This includes washing, drying, ironing, and delivery of clothes, linens, and uniforms, ensuring cleanliness and convenience</li>
            </ul>
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