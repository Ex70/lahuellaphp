<?php
   $Titulo ="El Libro de Nuestra Historia";
   $path = "";
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>El libro con Nuestra Historia</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
               <li class="breadcrumb-item"><a href="blog.html">Post de Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">El libro con Nuestra Historia</li>
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
            <img src="img/blog/blog1.jpg" class="img-fluid" alt="">
            <hr>
            <!-- Post Content -->
            <p class="lead"></p>
            <p><b> Un grupo de jóvenes en una chacra de Las Piedras pone en marcha un hogar para niños abandonados. Intentan autoabastecerse de lo que produce la tierra, comparten las tareas, los bienes, y la alegría de vivir, estudian, trabajan, atienden a los niños y niñas, e invitan a grupos de jóvenes, apostando a un cambio. Eran los años de la dictadura y había que “hacer algo”.  </b> Desafiaron las prohibiciones, cuestionaron la competencia y el consumismo, pero no querían quedarse en el mero rechazo, sino también construir un modelo alternativo, detonante de nuevas ideas, estímulo para la imaginación. Desde las raíces de su fe, hicieron un ensayo de futuro basado en la libertad y la solidaridad, la responsabilidad y la creatividad, el encuentro y el amor hacia los demás. Nacho Sequeira a los 19 años, Mario Costa y Laila Diab a los 22, luego Sara Medeiros, Nelson Larzábal, Gabriela Rodríguez, Vicky Terra y muchos más, contribuyeron a crear la comunidad y vivieron allí muchos años, junto a quien se convertiría en un referente internacional en materia de derechos humanos, el sacerdote Luis Pérez Aguirre. </p>
            <p><b></b>  La comunidad fue para esos hombres y mujeres jóvenes el medio privilegiado para rescatarse del trabajo alienante; les permitió cambiar el miedo por la confianza, porque allí no entraba la complicidad con el lucro y el capital, fuente de miedo y de inseguridad. El tiempo ha pasado, la comunidad ya no está, la forma organizativa es otra y los proyectos también. Sesenta niños y niñas comunitarios vivieron en el hogar. Una nueva generación de niños y una nueva comunidad joven lo hacen hoy</p>
            
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