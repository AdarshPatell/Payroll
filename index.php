<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>eazePayroll | HOME</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/eaze.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    /* Video Section Styles */
    #video {
      background: linear-gradient(135deg, #007bff, #00d4ff);
      color: #fff;
      padding: 60px 0;
    }

    #video .section-title h2 {
      text-align: center;
      color: #fff;
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    #video .section-title p {
      text-align: center;
      color: #f0f8ff;
      font-size: 1.1rem;
      margin-bottom: 40px;
    }

    .featured-video {
      text-align: center;
      margin-bottom: 40px;
    }

    .featured-video iframe {
      width: 100%;
      max-width: 800px;
      height: 450px;
      border: 5px solid #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .video-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .video-item iframe {
      width: 100%;
      height: 200px;
      border: 3px solid #fff;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .video-item iframe:hover {
      transform: scale(1.05);
      transition: all 0.3s ease;
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/eaze.png">
        <h1 class="sitename">eazePayroll</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>

          <li><a href="pricing.php">Pricing</a></li>


        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#signup">Get Started</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/hero-bg-light.webp" alt="Hero Background">
      </div>
      <div class="container">
        <div class="row align-items-center">
          <!-- Main Heading and Buttons Section -->
          <div class="col-lg-6 text-start" data-aos="fade-right">
            <h1>Welcome to <span>eazePayroll</span></h1>
            <p class="hero-subtext">
              Payroll Pricing & Plans. Simplified.
            </p>
            <!-- CTA Buttons -->
            <div class="d-flex mt-3">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="#video" class="glightbox btn-watch-video d-flex align-items-center ms-3">
                <i class="bi bi-play-circle"></i><span>Watch Video</span>
              </a>
            </div>

            <!-- Additional Content Section -->
            <div class="mt-4">
              <p class="hero-paragraph">
                At <strong>eazePayroll</strong>, we believe in simplifying payroll management with transparent pricing
                and
                easy-to-understand plans. Our goal is to empower businesses of all sizes to focus on what they do best.
              </p>
              <p class="hero-paragraph">
                Whether you're a small business or a large enterprise, our platform ensures seamless payroll processing
                with top-notch security, accuracy, and compliance.
              </p>
              <p class="hero-paragraph">
                From start-up to scale-up, eazePayroll online payroll, tax management, HR and benefit solutions save you
                time and money. We’ve dedicated 25 years to giving you the freedom to succeed.
              </p>
            </div>
          </div>

          <!-- Hero Image and Highlight Section -->
          <div class="col-lg-6" data-aos="fade-left">
            <img src="assets/img/hero-services-img.webp" class="img-fluid hero-img mb-4" alt="Hero Services Image">
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Simplified Payroll</a></h4>
                <p class="description">We'll take care of the complex tasks—like calculating and paying federal, state,
                  and local payroll taxes—so you can get back to doing what you love.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Performance management</a></h4>
                <p class="description">Grow and develop your dream team with talent management tools.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="#" class="stretched-link">Insights and reporting</a></h4>
                <p class="description">Make smart business decisions based on smart data. </p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Featured Services Section -->

    <!-- Success amde simple -->
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <!-- Image Section -->
          <div class="col-md-6" data-aos="fade-right">
            <img src="./assets/img/new-image.jpeg" class="img-fluid rounded my-4" alt="Mobile Application Preview" />
          </div>
          <!-- Text Section -->
          <!-- Dropdown Section -->
          <div class="col-md-6" data-aos="fade-left">
            <h2 class="fw-bold">Success Made Simple.</h2>
            <p class="text-muted">
              Free unlimited payroll runs. Free direct deposit service. Free payroll
              tax calculations. Free auto payroll. It all means freedom for you.
            </p>
            <p class="mb-4">
              See <a href="./pricing.php" class="text-primary">Plans & Pricing</a> page for more
              information.
            </p>
            <div class="accordion" id="dropdownSection">
              <!-- Dropdown Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    What is Eaze Accounts?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#dropdownSection">
                  <div class="accordion-body">
                    Eaze Accounts is a simple and intuitive accounting solution that
                    helps businesses streamline their financial operations.
                  </div>
                </div>
              </div>

              <!-- Dropdown Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What are the key features of Eaze Accounts?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#dropdownSection">
                  <div class="accordion-body">
                    Key features include invoicing, expense tracking, payroll
                    management, time tracking, and a user-friendly mobile app.
                  </div>
                </div>
              </div>

              <!-- Dropdown Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How does Eaze Accounts compare to competitors?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#dropdownSection">
                  <div class="accordion-body">
                    Compared to QuickBooks and FreshBooks, Eaze Accounts provides
                    superior features like automatic payroll and tax filing with better
                    ease of use.
                  </div>
                </div>
              </div>
            </div>
            <a href="./pricing.php" class="btn btn-primary btn-lg mt-2">See Plans and Pricing</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Success amde simple -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Who We Are</p>
            <h3>Providing Simplified plans and Payroll Pricing</h3>
            <p class="fst-italic">
              Free direct deposit. Free unlimited payroll runs. Free auto payroll. Free payroll tax calculations.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span> Our platform provides proactive advice, ensuring compliance,
                </span></li>
              <li><i class="bi bi-check-circle"></i> <span>optimizing tax savings, and helping you make informed
                  decisions for long-term financial success and growth.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/about-company-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about-company-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>
    <!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section>
    <!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p>Access your financial data anytime, anywhere, with our user-friendly mobile app for on-the-go convenience.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-5 d-flex align-items-center">

            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                  <i class="bi bi-binoculars"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Automated Accounting</h4>
                    <p>
                      Streamline your finances with automated accounting processes, saving time and reducing human
                      error.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                  <i class="bi bi-box-seam"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Smart Reporting</h4>
                    <p>
                      Generate insightful, customizable reports that help you make data-driven business decisions
                      effortlessly.
                    </p>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                  <i class="bi bi-brightness-high"></i>
                  <div>
                    <h4 class="d-none d-lg-block">Mobile Access</h4>
                    <p>
                      Access your financial data anytime, anywhere, with our user-friendly mobile app for on-the-go
                      convenience.
                    </p>
                  </div>
                </a>
              </li>
            </ul><!-- End Tab Nav -->

          </div>

          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-1">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-2">
                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->

              <div class="tab-pane fade" id="features-tab-3">
                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
              </div><!-- End Tab Content Item -->
            </div>

          </div>

        </div>

      </div>

    </section>
    <!-- /Features Section -->

    <!-- Features Details Section -->
    <section id="features-details" class="features-details section">

      <div class="container">

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Real-Time Financial Data</h3>
              <p>
                Access up-to-date financial data anytime with real-time insights. Track cash flow, expenses, and profits
                instantly, enabling you to make informed decisions quickly and keep your business on track with
                accurate, live financial information.
              </p>
              <a href="#" class="btn more-btn">Learn More</a>
            </div>
          </div>

        </div><!-- Features Item -->

        <div class="row gy-4 justify-content-between features-item">

          <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

            <div class="content">
              <h3>Grow your business with smart, efficient financial management tools</h3>
              <p>
                Create and send invoices in seconds with our single-click invoice feature. Simplify your billing
                process, save time, and ensure accuracy with just one click—perfect for busy entrepreneurs and growing
                businesses.
              </p>
              <ul>
                <li><i class="bi bi-easel flex-shrink-0"></i> Instant Invoice Creation.</li>
                <li><i class="bi bi-patch-check flex-shrink-0"></i> Customizable Templates.</li>
                <li><i class="bi bi-brightness-high flex-shrink-0"></i> Automated Client Data.</li>
              </ul>
              <p></p>
              <a href="#" class="btn more-btn">Try One-Click Invoice</a>
            </div>

          </div>

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
          </div>

        </div><!-- Features Item -->

      </div>

    </section>
    <!-- /Features Details Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Enable secure and timely salary transfers to employees' bank accounts.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <i class="bi bi-activity icon"></i>
              <div>
                <h3>Automated Payroll Processing</h3>
                <p>Calculate employee salaries, overtime, deductions, and bonuses accurately with minimal manual effort.
                </p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item item-orange position-relative">
              <i class="bi bi-broadcast icon"></i>
              <div>
                <h3>Tax Filing and Compliance</h3>
                <p>Automatically calculate and deduct taxes, including income tax, social security, and other
                  contributions.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item item-teal position-relative">
              <i class="bi bi-easel icon"></i>
              <div>
                <h3>Employee Self-Service Portal</h3>
                <p>Allow employees to view their pay slips, tax documents, and benefits online,
                  Employees can update personal details and track payment history independently.
                </p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item item-red position-relative">
              <i class="bi bi-bounding-box-circles icon"></i>
              <div>
                <h3>Direct Deposit Management</h3>
                <p>Enable secure and timely salary transfers to employees' bank accounts.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item item-indigo position-relative">
              <i class="bi bi-calendar4-week icon"></i>
              <div>
                <h3>Time Tracking and Attendance Integration.</h3>
                <p>Sync payroll with attendance systems to calculate accurate working hours.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item item-pink position-relative">
              <i class="bi bi-chat-square-text icon"></i>
              <div>
                <h3> Benefits and Deductions Management</h3>
                <p>Manage health insurance, retirement plans, bonuses, and other employee benefits.</p>
                <a href="#" class="read-more stretched-link">Learn More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Services Section -->

    <!-- More Features Section -->
    <section id="more-features" class="more-features section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up"
            data-aos-delay="100">
            <h3>Here’s how you can structure your “More Services” section, along with 4 new services and their
              descriptions:</h3>
            <p>Explore additional features designed to simplify payroll management and enhance employee satisfaction:
            </p>

            <div class="row">

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-easel flex-shrink-0"></i>
                <div>
                  <h4>Onboarding and Offboarding Assistance</h4>
                  <p>Streamline the onboarding process with automated document collection and employee setup. </p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-patch-check flex-shrink-0"></i>
                <div>
                  <h4>Custom Reports and Analytics</h4>
                  <p>Generate in-depth reports on payroll expenses, tax deductions, and workforce costs.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4>Multi-Currency Payroll Support</h4>
                  <p>Process payments for international employees in their preferred currencies.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-lg-6 icon-box d-flex">
                <i class="bi bi-brightness-high flex-shrink-0"></i>
                <div>
                  <h4>Integration with Accounting Software</h4>
                  <p>Sync payroll data with popular accounting tools like QuickBooks, Xero, or Tally</p>
                </div>
              </div><!-- End Icon Box -->

            </div>

          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/features-3.jpg" alt="">
          </div>

        </div>

      </div>

    </section>
    <!-- /More Features Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section" style="background-image: url(./assets/img/hero-bg-light.webp);">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active" style="background-color: #fff;">
                <h3>What is the average cost of a payroll service?</h3>
                <div class="faq-content">
                  <p>eazePayroll offers three small business plans and one household employer plan. Our popular
                    Full-Service Plan for small businesses is $29 / month + $7 / employee. Depending on the provider,
                    other payroll service plans range from $45 to more than $150 per month, plus a per employee charge.
                    Some providers may charge additional fees for setup, off-cycle payroll runs, direct deposit and
                    more..</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" style="background-color: #fff;">
                <h3>What if I increase or decrease the number of employees on my payroll plan?</h3>
                <div class="faq-content">
                  <p>
                    eazePayroll charges only for active employees, so while your monthly base fee remains consistent,
                    your per employee charge will change as employees join or leave your company. A eazePayroll
                    specialist is standing by to answer your questions about plan options, pricing, and service.
                    Schedule an appointment..</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" style="background-color: #fff;">
                <h3>Where can I find payroll service pricing for accountants, bookkeepers, and financial advisors?</h3>
                <div class="faq-content">
                  <p>eazePayroll offers a comprehensive suite of solutions for accountants, bookkeepers, and financial
                    advisors—from payroll to HR. Our easy-to-manage platform helps you increase revenue, expand
                    offerings, and simplify how you serve and add value to your small business clients.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" style="background-color: #fff;">
                <h3>Is doing your own payroll worth it?</h3>
                <div class="faq-content">
                  <p>Handling payroll in-house may appear to save money. In reality, it can be time-consuming,
                    complicated, and fraught with compliance risks. Plus, the time you spend processing payroll diverts
                    your attention from your business, customers, and employees. Learn more about eazePayroll small
                    business and household employer automated payroll solutions..</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" style="background-color: #fff;">
                <h3>Can I change my payroll plan?</h3>
                <div class="faq-content">
                  <p>Providers handle calendar year plan changes in a variety of ways. eazePayroll offers three plan
                    options, and our specialists will gladly help you select the plan that best fits your needs.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item" style="background-color: #fff;">
                <h3>How do I switch payroll providers?</h3>
                <div class="faq-content">
                  <p>If you’re ready to simplify payroll, you’re ready to switch to eazePayroll. Whether you’re
                    switching from doing it yourself or a different payroll provider, the eazePayroll specialists are
                    ready to help you every step of the way. Pick your perfect payroll plan today.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section>
    <!-- /Faq Section -->

    <!-- Payroll Section -->
    <section id="payroll" class="payroll-section py-5">
      <div class="container">
        <div class="row align-items-center">
          <!-- Text Content -->
          <div class="col-lg-6">
            <h2 class="mb-4">Run payroll in minutes with smart technology.</h2>

            <!-- Dropdown Section 1 -->
            <div class="feature-item mb-4">
              <h5 class="d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#feature1"
                aria-expanded="false" aria-controls="feature1" style="cursor: pointer;">
                Payroll takes just a few clicks
                <span class="ms-auto">
                  <i class="bi bi-chevron-down"></i>
                </span>
              </h5>
              <div id="feature1" class="collapse">
                <p class="text-muted mt-2">
                  Plus, we automatically file your taxes, help with compliance, and identify tax credits to help save
                  you money you may never have known you qualified for.
                </p>
                <a href="#" class="text-primary">Learn more about payroll →</a>
              </div>
            </div>

            <!-- Dropdown Section 2 -->
            <div class="feature-item mb-4">
              <h5 class="d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#feature2"
                aria-expanded="false" aria-controls="feature2" style="cursor: pointer;">
                Sync hours with payroll
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </h5>
              <div id="feature2" class="collapse">
                <p class="text-muted mt-2">
                  Easily sync your employee hours with the payroll system for seamless operation.
                </p>
              </div>
            </div>

            <!-- Dropdown Section 3 -->
            <div class="feature-item mb-4">
              <h5 class="d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#feature3"
                aria-expanded="false" aria-controls="feature3" style="cursor: pointer;">
                State tax registration in all 50 states
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </h5>
              <div id="feature3" class="collapse">
                <p class="text-muted mt-2">
                  We handle state tax registration across all 50 states so you can focus on your business.
                </p>
              </div>
            </div>

            <button class="btn btn-primary mt-3 px-4 py-2 shadow-sm my-3">Why eazePayroll</button>
          </div>

          <!-- Mobile Image -->
          <div class="col-lg-6 text-center">
            <img src="./assets/img/new-2.png" alt="Mobile Mockup" class="img-fluid rounded shadow-lg" />
          </div>
        </div>
      </div>
    </section>
    <!-- Payroll section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What our client's say ?</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  “eazePayroll serves the small business owner so well! They come in at a solid price point and have
                  great customer service. They have worked with my specific business needs, and I don't have to worry
                  about the headache of payroll anymore.”
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                  quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                  tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                  minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                  labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    <!-- /Testimonials Section -->

    <!-- Video Section -->
    <section id="video" class="video section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Watch Our Videos</h2>
        <p>Explore our latest videos and learn more about what we offer!</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="featured-video" data-aos="fade-up" data-aos-delay="100">
          <iframe src="https://www.youtube.com/embed/isLak5U9b2k?si=dt2l-C3BtJa-_xDq" title="Featured Video" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>

        <div class="video-grid" data-aos="fade-up" data-aos-delay="200">
          <div class="video-item">
            <iframe src="https://www.youtube.com/embed/isLak5U9b2k?si=s5im4R93YHd6WnFC" title="Video 1" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <div class="video-item">
            <iframe src="https://www.youtube.com/embed/rQU2YLv6eLs?si=xvIAFW0Zy55SNIoN" title="Video 2" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
          <div class="video-item">
            <iframe src="https://www.youtube.com/embed/rQU2YLv6eLs?si=g227hfU4zUZc5-ew" title="Video 3" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- /Video Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Want to clear your query, ask it out.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@example.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
              frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
              data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>
    <!-- /Contact Section -->

    <!-- Signup section -->
    <section class="py-5" id="signup" style="background-image: url(./assets/img/hero-bg-light.webp);">
      <div class="container">
        <div class="form-container">
          <h2 class="text-center text-primary">Sign Up Now</h2>
          <p class="text-center text-muted">
            Small businesses and households get 6 months free!*
          </p>
          <form>
            <!-- Payroll Type Dropdown -->
            <div class="mb-3">
              <label for="payrollType" class="form-label">Payroll Type</label>
              <select class="form-select" id="payrollType" required>
                <option value="" disabled selected>Select Payroll Type</option>
                <option value="small-business">Small Business</option>
                <option value="household">Household</option>
              </select>
            </div>

            <!-- Company Name and Name Fields -->
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Company Name" required />
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Name" required />
              </div>
            </div>

            <!-- Email and Phone Fields -->
            <div class="row g-3 mb-3">
              <div class="col-md-6">
                <input type="email" class="form-control" placeholder="Email" required />
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-text">+1</span>
                  <input type="tel" class="form-control" placeholder="(201) 555-0123" required />
                </div>
              </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button type="submit" class="btn btn-primary w-100">
                Get Started
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Signup section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/eaze.png">
            <span class="sitename">eazePayroll</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-about">
          <div class="footer-contact">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">eazePayroll</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="#">magnificentsolution</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>