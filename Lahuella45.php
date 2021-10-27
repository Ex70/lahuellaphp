<?php
   $Titulo = "La Huella Cumple 45 Años";
   $path = "";
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?><!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>La Huella Cumple 45 Años</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb"> 
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
               <li class="breadcrumb-item"><a href="blog.html">Post de Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">La Huella Cumple 45 Años</li>
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
            <img src="img/gallery/institucion.jpg" class="img-fluid" alt="">
            <hr>
            <!-- Post Content -->
            <p class="lead"></p>
            <p>La Huella es un lugar de enseñanza una organizacion en la que trabajar comunitariamente en una prestacion de servicios y entrega con gratuidad total hacia los vulnerados donde se nos manifiesta Jesús </p>
            <p>Desde hace 45 años seguimos dejando huella.</p>
            <h5></h5>
            <div class="row" style="display: flex; justify-content: center;">
               <iframe  width="600" height="400" src="huella45.mp4" frameborder="0" allowfullscreen></iframe>
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
      <div class="embed-responsive embed-responsive-4by3"><iframe width="560" height="315" src="https://www.youtube.com/embed/xdwLPTYMAIU" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <li class="list-inline-item"><a title="Facebook" target="_blank"  href="https://www.facebook.com/Hogar.La.Huella/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a title="YouTube" target="_blank"  href="https://www.youtube.com/channel/UCjqTR8EUH4xD-zGGgsIidvg"><i class="fab fa-youtube"></i></a></li>
                        <li class="list-inline-item"><a  title="Instagram" target="_blank"  href="https://www.instagram.com/hogarlahuella/"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a  title="Pinterest" target="_blank"  href="https://www.instagram.com/hogarlahuella/"><i class="fab fa-pinterest"></i></a></li>
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