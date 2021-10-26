<?php
   $Titulo = "Alianzas";
   $path = "";
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>
     <!-- page wrapper starts -->
     <!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
     <!-- jumbo-heading -->
     <div class="jumbo-heading aos-init aos-animate" data-aos="fade-down">
        <h1>Alianzas</h1>
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item"><a href="index.php">Colaborar</a></li>
              <li class="breadcrumb-item active" aria-current="page">Alianzas</li>
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
      <!-- <div class="col-lg-6 text-center offset-lg-3">
         <h2>Conócenos</h2>
         <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
      </div> -->
	  <!-- /col-md-6 -->
   </div>
   <!-- /container -->
   <!-- owl carousel gallery  -->
         <div class="owl-stage owl-carousel owl-theme top-centered-nav mt-5 magnific-popup">
            <div class="col-md-12 gallery-img hover-border" style="width:250px;">
               <!-- image -->
               <a href="img/alianzas/logo-audec.png" title="Asociación Uruguaya de EDUCACIÓN CATÓLICA">
               <img src="img/alianzas/logo-audec.png" class="img-fluid rounded" alt="">
               </a>
            </div>
            <!-- /col-md-12 -->
            <div class="col-md-12 gallery-img hover-border" style="width:250px;">
               <a href="img/alianzas/logo-auf.png" title="American Uruguayan Federation">
               <img src="img/alianzas/logo-auf.png" class="img-fluid rounded" alt="">
               </a>
            </div>
            <!-- /col-md-12 -->
            <div class="col-md-12 gallery-img hover-border" style="width:250px;">
               <a href="img/alianzas/logo-feyalegria.png" title="Fe y Alegría">
               <img src="img/alianzas/logo-feyalegria.png" class="img-fluid rounded" alt="">
               </a>
            </div>
            <!-- /col-md-12 -->
            <div class="col-md-12 gallery-img hover-border" style="width:250px;">
               <a href="img/alianzas/logo-reachingu.png" title="ReachingU">
               <img src="img/alianzas/logo-reachingu.png" class="img-fluid rounded" alt="">
               </a>
            </div>
            <!-- /col-md-12 -->
         </div>
         <!-- /owl-carousel -->	</div>
<!-- /page --></div>
<!--/ page-wrapper -->

<?php
   include 'plantillas/footer.php';
?>