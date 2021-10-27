<?php
   $Titulo = "Hogar La Huella";
   $path = "";
   $programas = true;
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>
      <!-- page wrapper starts -->
      <!-- Jumbotron -->
<div class="jumbotron3 jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>Hogar</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
               <li class="breadcrumb-item"><a href="services.php">Servicios</a></li>
               <li class="breadcrumb-item active" aria-current="page">Hogar</li>
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
               <h2>Hogar La Huella</h2>
               <!-- Image -->
               <p class="h7"></p>
               <p style="text-align: justify">El Hogar La Huella es un centro educativo que alberga a 22 niñas/os y adolescentes. Luego un educador los acompaña a su lugar de estudio; concurren a distintas instituciones de la zona (Escuelas, Liceos, UTU, CECAP, Aulas comunitarias, PAGRO).  <br>
               Mientras tanto, en la casa comienzan a levantarse los que estudian por la tarde, luego del desayuno realizan algunas tareas de la casa acompañados por un educador y con la finalidad de que cada uno vaya adquiriendo hábitos, siempre teniendo en cuenta su edad. Mas tarde se realizan los deberes, y a jugar… Durante la semana el almuerzo se realiza en dos turnos por los diferentes horarios.<br><br> 
               El equipo de trabajo está compuesto por educadores, cocinera, auxiliar de servicio, trabajadora social, psicóloga, y coordinador operativo. Además de los que se comparten con todos los restantes proyectos de La Huella, coordinador general, administrativo, auxiliar de mantenimiento y sereno, huerta, catequesis, scout, clubes de niños. Nuestro gran objetivo como equipo es, contribuir a la construcción de personas autónomas, críticas y solidarias que puedan promoverse y desarrollarse plenamente en una sociedad de cambios vertiginosos. Todo ello en el marco de los derechos del niño/a y adolescentes y derechos humanos
               </p>
               <!-- row -->
               <div class="row">
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme "  data-aos="fade-in" >
                        <img src="img/services/La Huella.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia1.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia2.jpg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <!-- /col-md- -->
                  </div>
                  <!-- /col-md -->
                  <div class="col-md-7">
                     <h4>Actividades Divertidas</h4>
                     <!-- Image -->
                     <p style="text-align: justify">Un día a la semana hay un espacio de asamblea donde se plantean temas importantes que refieren a la convivencia y a las expectativas que tienen en la vida desde diferentes áreas. Luego ven alguna película, juegan un rato con la computadora, cenan todos juntos y a la cama. Muchos concurren a diferentes actividades dentro y fuera de La Huella, viendo los intereses y necesidades de cada uno y acotado por los recursos. Plástica, natación, fútbol, voleibol, basquetbol, hándbol, ballet, pintura, texturado.<br><br>
                     </p>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-7">
                     <h4></h4>
                     <!-- Image -->
                     <p style="text-align: justify">Nuestro trabajo es educar, contener, orientar y acompañar a cada uno de estos niños/as y adolescentes interviniendo para que se cumplan sus derechos individuales tratando de brindarles herramientas que les sean útiles durante el desarrollo de su vida
                     </p>
                     <a href="contacto.php" class="btn btn-secondary mt-3" id="contacicon">Contáctanos</a>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme "  data-aos="fade-in" >
                        <img src="img/services/Fotografia3.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia4.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/Fotografia5.jpg" class="img-fluid rounded-circle" alt="">
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
               <h5 class="sidebar-header" id="servicioicon">Servicios</h5>
               <div class="list-group">
                  <a href="hogar.php" class="list-group-item list-group-item-action active">
                  Hogar La Huella
                  </a>
                  <a href="clubdeniños.php" class="list-group-item list-group-item-action">Club de niños</a>
                  <a href="caif.php" class="list-group-item list-group-item-action">CAIF</a>
                  <a href="storta.php" class="list-group-item list-group-item-action">La Storta</a>
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