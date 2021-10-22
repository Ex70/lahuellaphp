<?php
   $Titulo = "Club de Niños";
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
         <h1>Club de Niños</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
               <li class="breadcrumb-item"><a href="services.html">Servicios</a></li>
               <li class="breadcrumb-item active" aria-current="page">Club de Niños</li>
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
               <h2>Club De Niños y Niñas Huellita</h2>
               <!-- Image -->
               <p class="h7"></p>
               <p>El Club de Niños y Niñas La Huellita es un proyecto en convenio con INAU que funciona con modalidad de tiempo parcial, de lunes a viernes, durante el horario de la mañana. Es un espacio educativo para niños y niñas en edad escolar que, como experiencia asociativa y formativa, promueve el aprendizaje cooperativo a través de diversos talleres.<br>
               Cuando los niños llegan, a las 8 de la mañana, se realizan múltiples actividades: los que tienen deberes escolares, cuentan con un espacio para realizar las tareas con el apoyo de la maestra y un educador; otros juegan en el patio o con juegos de mesa en el comedor, además de colaborar en la preparación del desayuno.<br><br>
               <br> Todos los talleres tienen frecuencia semanal: atención pedagógica, huerta orgánica, taller de artes plásticas, deporte y recreación, expresión musical, género y sexualidad, espacio de formación grupal. A las 12, cada quien para su casa, a prepararse para la escuela.   
               </p>
               <!-- row -->
               <div class="row">
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme ">
                        <img src="img/services/service-single1.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/service-single2.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/service-single3.jpg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <!-- /col-md- -->
                  </div>
                  <!-- /col-md -->
                  <div class="col-md-7">
                     <h4>Actividades Divertidas</h4>
                     <!-- Image -->
                     <p>Se desarrollan diversas actividades extraordinarias, como por ejemplo: el plan de verano, actividades recreativas en los barrios, el Periniño, la participación en las Fiestas Mayas y en la Expo Educa, el Guisito Amigo, reuniones y talleres con familias, etc. También se realizan paseos, salidas didácticas y campamentos, y en verano, los niños concurren a la piscina de la Plaza de Deportes de Las Piedras.
                     </p>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-7">
                     <h4></h4>
                     <!-- Image -->
                     <p>A las 9 comienzan las actividades grupales, divididos en “Chicos”, “Medianos” y “Grandes”, con un nutritivo desayuno. Luego de cepillarse los dientes y lavar las tazas, cada grupo tiene dos talleres diarios, espaciados por un recreo de 30 minutos.
                     </p>
                     <a href="contact.html" class="btn btn-secondary mt-3" id="contacicon">Contáctanos</a>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme ">
                        <img src="img/services/service-single1.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/service-single2.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/service-single3.jpg" class="img-fluid rounded-circle" alt="">
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
               <a href="hogar.php" class="list-group-item list-group-item-action">
                  Hogar La Huella
                  </a>
                  <a href="clubdeniños.php" class="list-group-item list-group-item-action active">Club de niños</a>
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