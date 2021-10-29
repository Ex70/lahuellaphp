<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- page title -->
    <title>LA HUELLA | <?php echo $Titulo; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,900&display=swap" rel="stylesheet">
    <link href="fonts/flaticon/flaticon.css" rel="preload" as="font" type="text/css">
    <link href="fonts/fontawesome/fontawesome-all.min.css" rel="preload" as="font" type="text/css">
    <!-- Fav icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- style CSS -->
    <link href="css/style2.css" rel="stylesheet">
    <!-- plugins CSS -->
    <link href="css/plugins.css" rel="stylesheet">
    <!-- Colors CSS -->
    <link href="styles/maincolors.css" rel="stylesheet">
    <!-- LayerSlider CSS -->
    <link rel="stylesheet" href="vendor/layerslider/css/layerslider.css">
    <!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="switcher/css/switcher.css" media="all" />
    <!-- END Switcher Styles -->
    <link rel="alternate stylesheet" type="text/css" href="styles/maincolors.css" title="maincolors" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/kindergarten.css" title="kindergarten" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/playtime.css" title="playtime" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="styles/preschool.css" title="preschool" media="all" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-76370337-3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-76370337-3');
    </script> -->

   
<!-- /container-fluid -->

</head>
<body id="top">
    <!-- Preloader -->
    <div id="preloader">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="preloader-logo">
                    <!-- spinner -->
                    <div class="spinner">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div>
                <!--/preloader logo -->
            </div>
            <!--/row -->
        </div>
        <!--/container -->
    </div>
    <!--/Preloader ends -->
    <nav id="main-nav" class="navbar-expand-xl fixed-top">
        <div class="row">
            <!-- Start Top Bar -->
            <div class="container-fluid top-bar" id="barrasuperior" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Start Contact Info -->
                            <ul class="contact-details float-left">
                                <li><i class="fa fa-map-marker"></i>Las Piedras, Canelones, Uruguay</li>
                                <li><i class="fa fa-envelope"></i><a href="mailto:lahuella1975@gmail.com"> lahuella1975@gmail.com </a></li>
                                <li><i class="fa fa-phone"></i><a href="tel:+59823650827">2365 0827</a></li>
                                <li class="mb-1"><i class="fab fa-whatsapp margin-icon "></i><a href="https://api.whatsapp.com/send?phone=59892250746&text=Quiero%20solicitar%20informaci%C3%B3n"target="_blank">598 92 250 746</i></li>
                            </ul>
                            <!-- End Contact Info -->
                            <!-- Start Social Links -->
                            <ul class="social-list float-right list-inline">
                                <li class="list-inline-item"><a title="Facebook" target="_blank" href="https://www.facebook.com/Hogar.La.Huella/"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a  title="Instagram" target="_blank" href="https://www.instagram.com/hogarlahuella/"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a title="YouTube" target="_blank" href="https://www.youtube.com/channel/UCjqTR8EUH4xD-zGGgsIidvg"><i class="fab fa-youtube"></i></a></li>
                                <li class="list-inline-item"><a  title="Pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                            <!-- /End Social Links -->
                        </div>
                        <!-- col-md-12 -->
                    </div>
                <!-- /row -->
                </div>
            <!-- /container -->
            </div>
            <!-- End Top bar -->
            <!-- Navbar Starts -->
            <div class="navbar container-fluid">
                <div class="container ">
                    <!-- logo -->
                    <a class="nav-brand" href="index.php">
                        <img src="img/logo.png" alt="" class="lazyload img-fluid">
                    </a>
                    <!-- Navbar toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggle-icon">
                            <i class="fas fa-bars"></i>
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <!-- menu item -->
                            <li class="nav-item home-menu">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item dropdown <?php echo (!empty($nosotros)) ? 'active' : ''; ?>">
                                <a class="nav-link dropdown-toggle " href="#" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                                <div class="dropdown-menu" aria-labelledby="services-dropdown">
                                    <a class="dropdown-item" href="hogarlahuella.php">A.C. Hogar La Huella</a>
                                    <a class="dropdown-item" href="comisiondirectiva.php">Comisión Directiva</a>
                                    <a class="dropdown-item" href="equipotrabajo.php">Equipo de Trabajo</a>
                                    <a class="dropdown-item" href="laspiedras.php">Las Piedras, Canelones</a>
                                </div>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item dropdown <?php echo (!empty($programas)) ? 'active' : ''; ?>">
                                <a class="nav-link dropdown-toggle " href="#" id="services-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Programas</a>
                                <div class="dropdown-menu" aria-labelledby="services-dropdown">
                                    <a class="dropdown-item" href="hogar.php">Hogar</a>
                                    <a class="dropdown-item" href="clubdeniños.php">Club de Niños</a>
                                    <a class="dropdown-item" href="caif.php">CAIF</a>
                                    <a class="dropdown-item" href="storta.php">La Storta</a>
                                    <a class="dropdown-item" href="espacio-adolescente.php">Espacio Adolescente</a>
                                </div>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item dropdown menuRojo">
                                <a class="nav-link dropdown-toggle menuRojo" href="#" id="about-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Colaborar</a>
                                <div class="dropdown-menu" aria-labelledby="about-dropdown" id="colorRojo2">
                                    <a class="dropdown-item" href="apoyoeconomico.php">Apoyo Económico</a>
                                    <a class="dropdown-item" href="apoyoenespecie.php">Apoyo en Especie</a>
                                    <a class="dropdown-item" href="apoyoenservicios.php">Apoyo en Servicios</a>
                                    <a class="dropdown-item" href="voluntarios.php">Voluntarios</a>
                                    <a class="dropdown-item" href="alianzas.php">Alianzas</a>
                                    <a class="dropdown-item" href="saloneventos.php">Salón de Eventos</a>
                                </div>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item dropdown <?php echo (!empty($instalaciones)) ? 'active' : ''; ?>">
                                <a class="nav-link dropdown-toggle" href="#" id="gallery-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeria</a>
                                <div class="dropdown-menu" aria-labelledby="gallery-dropdown">
                                    <a class="dropdown-item" href="instalaciones.php">Instalaciones</a>
                                    <a class="dropdown-item" href="actividades.php">Actividades</a>
                                    <a class="dropdown-item" href="salon-de-eventos.php">Salón de Eventos</a>
                                    <a class="dropdown-item" href="historicas.php">Históricas</a>
                                </div>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item dropdown <?php echo (!empty($novedades)) ? 'active' : ''; ?>">
                                <a class="nav-link dropdown-toggle" href="#" id="others-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Novedades</a>
                                <div class="dropdown-menu" aria-labelledby="others-dropdown">
                                    <a class="dropdown-item" href="blog.php">Blog</a>
                                    <a class="dropdown-item" href="boletin.php">Boletín</a>
                                    <a class="dropdown-item" href="librohistoria.php">Libro</a>
                                    <a class="dropdown-item" href="videoinstitucional.php">Video Institucional</a>
                                </div>
                            </li>
                            <!-- menu item -->
                            <li class="nav-item <?php echo (!empty($contacto)) ? 'active' : ''; ?>">
                                <a class="nav-link" href="contacto.php" id="contact-dropdown" >Contacto</a>
                            </li>
                        </ul>
                        <!--/ul -->
                    </div>
                    <!--collapse -->
                </div>
                <!-- /container -->
            </div>
            <!-- /navbar -->
        </div>
        <!--/row -->
    </nav>
    <!-- /nav -->

    <!-- page wrapper starts -->
    <div id="page" class="head0"><!-- Jumbotron -->
        <div class="container-fluid p-0">
            <!-- Draggable Slider -->
            <div class="slider-container">
                <!-- Controls -->
                <div class="slider-control left inactive"></div>
                <div class="slider-control right"></div>
                <ul class="slider-pagi"></ul>
                <!--Slider -->
                <div class="slider">
                    <!-- Slide 0 -->
                    <div class="slide slide-0 active" style="background-image:url('img/slider/dragslider-0b.jpg')">
                        <div class="slide__bg"></div>
                        <div class="slide__content">
                            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                            </svg>
                            <!-- slide text-->
                            <div class="slide__text">
                            <h1 class="slide__text-heading">Bienvenido a La Huella</h1>
                            <div class="hidden-small">
                                <p class="lead">Un grupo de jóvenes en una chacra de Las Piedras pone en marcha un hogar para niños abandonados.</p>
                                <a href="hogarlahuella.php" class="btn btn-quaternary" id="colorAmarillo">¿Quienes somos?</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 1 -->
                    <div class="slide slide-1" style="background-image:url('img/slider/dragslider-1.jpg')">
                        <div class="slide__bg"></div>
                        <div class="slide__content">
                            <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                            </svg>
                            <!-- slide text-->
                            <div class="slide__text">
                            <h1 class="slide__text-heading">La infancia: nuestra apuesta por un mundo mejor</h1>
                            <div class="hidden-small">
                                <p class="lead">Get inspired by seeing the children excited about learning, book a visit and experience our curriculum in action</p>
                                <a href="contacto.php" class="btn btn-quaternary" id="colorAmarillo">Colaborá con nosotros</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="slide slide-2" style="background-image:url('img/slider/dragslider-2.jpg')">
                        <div class="slide__bg"></div>
                        <div class="slide__content">
                                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
                        </svg>
                            <!-- slide text-->
                            <div class="slide__text">
                            <h1 class="slide__text-heading">Salón de Fiestas y Eventos</h1>
                            <div class="hidden-small">
                                <p class="lead"> La Huella presta su salón para la realización de reuniones o fiestas.</p>
                                <a href="saloneventos.php" class="btn btn-quaternary" id="colorAmarillo">Informes</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--/Slide2 -->
                </div>
                    <!--/Slider-->
            </div>
            <!--/ Draggable Slider ends -->
        </div>
