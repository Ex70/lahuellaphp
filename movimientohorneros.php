<?php
   $Titulo = "Movimientos Horneros";
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
         <h1>Movimiento de Horneros</h1>
         <!-- Breadcrumbs -->
         <div class="row" style="display: flex;justify-content:center;">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                     <li class="breadcrumb-item"><a href="#">Colaborar</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Movimientos Horneros</li>
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
<div class="page">
   <div class="container">
      <div class="row">
         <!-- page with sidebar starts -->
         <div class="col-lg-9 page-with-sidebar">
            <div class="col-md-12">
               <h2>Movimientos Horneros
               </h2>
               <!-- Image -->
               <p class="h7"></p>
               <p>
               </p>
               <!-- row -->
               <div class="row">
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme "  data-aos="fade-in" >
                        <img src="img/services/horne1.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/horne2.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/horne3.JPG" class="img-fluid rounded-circle" alt="">
                     </div>
                     <!-- /col-md- -->
                  </div>
                  <!-- /col-md -->
                  <div class="col-md-7">
                     <h4></h4>
                     <!-- Image -->
                     <p>Voluntarios del movimiento Horneros del Colegio Seminario han estado yendo a La Huella los s??bados a dar una mano en distintas tareas. Se ha estado trabajando mucho en la huerta y tambi??n en cualquier otro trabajo que se necesite, ya sea podando los cercos, limpiando el terreno, y m??s. Se comparte un muy lindo rato con los chicos del hogar, trabajando juntos, terminando luego jugando al futbol.Como parte del compromiso que el Movimiento Horneros tiene con La Huella, todos los a??os se organiza una venta de bonos donde los alumnos del Colegio Seminario salen a diversos puntos de Montevideo. Todo lo recaudado se destina a La Huella..<br><br> 
                     </p>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-7">
                     <h4></h4>
                     <!-- Image -->
                     <p> Afortunadamente, a??o a a??o se ha observado un incremento de j??venes que participan de esta actividad, asi como su compromiso por la causa y fondos recolectados.<br><br>
                     </p>
                     <a href="contacto.php" class="btn btn-secondary mt-3" id="contacicon">Cont??ctanos</a>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme "  data-aos="fade-in" >
                        <img src="img/services/horne4.JPG" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/horne5.JPG" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/horne6.JPG" class="img-fluid rounded-circle" alt="">
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
               <h5 class="sidebar-header" id="servicioicon">Voluntarios</h5>
               <div class="list-group">
                  <a href="experienciastorta.php" class="list-group-item list-group-item-action">
                  Experiencia La Storta
                  </a>
                  <a href="Voluntariosjuan.php" class="list-group-item list-group-item-action">Voluntarios del Juan XXIII</a>
                  <a href="lahuerta.php" class="list-group-item list-group-item-action">La Huerta</a>
                  <a href="movimientohorneros.php" class="list-group-item list-group-item-action active">Movimiento Horneros</a>
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