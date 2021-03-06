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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="php/axio.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
</head>

<body>
 <!-- ==== PANTALLA DE CARGA ===== -->
<div class="loader">
    <img src="assets/img/avion.gif" alt="imagen">
    </div>

    <script type="text/javascript">
            $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
        </script>

<!-- === PopUP cookies === -->
<div id="div-cookies" style="display: none;">
    Necesitamos usar cookies para que funcione todo, si permanece aquí acepta su uso, más información en
    <a hreflang="es" href="/info/aviso-legal">Aviso Legal</a>
    y la
    <a hreflang="es" href="/info/politica-de-privacidad">Política de Privacidad</a>.
    <button type="button" class="btn btn-sm btn-primary" onclick="acceptCookies()">
        Acepto el uso de cookies
    </button>
</div>
<style>
#div-cookies {
    position: fixed;
    bottom: 0px;
    left: 0px;
    width: 100%;
    background-color: white;
    box-shadow: 0px -5px 15px gray;
    padding: 7px;
    text-align: center;
    z-index: 99;
}
</style>
<script>
function checkAcceptCookies() {
    if (localStorage.acceptCookies == 'true') {
    } else {
        $('#div-cookies').show();
    }
}
function acceptCookies() {
    localStorage.acceptCookies = 'true';
    $('#div-cookies').hide();
}
$(document).ready(function() {
    checkAcceptCookies();
});
</script>
    
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.php"><img id="logo" src="assets/img/logo.png"></img></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="#contact">Contáctanos</a></li>
                    <li><a id="login">Login</a></li>
                    <li><a id="registrar">Registrate</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
       
        <div class="contenedor">
            <div class="overlay" id="overlay">
               <div class="popup" id="popup">
                   <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
                   <h3>LOGIN</h3>
                   <h4></h4>
                   <form action="">
                       <div class="contenedor-inputs">
                           <input type="text" placeholder="Nombre" name="nomlogin" id="nomlogin">
                            <input type="password" placeholder="Contraseña" name="contralogin" id="contralogin">
                       </div>
                   </form>
                   <button type="submit" class="submitlogin" value="Iniciar Sesión">Login</button>
                </div>
            </div>
        </div>
        
        <div class="contenedor2">
            <div class="overlay2" id="overlay2">
               <div class="popup2" id="popup2">
                   <a href="#" id="btn-cerrar-popup2" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
                   <h3>REGISTRO</h3>
                   <h4></h4>
                   <form action="">
                       <div class="contenedor-inputs2">
                           <input type="text" placeholder="Nombre" name="nomregistro" id="nomregistro">
                           <input type="password" placeholder="Contraseña" name="contraregistro" id="contraregistro">
                       </div>
                   </form>
                   <button type="submit" class="submitregistro" value="Resgistrarse">Registrar</button>
                </div>
            </div>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-up">
            <h1>Bienvenido</h1>
            <h2>PAGINA DE VIAJES PROYECTO TRANSVERSAL</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        </div>
        
    </section><!-- End Hero -->

    <main id="main">
        <!-- Carga de datos en SQL-->
        <section id="services" class="services">
        <div class="container">

                <div class="row">
                <p>Categoria: <p> 
    <select name="" id="categoria">
    <?php
    $inc = include("con_db.php");
    if ($inc){
        $consulta = "SELECT * FROM categoria";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            while($row = $resultado->fetch_array()){
                $id = $row['id'];
                $nom = $row['nom'];
                ?>
                <option value="<?php echo $id;?>"><?php echo $nom; ?></option>
                <?php
            }
        }   
    }          
    ?>
    <option value="9999">Totes</option>
    

    </select>
    
    <input type="button" id="consulta" value="Consulta">
    <div class="exps">
    </br><h3> Experiencias</h3>
    </div>
    
    
    <div class="row" id="experiencias">
        
    </div> 
    
    </div>
    
    <input type="submit" class="btn-submit1" id="experiencia" value="Crear Experiencia">
    <div class="contenedor2">
            <div class="overlay2" id="overlay3">
               <div class="popup2" id="popup3">
                   <a href="#" id="btn-cerrar-popup3" class="btn-cerrar-popup2"><i class="fas fa-times"></i></a>
                   <h3>Crear experiencia!!</h3>
                   <h4></h4>
                   <form>
                <div class="contenedor-inputs">
                <input type="text" placeholder="titol" name="titol" id="titol">
                <input type="image" placeholder="img" name="imagen" id="imagen">
                <input type="text" placeholder="descrip" name="descripcion" id="descripcion">
<!--
                <input type="number" placeholder="cont_positiu" name="positivo" id="positivo">
                <input type="number" placeholder="cont_negatiu" name="negativo" id="negativo">
-->
                <select name="transporte" id="categorias">
                    <option value="1">Bosque</option>
                    <option value="2">Playa</option>
                    <option value="3">Todas</option>

                </select>
            </div>

        </form>
        <button type="submit" class="submitsubex" value="Subir Experiencia">Subir experiencias</button>
                </div>
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
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escríbenos" placeholder="Mensaje"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message">Parece que ha habido un problema al enviar el mensaje. Por favor, vuelvelo a intentar</div>
                                <div class="sent-message">Tu mensaje se ha enviado, gracias.</div>
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
<!--    <script src="./assets/js/experiencias.js"></script>                        -->
</body></html>
