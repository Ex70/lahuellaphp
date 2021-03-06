<?php
   $Titulo = "CAIF";
   $path = "";
   $programas = true;
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>
      <!-- page wrapper starts -->
      <!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>CAIF</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
               <li class="breadcrumb-item"><a href="#">Programas</a></li>
               <li class="breadcrumb-item active" aria-current="page">CAIF</li>
            </ol>
         </nav>
         <!-- /breadcrumb -->
      </div>
      <!-- /jumbo-heading -->
   </div>
   <!-- /container -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<div class="page">
   <div class="container">
      <div class="row">
         <!-- page with sidebar starts -->
         <div class="col-lg-9 page-with-sidebar">
            <div class="col-md-12">
               <h2>CAIF Los Periquitos</h2>
               <!-- Image -->
               <p class="h7"></p>
               <p style="text-align: justify">Funciona desde 2004, atendiendo población de las zonas de Pueblo Nuevo, Villa Ilusión, Herten y Corfrisa. En la actualidad se atiende a 85 niñ@s y sus familias con el objetivo de acompañar su desarrollo integral. Con el fin de asegurar este objetivo se despliegan dos programas:<br>
               </p>
               <!-- row -->
               <div class="row">
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme ">
                        <img src="img/services/Los Periquitos.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia11.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia12.jpg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <!-- /col-md- -->
                  </div>
                  <!-- /col-md -->
                  <div class="col-md-7">
                     <h4><b>Primer Programa</b></h4>
                     <!-- Image -->
                     <p style="text-align: justify">Educación inicial:<br>
               Atiende a nin@ de 2 y 3 años, en modalidad diaria de dos turnos: matutino (9 a 13 horas) y vespertino (13 a 17 horas), organizado en cuatro grupos:<br><br>

               nivel 2 años matutino<br>
               nivel 3 años matutino<br>
               nivel 3 años vespertino<br>
               Extensión horaria (conformado por niñ@s de los grupos matutinos que asisten hasta las 17 horas).<br><br>

               Cada grupo está a cargo de una educadora acompañada por una maestra especializada en el área de Educación Inicial para la planificación del trabajo en sala.
                     </p>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-7">
                     <h4><b>Segundo Programa</b></h4>
                     <!-- Image -->
                     <p>Experiencias oportunas:<br>
                           Atiende a niñ@s de 0 a 24 meses y referentes familiares, en modalidad de talleres semanales con tres horas de duración organizado en tres grupos:<br><br>

                           E.O “chicos” 0 a 12 meses, los jueves a la tarde.<br>
                           E.O “grandes” 12 a 24 meses, los lunes a la tarde.<br>
                           E.O. “mañanero” 0 a 24 meses, los jueves a la mañana.<br>
                           Los talleres son coordinados por psicomotricista y educadoras.<br><br>

                     </p>
                     <a href="contacto.php" class="btn btn-secondary mt-3" id="contacicon">Contáctanos</a>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme ">
                        <img src="img/services/Fotografia15.jpeg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia14.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia13.jpeg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <!-- /col-md- -->
                  </div>
                  <!-- /col-md -->
               </div>
               <!-- /row -->
            </div>
            <!-- /col-md-12 -->
         </div>
         <!-- /col-lg-9 -->
         <!-- ==== Sidebar ==== -->
         <div id="sidebar" class="col-lg-3 h-50 sticky-top">
            <!--widget area-->
            <div class="widget-area notepad">
               <h5 class="sidebar-header" id="servicioicon">Programas</h5>
               <div class="list-group">
               <a href="hogar.php" class="list-group-item list-group-item-action">
                  Hogar La Huella
                  </a>
                  <a href="clubdeniños.php" class="list-group-item list-group-item-action">Club de niños</a>
                  <a href="caif.php" class="list-group-item list-group-item-action active">CAIF</a>
                  <a href="storta.php" class="list-group-item list-group-item-action">La Storta</a>
                  <a href="espacioadolescente.php" class="list-group-item list-group-item-action">Espacio Adolescente</a>
               </div>
               <!-- /list-group -->
            </div>
            <!-- /widget-area -->
         </div>
         <!-- /sidebar -->
      </div>
      <!-- /row-->
   </div>
   <!-- /container-->
</div>
<!-- /page --></div>
<!--/ page-wrapper -->

<?php
   include 'plantillas/footer.php';
?>