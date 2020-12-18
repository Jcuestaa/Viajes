<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ViajesEXP</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="./plane.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Squadfree - v2.3.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <script src="./assets/js/popup.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html"><img id="logo" src="assets/img/logo.png"></img></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#contact">Contáctanos</a></li>
                    <li><a id="login">Login</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
        <div class="contenedor">
            <div class="overlay" id="overlay">
               <div class="popup" id="popup">
                   <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                   <h3>REGISTRATE/LOGIN</h3>
                   <h4>MATATAN</h4>
                   <form action="">
                       <div class="contenedor-inputs">
                           <input type="text" placeholder="Nombre">
                           <input type="email" placeholder="Correo">
                       </div>
                       <input type="submit" class="btn-submit" value="Resgistrarse">
              
                       <input type="submit" class="btn-submit2" value="Login">
                   </form>
                </div>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Benvingut</h1>
            <h2>PAGINA DE VIAJES PROYECTO TRANSVERSAL</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
        
    </section><!-- End Hero -->

    <main id="main">
        <!-- Hago prueba de carga de datos SQL-->
        <section id="services" class="services">
        <div class="container">

                <div class="row">

               
        <?php

        include ("mostrarexp.php");

        ?>
                </div>
        </div>
        </section>
        

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Nuestros Testimonios</h2>
                    <p>Nuestros clienes muestran sus reseñas sobre las diversas experiencias que ofrecemos!</p>
                </div>

                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item" data-aos="fade-up">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Nada mejor que una buena ruta y encima a caballo...Que más se puede pedir!
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Aitor Martínez</h3>
                    </div>

                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Increíbles sensaciones en la moto acuatica, sin duda repetiré, adrenalina pura!
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>l
                        </p>
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Marc Ortega</h3>

                    </div>

                    <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            The walk by Montjuic was pretty awesome, nice views and probably we will repeat!
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Warren Buffet</h3>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">



        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Contacto</h2>
                    <p>Contamos con diferentes medios de contacto para hacer sugerencias o consultar cualquier duda!</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>¿Dónde nos encontramos?</h3>
                            <p>C/ Ave del Paraíso 23-25</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <p>enriquepastor@acdz.com</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Llámanos</h3>
                            <p>634 556 678 / 934776568</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
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
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; <strong><span>Hecho por Jorge Cuesta, Álvaro Silva, Martí Rabella y Jordi Cervera</span></strong>
            </div>
            <div class="credits">
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body></html>
