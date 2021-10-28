<?php
   $Titulo = "Equipo de Trabajo";
   $path = "";
   $nosotros = true;
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>
   <!-- page wrapper starts -->
   <!-- Jumbotron -->
      <div class="jumbotron2 jumbotron-fluid">
         <div class="container" >
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-down">
               <h1>Equipo de Trabajo</h1>
               <!-- Breadcrumbs -->
               <div class="row" style="display: flex;justify-content:center;">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                     <li class="breadcrumb-item"><a href="#">Nosotros</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Equipo de Trabajo</li>
                  </ol>
               </nav>
            </div>
               <!-- /breadcrumb -->
            </div>
            <!-- /jumbo-heading -->
         </div>
         <!-- /container -->
      </div>
      <!-- /jumbotron -->
      <!-- ==== Page Content ==== -->
      <div class="page container">
         <div class="row">
         <!-- page with sidebar starts -->
            <div class="col-lg-9 page-with-sidebar">
               <div class="container">
                  <div class="row">
                     <!-- Team style 1 -->
                     <h3 class="text-center"></h3>
                        <!-- team carousel -->
                     <div class="carousel-3items owl-carousel owl-theme mt-5">
                        <!-- Team member 1 -->
                        <div class="col-md-12 team-style1 notepad">
                           <div class="team_img">
                              <img src="img/Alvaro_Vignola.jpeg" class="img-fluid" alt="">
                              <!-- social icons -->
                              <ul class="social">
                                 <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                 <li><a href="https://www.linkedin.com/in/alvaro-vignola-a0a159123/"><i class="fab fa-linkedin"></i></a></li>
                                 <li><a href="#"><i class="fa fa-phone"></i></a></li>
                              </ul>
                           </div>
                           <!-- /team_img -->
                           <div class="team-content">
                                 <h5 class="title">Álvaro Vignola</h5>
                              <p><b>Coordinador General proyecto casa Hogar la Huella</b></p>
                           </div>
                           <!-- /team-content -->
                        </div>
                        <div class="col-md-12 team-style1 notepad">
                           <div class="team_img">
                              <img src="img/Ariel_Sotelo.jpg" class="img-fluid" alt="">
                              <!-- social icons -->
                              <ul class="social">
                                 <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                 <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                 <li><a href="#"><i class="fa fa-phone"></i></a></li>
                              </ul>
                           </div>
                           <!-- /team_img -->
                           <!-- /team_img -->
                           <div class="team-content">
                                 <h5 class="title">Fatima Hernandez</h5>
                              <p><b>Coordinadora CAIF los periquitos</b></p>
                           </div>
                           <!-- /team-content -->
                        </div>
                        <div class="col-md-12 team-style1 notepad">
                           <div class="team_img">
                              <img src="img/team2.jpg" class="img-fluid" alt="">
                              <!-- social icons -->
                              <ul class="social">
                                 <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                 <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                 <li><a href="#"><i class="fa fa-phone"></i></a></li>
                              </ul>
                           </div>
                           <!-- /team_img -->
                           <div class="team-content">
                                 <h5 class="title">Carlos Garcia</h5>
                              <p><b>Coordinador SOCAT</b></p><br><br>
                           </div>
                           <!-- /team-content -->
                        </div>
            
                        <!-- /team-style1 -->
                     </div>
                     <!-- /owl-team-->
                  </div>
                  <!-- /container-->
                  <!-- /bg-light-custom -->
               </div>
               
            </div>
            <div id="sidebar" class="h-50 col-lg-3 sticky-top">
               <!--widget-area -->
               <div class="widget-area notepad" >
                  <h5 class="sidebar-header" id="cuadro1">Nuestro Equipo</h5>
                  <!-- widget -->		 
                  <div class="widget2">
                     <div class="card">
                        <div class="card-img">
                           <!-- image  -->	
                           <a href="equipotrabajo.php">
                           <img class="rounded card-img-top" src="img/about/400x300.jpg" alt="" >
                           </a>
                        </div>
                        <div class="card-body">
                           <!--  info -->	
                           <a href="team.html" class="text-center">
                              <p style="text-align: justify">Conoce al grupo de personas que pone en marcha el grupo hogar La Huella</p>
                           </a>
                           <!-- button -->	
                           <a href="equipotrabajo.php" class="btn btn-secondary btn-block btn-sm" id="cuadro2">Leer más</a>
                        </div>
                        <!--/card-body -->	
                     </div>
                     <!-- /card -->	
                  </div>
                  <!--/widget2 -->
               </div>
               <!--/widget-area -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header" id="cuadro3">Nuestra Misión</h5>
                  <p style="text-align: justify">Crear un espacio para cobijar bajo nuestro techo y privilegiar al niño postergado o abandonado</p>
               </div>
               <!--/widget-area -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header" id="cuadro4">Síguenos</h5>
                  <div class="contact-icon-info">
                  <ul class="social-media text-center">
                        <!--social icons -->
                        <li class="list-inline-item"><a title="Facebook" target="_blank"  href="https://www.facebook.com/Hogar.La.Huella/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a title="YouTube" target="_blank"  href="https://www.youtube.com/channel/UCjqTR8EUH4xD-zGGgsIidvg"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a  title="Instagram" target="_blank"  href="https://www.instagram.com/hogarlahuella/"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a  title="Pinterest" target="_blank"  href="#"><i class="fab fa-pinterest"></i></a></li>
                     </ul>
                  </div>
                  <!--/contact-icon-info -->
               </div>
               <!--/widget-area -->
            </div>
         </div>
      </div>
      <?php
         include 'plantillas/footer.php';
      ?>