</div>


<!-- ==== Page Content ==== -->
 <!-- section -->
<section id="about-home" class="container-fluid pb-0">
   <div class="container">
      <!-- section heading -->  
      <div class="section-heading text-center" data-aos="fade-down">
         <h2>Programas Principales</h2>
         <p class="subtitle">Conócenos</p>
      </div>
      </div>
   <div class="container">
   <!-- section -->  
   <section id="intro-cards"  class="row cards-no-margin">
      <!-- card 1 -->  
      <div class="col-lg-4" data-aos="zoom-out">
         <div class="card card-flip">
            <!-- front of card  -->  
            <div class="card bg-secondary text-light ">
               <div class="p-5">
                  <h5 class="card-title text-light">Hogar<br>La Huella</h5>
                  <p class="card-text">
                   Es un centro educativo que alberga a 22 niñas/os y adolescentes. Luego un educador los acompaña a su lugar de estudio; concurren a distintas instituciones de la zona (Escuelas, Liceos, UTU, CECAP, Aulas comunitarias, PAGRO).
                  </p>
                  <!-- button show on mobile only,where flip is disabled -->
                  <a href="hogar.php" class="btn d-lg-none">Leer Más</a>
               </div>
               <!-- /p-5 -->
               <!-- image -->
               <picture>
                    <source srcset="img/intro1.webp" type="image/webp">
                    <source srcset="img/intro1.jpg" type="image/jpeg"> 
                    <img class="lazyload card-img" src="img/intro1.webp">
                </picture>
               <!-- <picture>
                <source type="image/webp" srcset="img/intro1.webp">
                <img data-src="img/intro1.jpg" class="lazyload card-img">
            </picture> -->
               <!-- <img class="lazyload card-img" data-src="img/intro1.webp.jpg" alt=""> -->
            </div>
            <!-- /card -->
            <!-- back of card -->  			
            <div class="card bg-secondary text-light card-back">
               <div class="card-body d-flex justify-content-center align-items-center">
                  <div class="p-4">
                     <h5 class="card-title text-light">Desde 1975</h5>
                     <p class="card-text">Nació en 1975, en un mundo sin celulares ni internet. A dos 
                        años del golpe de Estado en Uruguay y consolidado el gobierno militar, 
                        no había libertad de reunión ni de expresión.
                     </p>
                     <!-- button -->
                     <a href="hogar.php" class="btn">Leer Más</a>
                  </div>
                  <!-- /p-4 -->
               </div>
               <!-- /card-body -->
            </div>
            <!-- /card -->
         </div>
         <!--/col-lg -->
      </div>
      <!--/card 1 -->  
      <!-- card 2-->  
      <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
         <div class="card card-flip ">
            <!-- front of card  -->  
            <div class="card bg-primary text-light">
               <div class="p-5">
                  <h5 class="card-title text-light">Club de Niños La Huellita</h5>
                  <p class="card-text">
                   Es un proyecto en convenio con INAU que funciona con modalidad de tiempo parcial de<br> lunes a viernes<br> durante el horario de la mañana.<BR><BR><BR><BR>
                  </p>
                  <!-- button show on mobile only,where flip is disabled -->
                  <a href="clubdeniños.php" class="btn d-lg-none">Leer Más</a>
               </div>
               <!-- /p-5 -->
               <!-- image -->
               <img class="lazyload card-img" data-src="img/intro2.webp" alt="">
            </div>
            <!-- /card -->
            <!-- back of card -->  			
            <div class="card bg-primary text-light card-back">
               <div class="card-body d-flex justify-content-center align-items-center">
                  <div class="p-4">
                     <h5 class="card-title text-light">Didáctico y Divertido</h5>
                     <p class="card-text">Es un espacio educativo para niños y niñas en edad escolar que, como experiencia asociativa y formativa, promueve el aprendizaje cooperativo a través de diversos talleres.
                     </p>
                     <!-- button -->
                     <a href="clubdeniños.php" class="btn">Leer Más</a>
                  </div>
                  <!-- /p-4 -->
               </div>
               <!-- /card-body -->
            </div>
            <!-- /card -->
         </div>
         <!--/card 2 -->
      </div>
      <!--/col-lg -->
      <!-- card 3-->  
      <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="600">
         <div class="card card-flip ">
            <!-- front of card  -->  
            <div class="card bg-tertiary text-light" id="colorAmarillo">
               <div class="p-5">
                  <h5 class="card-title text-light">CAIF<br> Los Periquitos</h5>
                  <p class="card-text">
                  Funciona desde 2004, atendiendo población de las zonas de Pueblo Nuevo, Villa Ilusión,<br> Herten y Corfrisa. En la actualidad se atiende a 85 niñ@s y sus familias con el objetivo de acompañar su desarrollo integral.
                  </p>
                  <!-- button show on mobile only,where flip is disabled -->
                  <a href="caif.php" class="btn d-lg-none">Leer Más</a>
               </div>
               <!-- /p-5 -->
               <!-- image -->
               <img class="lazyload card-img" data-src="img/intro3.jpg" alt="">
            </div>
            <!-- /card -->
            <!-- back of card -->  			
            <div class="card bg-tertiary text-light card-back">
               <div class="card-body d-flex justify-content-center align-items-center" id="colorAmarillo">
                  <div class="p-4">
                     <h5 class="card-title text-light">Conoce a nuestro personal</h5>
                     <p class="card-text">Cada grupo está a cargo de una educadora acompañada por una maestra<br> especializada en el área de Educación Inicial para la planificación del trabajo en sala.
                     </p>
                     <!-- button -->
                     <a href="caif.php" class="btn">Leer Más</a>
                  </div>
                  <!-- /p-4 -->
               </div>
               <!-- /card-body -->
            </div>
            <!-- /card -->
         </div>
         <!--/card 3 -->
      </div>
      <!--/col-lg -->
   </section>
   <!-- #intro-cards --> 
