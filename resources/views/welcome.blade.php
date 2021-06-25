<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="img/vendor/icofont/icofont.min.css" rel="stylesheet"> --}}
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="css/portfolio.css">

</head>

<body>
    <header id="header" class="header">
        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#hero"><i class='bx bxs-home'></i><span>Home</span></a></li>
                <li><a href="#about"><i class='bx bxs-user'></i><span>About</span></a></li>
                <li><a href="#resume"><i class='bx bxs-user-detail'></i> <span>Resume</span></a></li>
                <li><a href="{{ url('projects') }}"><i class='bx bxs-layer'></i><span>Projects</span></a></li>
                <li><a href="#contact"><i class='bx bxs-envelope'></i><span>Contact</span></a></li>
            </ul>
        </nav>
        <h2 class="logo-1" style="font-size: 1.5rem">Software Developer</h2>
    </header>

    {{-- ======= Hero Section ======= --}}
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Sukaina</h1>
            <p><span class="typed" data-typed-items="Html/Css, JavaScript, PHP, "></span></p>
        </div>
    </section>

    <main id="main">
        {{-- ======= About Section ======= --}}
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About</h2>
                </div>
                <div class="row">
                    <div class="col col-sm-5 col-12 card m-5 info">
                        <a href="#" style="text-align: center">
                            <img src="img/profile-img.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title h5 mt-1 mb-3 d-block text-dark">Software Developer
                                <small>Junior</small>
                            </h4>
                            <p class="card-text text-muted"></p>
                            <div class="d-flex flex-row align-items-center">
                                <div class="d-flex flex-column data">
                                    <span><i class='bx bx-calendar'></i>10/March</span>
                                    <span><i class='bx bx-mobile'></i>+34 697209151</span>
                                    <span><i class='bx bxs-map-alt'></i>Barcelona</span>
                                    <span><i class='bx bx-mail-send'></i>sukaina.ab220@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col card m-5 card-resume info">
                        <p>I am proficient in HTML, CSS, JS and PHP, structured programming languages ​​and knowledge of
                            XML / XSL. I also have knowledge of systems development, MySQL, MongoDB, Laravel, Symfony
                            and WordPress.
                        </p>
                        <p>I am very flexible with the ability to work in different environments and can easily adapt to
                            different work area. I have a pleasant and friendly personality with the ability to
                            work in a team or independently.</p>
                    </div>
                </div>
            </div>
        </section>
        {{-- ======= Skills Section ======= --}}
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Skills</h2>
                    <div class="key-words">
                        <span>Html/5</span>
                        <span>Css/3</span>
                        <span>JavaScript/ES6</span>
                        <span>Bootstrap</span>
                        <span>jQuery</span>
                        <span>Ajax</span>
                        <span>API’s</span>
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>Symfony</span>
                        <span>WordPress</span>
                        <span>MySql</span>
                        <span>MongoDB</span>
                    </div>
                </div>
                <div class="row skills-content">
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">HTML <i class="val"></i></span>
                            <div class="progress-bar-wrap ">
                                <div class="progress-bar html" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">CSS <i class="val"></i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar css" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">JavaScript <i class="val"></i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar js" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">PHP <i class="val"></i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar php" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">Laravel <i class="val"></i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar laravel" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">Symfony <i class="val"></i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar symfony" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress">
                            <span class="skill">WordPress <i class="val"></i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar wp" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ======= Resume Section ======= --}}
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4>Sukaina Abkari</h4>
                            <p>Junior software developer
                                responsible and team player.
                                Skills and willingness to innovate
                                and learn new technologies, fast
                                learning and passion for
                                development.</p>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>Master Full stack In software development</h4>
                            <h5>06/2020 - 02/2021 </h5>
                            <p><em>Assembler School of Software</em></p>
                            <p>Web applications with Html, CSS, Js (Vanilla and jQuery), Php and Laravel and Xampp for
                                the server</p>
                            <p>Use of API's. </p>
                            <p> Database Management System SQL/MySQL (xampp) and MongoDB.</p>
                            <p> Improving Knowledge in M.E.R.N stack.</p>
                        </div>
                        <div class="resume-item">
                            <h4>Computer Science Engineering</h4>
                            <h5>09/2018 – 03/2020</h5>
                            <p><em>UBU</em></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>Full Stack Developer - Internship</h4>
                            <h5>03/2021 - 06/2021</h5>
                            <p><em>Tridenia S.L</em></p>
                            <ul>
                                <li>Work on the design, development, and implementation of the graphic, layout, and
                                    in diferent projects Client side and Server side as well. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                </div>
                <div class="row mt-1">
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- ======= Footer ======= --}}
    <footer id="footer">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>My</span></strong>. All Rights Reserved
            </div>
        </div>
        </div>
    </footer>

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
