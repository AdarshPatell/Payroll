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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

<body class="index-page py-5">

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


    <div class="container-fluid px-0 py-5">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h2 class="mb-0 text-white">Payroll Services Terms of Service</h2>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="bg-light p-3 rounded mb-3">
                                <h5 class="text-primary mb-3">Key Service Terms</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">
                                        <span class="badge bg-info me-2">1</span>
                                        Service Scope and Limitations
                                    </li>
                                    <li class="mb-2">
                                        <span class="badge bg-info me-2">2</span>
                                        Payment and Billing Terms
                                    </li>
                                    <li class="mb-2">
                                        <span class="badge bg-info me-2">3</span>
                                        User Account Responsibilities
                                    </li>
                                </ul>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <strong>Important:</strong> By using our payroll services, you agree to these terms.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 bg-light">
                                <div class="card-body">
                                    <h6 class="text-primary mb-3">Quick Overview</h6>
                                    <p class="small text-muted">
                                        Our payroll services are provided with the understanding that users will comply with all terms, maintain accurate information, and use the service responsibly.
                                    </p>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#fullTermsModal">
                                            Read Full Terms of Service
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Full Terms of Service Modal -->
<div class="modal fade" id="fullTermsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title text-white">Complete Terms of Service</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-primary mb-3">1. Service Acceptance</h6>
                <p>By accessing and using our payroll services, you agree to be bound by these terms. If you do not agree, do not use our services.</p>

                <h6 class="text-primary mt-4 mb-3">2. Service Description</h6>
                <p>We provide payroll processing services subject to the specific terms of your agreement. Our services may include payroll calculation, tax filing, and related support.</p>

                <h6 class="text-primary mt-4 mb-3">3. User Responsibilities</h6>
                <ul>
                    <li>Provide accurate and current employee information</li>
                    <li>Maintain confidentiality of account credentials</li>
                    <li>Comply with all applicable laws and regulations</li>
                </ul>

                <h6 class="text-primary mt-4 mb-3">4. Limitation of Liability</h6>
                <p>We are not liable for any indirect, incidental, or consequential damages arising from the use of our services.</p>
            </div>
        </div>
    </div>
</div>





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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>