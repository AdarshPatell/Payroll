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
            <h1>Online Payroll for small business</h1>
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
                Whether you're a small business or a large enterprise, our platform ensures seamless payroll processing
                with top-notch security, accuracy, and compliance.Whether you're a small business or a large enterprise, our platform ensures seamless payroll processing
                with top-notch security, accuracy, and compliance.
              </p>
              
            </div>
          </div>

          <!-- Hero Image and Highlight Section -->
          <div class="col-lg-6" data-aos="fade-left">
            <img src="assets/img/small-business.jpg" class="img-fluid hero-img mb-4" alt="Hero Services Image">
          </div>
        </div>
      </div>
    </section>
    <!-- /Hero Section -->


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
            <a href="#" class="read-more"><span>Get Started</span><i class="bi bi-arrow-right"></i></a>
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