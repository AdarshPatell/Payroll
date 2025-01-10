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
                        <h1>HR & Benefit Solutions Tailored to Your Needs</h1>
                        <p class="hero-subtext">
                            Support your employees, stay competitive, sustain compliance. </p>
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
                                Our small business solutions support the health and wellness of you, your employees, and
                                your bottom line.
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
                            <h2>Beyond Payroll, We Simplify Business Operations</h2>
                            <h3>Efficient Business Management</h3>
                            <p>
                                At EazePayroll, we go beyond just payroll. Our platform streamlines your business
                                management with time-saving tools, alerts, and customizable templates that keep you
                                compliant and focused on growth.
                            </p>
                            <h3>Retirement Planning</h3>
                            <p>
                                Offer your employees valuable 401(k) plans with ease. EazePayroll simplifies retirement
                                planning, making it easier for your team to save while helping your business benefit
                                from tax advantages.
                            </p>
                            <h3>Employee Protection Plans</h3>
                            <p>
                                Protect your employees and your business with customized workers' compensation plans.
                                EazePayroll helps ensure you're fully covered, minimizing risks and keeping your
                                business safe.
                            </p>

                            <a href="#" class="btn more-btn">Learn More</a>
                        </div>
                    </div>

                </div><!-- Features Item -->

                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up"
                        data-aos-delay="100">

                        <div class="content">
                            <h3>HR and Compliance Resources Built for Small Business</h3>
                            <p>
                                Simplify your people processes with SureHR, a suite of smart, affordable, and custom HR
                                solutions that can help save you time and trouble on everyday HR tasks.
                            </p>

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


        <!-- Features Details Section -->
        <section id="features-details" class="features-details section">

            <div class="container">

                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Workers’ Compensation That Works For You</h3>
                            <p>
                                Depending on the requirements of your state, workers’ compensation insurance may be
                                mandatory. We make it easy for small businesses and households to set up and manage your
                                policy.
                            </p>
                            <a href="#" class="btn more-btn">Get a Quote</a>
                        </div>
                    </div>

                </div><!-- Features Item -->



            </div>

        </section>
        <!-- /Features Details Section -->

        <!-- Features Details Section -->
        <section id="features-details" class="features-details section">

            <div class="container">



                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up"
                        data-aos-delay="100">

                        <div class="content">
                            <h3>Retirement Plans That Fit Your Business</h3>
                            <p>
                            EazePayroll's  plans provide cost-effective and competitive benefits tailored to your business needs. Contact one of our specialists today at 866-497-2028 to find the perfect plan for you.
                            </p>

                            <p>Whether you're a small startup or an established company, EazePayroll offers retirement plans that align with your business goals and budget. Our solutions are designed to help you attract and retain top talent by providing employees with secure retirement options. With our easy-to-implement plans and ongoing support, you can focus on your business growth while we take care of your retirement benefits.</p>
                            <a href="#" class="btn more-btn">Try Plans</a>
                        </div>

                    </div>

                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
                    </div>

                </div><!-- Features Item -->

                <div class="row gy-4 justify-content-between features-item">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h2>Cost-Effective Health Insurance for Your Team</h2>
                            <p>
                            Offer your employees premium health insurance coverage without breaking the budget. EazePayroll makes it easy to provide affordable and comprehensive plans for your business.
                            </p>
                            <p>
                            Offer your employees premium health insurance coverage without breaking the budget. EazePayroll makes it easy to provide affordable and comprehensive plans for your business. With flexible options and expert guidance, we ensure your employees have access to the best healthcare while helping you manage costs effectively. Focus on growing your business while we handle the complexities of health insurance.
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