</div>
<!-- /container --> 
   <!-- whale in water scene -->
   <!-- whale -->
   <img data-src="img/ornaments/whale.png" class="lazyload floating-whale" alt="">
   <!-- waves -->
   <div class="waveHorizontals">
      <div id="waveHorizontal1" class="waveHorizontal"></div>
      <div id="waveHorizontal2" class="waveHorizontal"></div>
      <div id="waveHorizontal3" class="waveHorizontal"></div>
   </div>
   <!-- sea -->
   <div class="sea"></div>
   <!--/ whale in water scene ends -->
</section>
<!-- /section ends -->

<!-- section -->
<section id="services-home" class="bg-secondary ">
   <div class="container pb-5">
      <!-- section heading -->  
      <div class="section-heading text-center text-light" data-aos="fade-down">
         <h2>Otros Servicios y Programas</h2>
         <p class="subtitle">Únicos de La Huella</p>
      </div>
      <!-- /section heading -->
        <div class="carousel-3items owl-carousel owl-theme col-lg-12">
            <!-- service 1  -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="actividades.php">
                  <img data-src="img/servicio1.jpg" alt="" class="lazyload blob img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="acompañamientofamiliar.php">
                     <h4 class="service-head">Acompañamiento Familiar</h4>
                  </a>
                  <p>
                  Se desarrollan diversas actividades extraordinarias, por ejemplo: actividades recreativas en los barrios, el Periniño, la participación en las Fiestas Mayas y en la Expo Educa, el Guisito Amigo, reuniones y talleres con familias.
                  </p>
                  <!-- Button -->	 
                  <a href="acompañamientofamiliar.php" class="btn btn-quaternary  btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
            <!-- service 2  -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="saloneventos.php">
                  <img data-src="img/services/service2.webp" alt="" class="lazyload blob2 img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="saloneventos.php">
                     <h4 class="service-head">Salon de<br>Eventos</h4>
                  </a>
                  <p>
                  La Huella presta su salón para la realización de reuniones o fiestas. Por consultas, por favor comunicarse.<br><br><br><br><br>

                  
                  </p>
                  <!-- Button -->	 
                  <a href="saloneventos.php" class="btn btn-quaternary btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
            <!-- service 3  -->
            <!-- service 4  -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="storta.php">
                  <img data-src="img/comunidadstorta.JPG" alt="" class="lazyload blob2 img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="storta.php">
                     <h4 class="service-head">Comunidad La Storta</h4>
                  </a>
                  <p>
                     La propuesta tiene como origen dos grandes fuerzas. Por un lado, pretende tomar una experiencia comunitaria chilena “La Storta”, donde jóvenes viven una experiencia de comunidad, espiritualidad y apostolado intensa.
                  </p>
                  <!-- Button -->	 
                  <a href="storta.php" class="btn btn-quaternary btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
            <!-- service 5 -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="actividades.php">
                  <img data-src="img/paseos.jpg" alt="" class="lazyload blob img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="actividades.php">
                     <h4 class="service-head">Paseos y Actividades</h4>
                  </a>
                  <p>
                  Cuando los niños llegan, a las 8 de la mañana, se realizan múltiples actividades: los que tienen deberes escolares, cuentan con un espacio para realizar las tareas con el apoyo de la maestra y un educador; otros juegan en el patio.
                  </p>
                  <!-- Button -->	 
                  <a href="actividades.php" class="btn btn-quaternary btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
               
            </div>
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="espacio-adolescente.php">
                  <img data-src="img/jovenes.jpg" alt="" class="lazyload blob img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="espacio-adolescente.php">
                     <h4 class="service-head">Espacio Adolescente</h4>
                  </a>
                  <p>
                  Plantear el concepto de las "adolescencias" busca captar al sujeto adolescente desde su singularidad con las diferentes formas de aprender el mundo, de acuerdo a sus contextos, su historia familiar y personal.
                  </p>
                  <!-- Button -->	 
                  <a href="espacio-adolescente.php" class="btn btn-quaternary  btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
         </div>
         <!-- /owl-services --> 
   </div>
   <!-- /container -->
