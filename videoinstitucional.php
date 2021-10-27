<?php
   $Titulo = "Video Institucional";
   $path = "";
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>

<!-- page wrapper starts -->
<!-- Jumbotron -->
   <div class="jumbotron jumbotron-fluid">
      <div class="container" >
         <!-- jumbo-heading -->
         <div class="jumbo-heading" data-aos="fade-down">
            <h1>Video Institucional</h1>
            <!-- Breadcrumbs -->
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
         <div class="col-lg-12">
         <h2 class="mb-2"></h2>
            <!-- Post info-->
            <hr>
            <!-- Preview Image -->
            <div class="row" style="display: flex; justify-content: center;">
            <img src="img/gallery/La Huella.jpg" class="img-fluid" alt="">
            </div>
            <hr>
            <p style="text-align: justify">La Huella esta conformada por 4 proyectos sociales y Educativos.<br>
            Los desafíos de la huella fue adecuarse de forma continua a la nuevas situaciones. la huella surge de una vertiente de la profesión fe cristiana con valores cristianos abiertos a todo aquel que no tenga creencias esa es la base de nuestra identidad. El proyecto casa forma parte de lo que llamámos CAFF es un centro de acogimiento y fortalecimiento familiar, otro proyecto es el PAE es el proyecto de autonomía y egreso es el primer paso de transición entre que salen de la casa al siguiente paso que es la autonomía. </h5>
            <!-- custom list -->
            
            <p style="text-align: justify">En el año 2000 empezarón a llegar muchas familias a la huella.
               El club de niños de la Huella trabaja desde el año 2001 actualmente trabajamos con 54 chiquiines y 29 familias. El caif surge hace 15 años en el 2004 y atendemos a un total de 84 niños de hasta 3 años.
               El SOCAT son siglas que significan Servicio de Orientacion y Consulta y Articulación Territorial en lo que se basa es en atender en distintos puntos del barrio. Es un convenio con MIDES donde nosotros tambien prestamos servicios y orientamos a todos los programas de MIDES
            </p>
            <div class="row" style="display:flex;justify-content:center">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/vW_7fucmcJw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         <!-- /ul -->
         <!-- custom link -->
         
		   </div>
         <!-- /col-lg-12-->
      </div>
      <!-- /page-with-sidebar -->
      <!-- ==== Sidebar ==== -->
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
                           <a href="equipotrabajo.php" class="text-center">
                              <p style="text-align: justify"><strong>Conoce al grupo de personas que pone en marcha el hogar La Huella</strong></p>
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
                        <li class="list-inline-item"><a  title="Pinterest" target="_blank"  href="https://www.instagram.com/hogarlahuella/"><i class="fab fa-pinterest"></i></a></li>
                     </ul>
                  </div>
                  <!--/contact-icon-info -->
               </div>
               <!--/widget-area -->
            </div>
         </div>
      </div>
<!--/ page-wrapper -->

<?php
   include 'plantillas/footer.php';
?>