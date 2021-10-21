<?php
   $Titulo = "SOCAT";
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
         <h1>La Storta</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
               <li class="breadcrumb-item"><a href="services.php">Servicios</a></li>
               <li class="breadcrumb-item active" aria-current="page">La Storta</li>
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
               <h2>La Storta</h2>
               <!-- Image -->
               <p class="h7"></p>
               <p>En setiembre comenzó en La Huella, en una de las casas, una experiencia de vida comunitaria.<br><br>
                La propuesta tiene como origen dos grandes fuerzas. Por un lado, pretende tomar una experiencia comunitaria chilena “La Storta”, donde jóvenes viven una experiencia de comunidad, espiritualidad y apostolado intensa. Por otro lado no resulta casual que el lugar para dicha experiencia sea La Huella, que tiene origen en la experiencia comunitaria y vivencia del Evangelio. Todo esto constituye parte de un legado que nos llama de manera especial a comprometernos.<br>

                Somos 6 jóvenes de 22 a 24 años oriundos de Montevideo, que compartimos nuestras actividades de estudio, trabajo y voluntariados en los colegios Seminario e Isasa (de donde somos ex alumnos).<br><br>

                La experiencia invita a vivir fundamentalmente tres ejes. Por un lado el eje comunitario, donde el grupo compartió la casa, la convivencia, el acompañarse. Una experiencia donde vivimos muchas cosas desde lo más práctico como son las tareas domésticas, hasta lo más profundo de acompañarnos, compartir la fe y ser compañeros de camino.
               </p>
               <!-- row -->
               <div class="row">
                  <div class="col-md-5">
                     <div class="col-md-12 carousel-1item owl-carousel owl-theme "  data-aos="fade-in" >
                        <img src="img/services/service-single1.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/service-single2.jpg" class="img-fluid rounded-circle" alt="">
                        <img src="img/services/service-single3.jpg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <!-- /col-md- -->
                  </div>
                  <!-- /col-md -->
                  <div class="col-md-7">
                     <h4></h4>
                     <!-- Image -->
                     <p> El eje espiritual tiene que ver con vivir una experiencia de fe en el día a día, donde ahondamos en nuestro seguimiento de Jesús, teniendo reuniones semanales con una pauta que seguía el formato de los Ejercicios Espirituales de San Ignacio, sumado a pausas diarias para rezar el día.<br><br>
                     </p>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-7">
                     <h4></h4>
                     <!-- Image -->
                     <p>Por último, el tercer eje tiene que ver con el apostolado, siendo vecinos del hogar, pasando mucho de nuestro tiempo con los chiquilines, disfrutando y creciendo juntos. Tuvimos la oportunidad de jugar, hacer deberes, estudiar, acompañar al médico, disfrutar de las fiestas finales y otros eventos, en definitiva fue compartir nuestras vidas cotidianas y acompañarnos desde ahí.

                     </p>
                     <a href="contact.html" class="btn btn-secondary mt-3" id="contacicon">Contáctanos</a>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-5">
                     <div class="col-md-7 carousel-1item owl-carousel owl-theme "  data-aos="fade-in" >
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
               <a href="hogar.php" class="list-group-item list-group-item-action active">
                  Hogar La Huella
                  </a>
                  <a href="clubdeniños.php" class="list-group-item list-group-item-action">Club de niños</a>
                  <a href="caif.php" class="list-group-item list-group-item-action">CAIF</a>
                  <a href="socat.php" class="list-group-item list-group-item-action">Espacio Adolecente</a>
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