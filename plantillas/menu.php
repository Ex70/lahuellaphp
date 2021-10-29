</head>
<body id="top">
    <!-- Preloader -->
    <div id="preloader">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <!-- <div class="preloader-logo">
                    <div class="spinner">
                        <div class="dot1"></div>
                        <div class="dot2"></div>
                    </div>
                </div> -->
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

      <?php if(!empty($slide)) { ?>
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
<?php } ?>