</section>
<!-- /section ends -->
<!-- Section  -->
<section id="counter-section" class="container-fluid counter-calltoaction bg-fixed overlay"  data-100-bottom="background-position: 50% 100px;"
   data-top-bottom="background-position: 50% -100px;" >
   <div id="counter" class="container">
      <div  class="row col-lg-10 offset-lg-1">
         <!-- Counter -->
         <div class="col-xl-4 col-md-4">
            <div class="counter">
               <div class="counter-wrapper" id="colorRojo">
                  <i class="counter-icon flaticon-balloon-playing"></i>
                  <!-- insert your final value on data-count= -->
                  <div class="counter-value" data-count="100">0</div>
                  <h3 class="title">Niños Hogar</h3>
               </div>
            </div>
            <!-- /counter -->
         </div>
         <!-- /col-lg -->
         <!-- Counter -->
         <div class="col-xl-4 col-md-4">
            <div class="counter">
               <div class="counter-wrapper" id="cuadroicon2">
                  <i class="counter-icon flaticon-family"></i>
                  <!-- insert your final value on data-count= -->
                  <div class="counter-value" data-count="900">0</div>
                  <h3 class="title">Familias Apoyadas</h3>
               </div>
            </div>
            <!-- /counter -->
         </div>
         <!-- /col-lg -->
         <!-- Counter -->
         <div class="col-xl-4 col-md-4">
            <div class="counter">
               <div class="counter-wrapper bg-tertiary" id="cuadroicon">
                  <i class="counter-icon flaticon-friendship"></i>
                  <!-- insert your final value on data-count= -->
                  <div class="counter-value" data-count="450">0</div>
                  <h3 class="title">Voluntarios</h3>
               </div>
            </div>
            <!-- /counter -->
         </div>
         <!-- /col-lg -->		 
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends-->
<!-- section -->
<section id="blogprev-home" data-100-bottom="background-position: 0% 120%;"
   data-top-bottom="background-position: 0% 100%;">
   <div class="container">
      <!-- section heading -->  
      <div class="section-heading text-center" data-aos="fade-down">
         <h2>Últimas Novedades</h2>
         <p class="subtitle">Nuestras actualizaciones</p>
      </div>
      <!-- /section-heading -->
      <!-- blog carousel -->
      <div class="carousel-3items owl-carousel owl-theme mt-0">
         <!-- blog-box -->
         <div class="blog-box">
            <!-- image -->
            <a href="Lahuella45.php">
               <div class="image"><img data-src="img/blog/cumple45.jpg" alt="" class="lazyload"/></div>
            </a>
            <!-- blog-box-caption -->
            <div class="blog-box-caption">
               <!-- date -->
               <div class="date"><span class="day">12</span><span class="month">Mayo</span></div>
               <a href="Lahuella45.php">
                  <h4>La Huella Cumple 45 Años</h4>
               </a>
               <!-- /link -->
               <p>
               La Huella es un lugar de enseñanza una organizacion en la que trabajar comunitariamente en una prestacion de servicios y entrega con gratuidad total hacia los vulnerados donde se nos manifiesta Jesús...
               </p>
            </div>
            <!-- blog-box-footer -->
                  <a href="Lahuella45.php" class="btn btn-primary " id="colorAmarillo">Leer más</a>
            <!-- /blog-box-footer -->
         </div>
         <!-- /blog-box -->
         <!-- blog-box -->
         <div class="blog-box">
            <!-- image -->
            <a href="blog-single.html">
               <div class="image"><img class="lazyload" data-src="img/blog/blogstyle2-3-3.png" alt=""/></div>
            </a>
            <!-- blog-box-caption -->
            <div class="blog-box-caption">
               <!-- date -->
               <div class="date"><span class="day">28</span><span class="month">Junio</span></div>
               <a href="videoinstitucional.php">
                  <h4>Nuestro Video Institucional</h4>
               </a>
               <!-- /link -->
               <p>
               Los desafíos de la huella fue adecuarse de forma continua a la nuevas situaciones. la huella surge de una vertiente de la profesión fe cristiana con valores cristianos abiertos a todos.
               </p>
            </div>
            <!-- blog-box-footer -->
                  <a href="videoinstitucional.php" class="btn btn-primary " id="colorAmarillo">Leer más</a>
            <!-- /blog-box-footer -->
         </div>
         <!-- /blog-box -->
         <!-- blog-box -->
         <div class="blog-box">
            <!-- image -->
            <a href="blog-single.html">
               <div class="image"><img class="lazyload" data-src="img/blog/blogstyle2-3.png" alt=""/></div>
            </a>
            <!-- blog-box-caption -->
            <div class="blog-box-caption">
               <!-- date -->
               <div class="date"><span class="day">02</span><span class="month">Julio</span></div>
               <a href="librohistoria.php">
                  <h4>El Libro Con Nuestra Historia</h4>
               </a>
               <!-- /link -->
               <p>
               Nuestra historia, que transcurre en una chacra suburbana, con niños y niñas y gente viviendo en comunidad, ordeñando vacas y criando chanchos, parece de un mundo de ficción en un pasado remoto.
               </p>
            </div>
            <!-- blog-box-footer -->
                  <a href="librohistoria.php" class="btn btn-primary " id="colorAmarillo">Leer más</a>
            <!-- /blog-box-footer -->
         </div>
         <!-- /blog-box -->
         <!-- blog-box -->
         <!-- /blog-box -->
      </div>
      <!-- /owl-carousel -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends-->
