<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects</title>
    {{-- Favicons --}}
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    {{-- Vendor CSS Files --}}
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="img/vendor/icofont/icofont.min.css" rel="stylesheet"> --}}
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    {{-- Styles --}}
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <header id="header" class="header active">
        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="{{ url('/') }}"><i class="bx bx-arrow-back"></i> <span>Home</span></a>
                </li>

            </ul>
        </nav>
    </header>

    {{-- ======= Portfolio Section ======= --}}
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Projects</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                    sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                    ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
        </div>
    </section>

    {{-- ======= Services Section ======= --}}
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <i class="bx bxl-dribbble"></i>
                        </div>
                        <h4><a href=""> </a></h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <i class="bx bx-file"></i>
                        </div>
                        <h4><a href=""> </a></h4>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <i class="bx bx-tachometer"></i>
                        </div>
                        <h4><a href=""> </a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
    <div id="preloader"></div>

    {{-- Vendor JS Files --}}
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/counterup/counterup.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/venobox/venobox.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/typed.js/typed.min.js"></script>
    <script src="vendor/aos/aos.js"></script>

    {{-- Template Main JS File --}}
    <script src="js/main.js"></script>

</body>

</html>
