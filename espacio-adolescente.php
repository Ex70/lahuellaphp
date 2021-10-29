<?php
   $Titulo = "Espacio Adolescente";
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
         <h1>Espacio Adolecente</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
               <li class="breadcrumb-item"><a href="#">Programas</a></li>
               <li class="breadcrumb-item active" aria-current="page">Espacio Adolescente</li>
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
               <h2>Espacio Adolescente</h2>
               <!-- Image -->
               <p class="h7"></p>
               <p style="text-align: justify">Se busca desde el Proyecto ensayar nuevas posiciones desde el mundo adulto, posiciones que problematicen la dicotomía que muchas veces se plantea entre la total permisividad y el autoritarismo, buscando habilitar el diálogo intergeneracional. Para esto se volverá necesario, en primera instancia, un lugar de palabras y de escucha. Dar la palabra, dando espacio a las individualidades, a los procesos personales, que implican, pero no se limitan a identificaciones grupales.<br><br> 
               Entendemos que no existe la Adolescencia, sino las adolescencias. Respuestas diversas de cada adolescente para hacer frente a los cambios que su etapa vital implica. Es una mirada a la subjetividad, que implica un trabajo individualizado y singular.
               Trabajo que crece y se alimenta de los espacios grupales, donde se comparten las vivencias y se permite el trabajo en conjunto.
               
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
                     <!-- Image -->
                     <p style="text-align: justify">En la adolescencia donde surgen diversas preguntas; preguntas que irán permitiendo desarrollar conscientemente algunas posibilidades para su proyecto de vida. Nuestra tarea se centrará en sostener el espacio y tiempo, para que puedan buscar sus respuestas. Hacerse cargo habilitará el lugar para qué el/la adolescente pueda responderse y construir a partir de esta respuesta. <br><br>
                     </p>
                     <!-- Button -->	 
                  </div>
                  <div class="col-md-7">
                     <h4></h4>
                     <!-- Image -->
                     <p style="text-align: justify">Es necesario que cada adolescente invente lo que será su propia manera de manejar estos cambios -respuesta particular que constituirá el núcleo de su individualidad- abriendo márgenes de incertidumbre e indeterminación. 
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
               <h5 class="sidebar-header" id="servicioicon">Programas</h5>
               <div class="list-group">
                  <a href="hogar.php" class="list-group-item list-group-item-action">
                  Hogar La Huella
                  </a>
                  <a href="clubdeniños.php" class="list-group-item list-group-item-action">Club de niños</a>
                  <a href="caif.php" class="list-group-item list-group-item-action">CAIF</a>
                  <a href="storta.php" class="list-group-item list-group-item-action">La Storta</a>
                  <a href="espacioadolecentes.php" class="list-group-item list-group-item-action active">Espacio Adolescente</a>
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