<!-- section -->		   
<section id="callout" class=" container-fluid bg-fixed">
   <div class="container">
      <!-- row -->
      <div class="row">
         <div class="col-lg-6 p-0" data-start="right: 50%;" 
            data-center="right:-5%;">
            <!-- image  -->
            <img data-src="img/call-to-action/calltoactionbg.jpg" class="lazyload img-fluid img-rounded" alt="">
         </div>
         <!-- text box  -->
         <div class="col-lg-6 bg-secondary p-5 justify-content-center align-self-center"  data-start="left: 50%;" 
            data-center="left:-5%;">
            <div class="text-light justify-content-center align-self-center">
               <h3>El mejor espacio para tus fiestas y eventos</h3>
               <p></p>
               <a href="saloneventos.php" class="btn btn-tertiary">Contacte con nosotros</a>
            </div>
            <!-- /text-light  -->
         </div>
         <!-- /col-lg  -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends -->
<!-- Section -->
<section id="contact-home" class="container">
          
            <!-- section heading -->  
            <div class="section-heading text-center" data-aos="fade-down">
               <h2>Contacto</h2>
               <p class="subtitle">Ponete en contacto</p>
            </div>
            <!-- /section-heading -->  
          <div class="container">
      <div class="row">
         <div class="col-lg-7">
            <h3>Información de contacto</h3>
            <p></p>
             <!-- contact icons-->
            <ul class="list-inline mt-3 list-contact colored-icons">
               <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i>Correo: <a href="mailto:lahuella1975@gmail.com">lahuella1975@gmail.com</a><li>
               <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>Oficina: <a href="tel:+59823650827">2365 0827</a></li>
               <li class="list-inline-item" ><i class="fa fa-map-marker margin-icon"></i>Ruta 48 Luis Pérez Aguirre, Km 19.500, 90200 Las Piedras, Canelones, Uruguay</li>
            </ul>
            <!-- /list-->
            <!-- map-->
            <div id="map-canvas" class="mt-5"></div>
            <!-- /map-->
         </div>
         <!-- /col-lg- -->
         <!-- contact box -->  
         <div class="col-lg-4 contact-form3 offset-lg-1 bg-light h-100">
            <div class="contact-image bg-light">
               <!-- envelope icon-->
               <i class="fas fa-envelope"></i>
            </div>
            <h5 class="text-center mt-3">Envíá un mensaje</h5>
            <!-- Form Starts -->
            <div id="contact_form">
            <form action="includes/contacto.php" method="post"  enctype="multipart/form-data" name="formulario">
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-12">
                        <label>Nombre<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field" required=""> 
                     </div>
                     <div class="col-md-12">
                        <label>Correo Electronico <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field" required=""> 
                     </div>
                     <div class="col-md-12">
                        <label>Asunto</label>
                        <input type="text" name="subject" class="form-control input-field"> 
                     </div>
                     <div class="col-md-12">
                        <label>Mensaje<span class="required">*</span></label>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                     </div>
                  </div>
                  <!-- button -->
                  <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary btn-block mt-3 colorAmarillo" style="background-color: #E4A40F;">Enviar mensaje</button>
               </div>
               <!-- /form-group-->
               <!-- Contact results -->
               <div id="contact_results"></div>
            </form>
            </div>
            <!-- /contact-form-->
         </div>
         <!-- /col-lg-->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /Section --></div>
