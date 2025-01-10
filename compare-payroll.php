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
                        <h1>Compare Payroll Services for Small Business</h1>
                        <p class="hero-subtext">
                        EazePayroll makes it easy to compare different payroll solutions.
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
                            Whether you prefer a hands-on approach or a fully automated system, EazePayroll has the right payroll solution for your business. We’ll help you identify the best fit for your needs, ensuring simplicity and accuracy every step of the way. Discover how easy it is to transition to EazePayroll and enjoy the benefits of streamlined payroll management.
                            </p>

                        </div>
                    </div>

                    <!-- Hero Image and Highlight Section -->
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="assets/img/small-business.jpg" class="img-fluid hero-img mb-4"
                            alt="Hero Services Image">
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        

        <!-- Features Details Section -->
        <section id="features-details" class="features-details section">

            <div class="container">

                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Switch, Simplify, and Save</h3>
                            <p>
                            Ready to simplify your payroll process? Make the switch to EazePayroll today!
                            </p>
                            <p>
                            Save time, reduce costs, and gain peace of mind with our user-friendly online payroll tools and responsive support. Whether you're transitioning from handling payroll yourself or moving from another provider, our team at EazePayroll is here to guide you every step of the way.
                            </p>
                            <a href="#" class="btn more-btn">Learn More</a>
                        </div>
                    </div>

                </div><!-- Features Item -->

                

            </div>

        </section>
        <!-- /Features Details Section -->

         <!-- Competitor Analysis Section -->
         <section id="competitor-analysis" class="competitor-analysis section"
            style="background-image: url(./assets/img/hero-bg-light.webp);">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Competitor Analysis</h2>
                <p>Compare Eaze Accounts with popular alternatives and see how we stand out in offering the best
                    solutions for your business needs.</p>
            </div>

            <!-- Table Section -->
            <div class="container">
                <div class="competitor-table-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <table class="table text-center align-middle competitor-table"
                        style="border-radius: 10px; overflow: hidden;">
                        <thead>
                            <tr>
                                <th scope="col" class="feature-column">Features</th>
                                <th scope="col" class="brand-column">Eaze Accounts</th>
                                <th scope="col">QuickBooks</th>
                                <th scope="col">FreshBooks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Invoicing</td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td><i class="bi bi-dash text-secondary"></i></td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                            <tr>
                                <td>Expense Tracking</td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td><i class="bi bi-dash text-secondary"></i></td>
                            </tr>
                            <tr>
                                <td>Payroll Management</td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td><i class="bi bi-dash text-secondary"></i></td>
                                <td><i class="bi bi-dash text-secondary"></i></td>
                            </tr>
                            <tr>
                                <td>Time Tracking</td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td><i class="bi bi-dash text-secondary"></i></td>
                            </tr>
                            <tr>
                                <td>Mobile App</td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                                <td><i class="bi bi-dash text-secondary"></i></td>
                                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /Competitor Analysis Section -->

        <!-- Freedom made simple -->
        <section id="freedom-section" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="fw-bold">Freedom Made Simple</h2>
                    <p class="text-muted fst-italic">
                        The easy-to-use easePayroll platform helps save you time and trouble, whether you employ one or
                        25.
                    </p>
                </div>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Federal, state, and local taxes calculated, filed, and deposited</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>W-2s, 1099-NECs, signature-ready Schedule H, and year-end tax filings</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Unlimited payroll runs</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Direct deposit service</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Auto payroll</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Right Column -->
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Multiple pay rates and bonuses</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Online pay stubs</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>New hire reporting</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>Live, U.S.-based phone and chat support</span>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>24/7 access to payroll help articles and chats</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <p>
                        Looking to pay a contractor or W-9 employee? Check out our
                        <a href="#" class="text-primary">no tax filing option</a>.
                    </p>
                </div>
            </div>
        </section>
        <!-- Freedom made simple -->

        <!-- Features Details Section -->
        <section id="features-details" class="features-details section">

            <div class="container">

                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Why DIY Payroll May Not Be The Best Option</h3>
                            <p>
                            Handling payroll on your own can be time-consuming and overwhelming, especially when you're dealing with complex tax regulations at local, state, and federal levels. Many small business owners struggle with payroll errors, and research shows that 32% admit to making mistakes—often resulting in underpaid employees. This not only affects your employees but can also lead to costly fines and penalties.
                            </p>
                            <a href="#" class="btn more-btn">Learn More</a>
                        </div>
                    </div>

                </div><!-- Features Item -->

                

            </div>

        </section>
        <!-- /Features Details Section -->

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
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">eazePayroll</strong><span>All Rights
                    Reserved</span></p>
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