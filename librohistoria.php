<?php
   $Titulo = "Libro";
   $path = "";
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>Libro Institucional</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
               <li class="breadcrumb-item"><a href="#">Novedades</a></li>
               <li class="breadcrumb-item active" aria-current="page">Libro Institucional</li>
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
         <!-- Post Content Column -->
         <div class="col-lg-9 blog-card page-with-sidebar">
            <h2 class="mb-2"></h2>
            <!-- Post info-->
            <hr>
            <!-- Preview Image -->
            <div class="row" style="display: flex; justify-content: center;">
            <img src="img/gallery/libro.jpg" class="img-fluid" alt="">
            </div>
            <hr>
            <!-- Post Content -->
            <p class="lead"></p>
            <p style="text-align: justify">Nuestra historia, que transcurre en una chacra suburbana, con niños y niñas y gente viviendo en comunidad, ordeñando vacas y criando chanchos, parece de un mundo de ficción en un pasado remoto. </p>
            <p style="text-align: justify">Pero se trata de una historia viva que continúa adelante con nuevas propuestas. Nació en 1975, en un mundo sin celulares ni internet. A dos años del golpe de Estado en Uruguay y consolidado el gobierno militar, no había libertad de reunión ni de expresión.</p>
            <p style="text-align: justify">Nos importa recuperar esta experiencia por lo que representa en la actualidad en que está en discusión la calidad de la educación y faltan respuestas novedosas a las problemáticas de la convivencia y la atención de los niños en situación de riesgo. La Huella es, en este sentido, una fuente de inspiración, en tanto iniciativa de un grupo de jóvenes guiados por la fe, el amor, la voluntad de compartir, la vocación de servir a los más desamparados y un profundo deseo de justicia social. </p>
            <h5></h5>
            <ul class="custom p-0">
            <p style="text-align: justify">La gran visibilidad pública que tuvo La Huella en determinada época motivó a muchísima gente a lo largo de casi cuatro décadas en sus propias búsquedas. Es difícil hacerse una idea de la dimensión de todo lo que movilizó como experiencia. Nos encontramos con jóvenes que crecieron en el hogar y lo recuerdan no como una institución sino como su casa. Quienes participaron de los equipos liceales evocan con orgullo y con cariño su vivencia</p>
            <p style="text-align: justify">Hoy, que subyace el concepto de que es imposible vivir de otra manera, buscamos recordar que el estilo de vida dominante en la actualidad no es la única forma de existir ni en el mundo ni en el Uruguay. La historia de La Huella recupera una vida austera, enfrentando en grupo y con alegría el desafío de encontrar soluciones creativas cada día. </p>
            <h5></h5>
            <p style="text-align: justify">
            No proponemos a La Huella como modelo a imitar. La Huella es para nosotras un caso concreto, cercano y vital, de modos de convivencia en relación con los demás y con la naturaleza del que es posible aprender.<br> 
            Nos guía la voluntad de construir sobre la experiencia. 
            Esta historia está vinculada a determinadas personas que formularon la idea y se propusieron llevarla adelante y a las individualidades del grupo que fueron definiendo las características del proyecto.
            </p>
            <div class="row" style="display: flex; justify-content: center;">
            <img alt="Libro.pdf" style="width: 80px; height: 135px; object-fit: contain; object-position: center center;" src="https://static.wixstatic.com/media/40d80b8089c8418a961cb75d96d491f7.png/v1/fill/w_80,h_107,al_c,q_85,usm_0.66_1.00_0.01/40d80b8089c8418a961cb75d96d491f7.webp">
            </div>
            <div class="row" style="display: flex; justify-content: center;">
               <h4></h4>
               <!-- Image -->
               <br><br><br>
               <a href="https://drive.google.com/file/d/1AODOpSmsbnMSr7mUQViRc0o5HQpVSj6o/view?usp=sharing" target="_blank" class="btn btn-secondary mt-3" id="contacicon">Acceder a libro completo</a>
               <!-- Button -->	 
            </div>
         </div>
         
         <!-- /page-with-sidebar -->
         <!-- Sidebar -->
           <!-- blog sidebar starts -->
           <div id="sidebar" class="h-50 col-lg-3 sticky-top order-lg-1">
            <div class="widget-area notepad">
      <h5 class="sidebar-header" id="search1">Buscar</h5>
      <div class="input-group">
         <input type="text" class="form-control" placeholder="Search for...">
         <span class="input-group-btn">
         <button class="btn btn-secondary btn-sm" type="button" id="go1">Ir</button>
         </span>
      </div>
   </div>
   <!--/widget-area notepad -->
   <div class="widget-area notepad">
      <h5 class="sidebar-header" id="cate1">Categorias</h5>
      <div class="list-group">
         <a href="#" class="list-group-item list-group-item-action">
         Daycare
         </a>
         <a href="#" class="list-group-item list-group-item-action">News</a>
         <a href="#" class="list-group-item list-group-item-action">Parent Alerts</a>
         <a href="#" class="list-group-item list-group-item-action">Our Events</a>
      </div>
   </div>
   <!--/widget-area notepad -->
   <div class="widget-area notepad">
      <h5 class="sidebar-header" id="video1">Conócenos</h5>
      <!-- video -->
      <div class="embed-responsive embed-responsive-4by3">
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a6m3ZQBY31E"></iframe>
      </div>
   </div>
   <!--/widget-area notepad -->
   <div class="widget-area notepad">
      <h5 class="sidebar-header" id="tags1">Etiquetas</h5>
      <div class="tags-widget">
         <a href="#" class="badge badge-pill badge-default">News</a>
         <a href="#" class="badge badge-pill badge-default">Daycare</a>
         <a href="#" class="badge badge-pill badge-default">Activities</a>
         <a href="#" class="badge badge-pill badge-default">Lessons</a>
         <a href="#" class="badge badge-pill badge-default">Teachers</a>
      </div>
   </div>
   <!--/widget-area notepad -->
   <div class="widget-area notepad">
      <h5 class="sidebar-header" id="follow1">Síguenos</h5>
      <div class="contact-icon-info">
         <ul class="social-media text-center">
            <!--social icons -->
            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
         </ul>
      </div>
      <!--/contact-icon-info -->
   </div>
   <!--/widget-area notepad -->
</div>
<!--/sidebar -->      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</div>
<!-- /page --></div>
<!--/ page-wrapper -->

<?php
   include 'plantillas/footer.php';
?>