<!--/ page-wrapper -->

<!-- /page -->
</div>
<!--/ page-wrapper -->

<div id="footer"  class="footer-1 1-footer">
    <svg version="1.1" id="footer-divider"  class="secondary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve" preserveAspectRatio="none slice">
        <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
    </svg>
    <!-- ==== footer ==== -->
    <footer class="bg-secondary text-light">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 text-center">
                    <!-- logo -->
                    <img src="img/logo_5.png"  class="logo-footer img-fluid" alt=""/>
                    <h5 class="mt-3">Suscribete a nuestro boletín de noticias </h5>
                    <!-- Mailist Form -->

                    <div id="mc_embed_signup">
                        <!-- your mailist address in the line bellow -->
                        <form action="https://gmail.us5.list-manage.com/subscribe/post?u=4d73ed4688ccb236b497ff0c8&amp;id=da744d303d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <div class="input-group">
                                        <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Su Correo Electrónico" id="mce-EMAIL">
                                        <span class="input-group-btn">
                                            <button class="btn btn-tertiary" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Suscríbete</button>
                                        </span>
                                    </div>
                                    <!-- Subscription results -->
                                    <div id="mce-responses" class="mailchimp">
                                        <div class="alert alert-danger response" id="mce-error-response"></div>
                                        <div class="alert alert-success response" id="mce-success-response"></div>
                                    </div>
                                </div>
                                <!-- /mc-fiel-group -->
                            </div>
                            <!-- /mc_embed_signup_scroll -->
                        </form>
                        <!-- /form ends -->
                    </div>
                    <!-- /mc_embed_signup -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center res-margin">
                    <h5>Contacta con nosotros</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1"><i class="fas fa-phone margin-icon "></i>Oficina: <a href="tel:+59823650827">2365 0827</a></li>
                        <li class="mb-1"><i class="fab fa-whatsapp margin-icon "></i>WhatsApp: <a href="https://api.whatsapp.com/send?phone=59892250746&text=Quiero%20solicitar%20informaci%C3%B3n">598 92 250 746</i></a></li>
                        <li class="mb-1"><i class="fas fa-envelope margin-icon"></i>Correo: <a href="mailto:lahuella1975@gmail.com">lahuella1975@gmail.com</a></li>
                        <li><i class="fas fa-map-marker margin-icon"></i>Ruta 48, Pbro. Luis Pérez Aguirre SJ
                        <br>Km.19,500 CP 90200</li>
                    </ul>
                    <!--/ul -->
                    <!-- Start Social Links -->
                    <ul class="social-list text-center list-inline mt-2">
                        <li class="list-inline-item"><a title="Facebook" target="_blank"  href="https://www.facebook.com/Hogar.La.Huella/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a  title="Instagram" target="_blank"  href="https://www.instagram.com/hogarlahuella/"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a title="YouTube" target="_blank"  href="https://www.youtube.com/channel/UCjqTR8EUH4xD-zGGgsIidvg"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a  title="Pinterest"  href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <!-- /End Social Links -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center">
                    <h5>Horario de Trabajo</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1">Lunes a viernes</li>
                        <li class="mb-1">Abierto de 9am a 6 pm</li>
                        <li class="mb-1">Vacaciones - Cerrado</li>
                        <li>Fines de Semana - Cerrado</li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--/ col-lg -->
            </div>
            <!--/ row-->
            <hr/>
            <div class="row">
                <div class="credits col-sm-12">
                    <p>Copyright 2021 / Diseñado Por <a href="http://www.redimensiona.mx/">redimensiona.mx</a></p>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/ container -->
        <!-- Go To Top Link -->
        <div class="page-scroll hidden-sm hidden-xs">
            <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!--/page-scroll-->
    </footer>
    <!--/ footer-->
</div>

<!-- Bootstrap core & Jquery -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
<!-- Custom Js -->
<script defer src="js/custom.js"></script>
<script defer src="js/plugins.js"></script>
<!-- Prefix free -->
<script src="js/prefixfree.min.js"></script>
<!-- Bootstrap Select Tool (For Module #4) -->
<script src="switcher/js/bootstrap-select.js"></script>
<!-- All Scripts & Plugins -->
<script src="switcher/js/dmss.js"></script>
<script src="switcher/js/extrastyles.js"></script>
 <script src="../../../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.4/js.cookie.min.js"></script>
 <script src="js/lazysizes.min.js" async=""></script>

<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

<script defer type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


<!-- number counter script -->
<script src="js/counter.js"></script>
<!-- maps -->
<script src="js/map.js"></script>
<!-- GreenSock -->
<script src="vendor/layerslider/js/greensock.js"></script>
<!-- LayerSlider script files -->
<script src="vendor/layerslider/js/layerslider.transitions.js"></script>
<script src="vendor/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="vendor/layerslider/js/layerslider.load.js"></script>
</body>

</html>

