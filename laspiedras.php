<?php
   $Titulo = "Las piedras";
   $path = "";
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>
     <!-- page wrapper starts -->
     <!-- Jumbotron -->
<div class="jumbotron2 jumbotron-fluid">
  <div class="container">
     <!-- jumbo-heading -->
     <div class="jumbo-heading aos-init aos-animate" data-aos="fade-down">
        <h1>Las Piedras</h1>
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item"><a href="index.html">Nosotros</a></li><li class="breadcrumb-item active" aria-current="page">Las Piedras, Canelones</li>
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
<div class="page container">
  <div class="row">
     <!-- page with sidebar starts -->
     <div class="col-lg-9 page-with-sidebar">
        <div class="container">
           <!-- row -->
           <div class="row">
              <div class="col-lg-6 ">
                 <h2>Las Piedras, Canelones</h2>
                 <span class="h7 mt-2">La Ciudad de Las Piedras</span>
                 <p class="mt-4 res-margin">Las Piedras es una localidad que se encuentra en Canelones, el segundo departamento más densamente poblado luego de Montevideo. Canelones rodea casi la totalidad del departamento de Montevideo.
                    
                 Las Piedras forma parte de las localidades al suroeste del departamento. Luego de la Ciudad de la Costa, es la ciudad más poblada, con alrededor de 65,000 habitantes.</p>
              </div>
              <!-- /col-lg-->
              <div class="col-lg-6 ">
                 <!-- image -->
                 <img class="img-fluid rounded" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/MunCanLasPiedras.svg/1920px-MunCanLasPiedras.svg.png?1635347599417" alt="">
                 <!-- ornament starts-->
                 <div class="ornament aos-init aos-animate" data-aos="zoom-out"></div>
              </div>
              <!-- /col-lg -->
           </div>
           <!-- /row -->
           <h3 class="mt-5">Las Piedras Ciudad Satélite o Dormitorio</h3>
           <p>Una ciudad dormitorio o satélite, si bien algunas veces es considerada peyorativa, es una expresión que refiere a zonas residenciales por lo general parte del área metropolitana de una ciudad. La piedra se conecta completamente con la ciudad vecina La Paz que a su vez está conectada con Montevídeo, habiendo generado una fran extensión de ciudad que dificulta su distinciíon.</p>
           <h3 class="mt-5">Las Piedras, Tierra de Horticultura y Viñedos</h3>
           <p>La ciudad de Las Piedras y su zona de influencia tiene una marcada actividad agrícola (horticultura y fruticultura) y agroindustrial, cuenta con viñedos y bodegas de prestigio y es considerada la capital del vino. Tiene además industrias, un frigorífico que exporta, comercios, talleres y pequeñas fábricas.</p><!-- row -->
           
           <!-- /row -->
           
           
           <!-- divider -->
           
           <!-- /row -->
           
           <!-- /mt-5 -->
        </div>
        <!-- /container -->
     </div>
     <!-- /page-with-sidebar -->
     <!-- ==== Sidebar ==== -->
     <div id="sidebar" class="h-50 col-lg-3 sticky-top">
               <!--widget-area -->
               <div class="widget-area notepad" >
                  <h5 class="sidebar-header" id="cuadro1">Nuestro Equipo</h5>
                  <!-- widget -->       
                  <div class="widget2">
                     <div class="card">
                        <div class="card-img">
                           <!-- image  -->   
                           <a href="equipotrabajo.php">
                           <img class="rounded card-img-top" src="img/about/400x300.jpg" alt="" >
                           </a>
                        </div>
                        <div class="card-body">
                           <!--  info --> 
                           <a href="team.html" class="text-center">
                              <p style="text-align: justify">Conoce al grupo de personas que pone en marcha el grupo hogar La Huella</p>
                           </a>
                           <!-- button -->   
                           <a href="equipotrabajo.php" class="btn btn-secondary btn-block btn-sm" id="cuadro2">Leer más</a>
                        </div>
                        <!--/card-body -->   
                     </div>
                     <!-- /card --> 
                  </div>
                  <!--/widget2 -->
               </div>
               <!--/widget-area -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header" id="cuadro3">Nuestra Misión</h5>
                  <p style="text-align: justify">Crear un espacio para cobijar bajo nuestro techo y privilegiar al niño postergado o abandonado</p>
               </div>
               <!--/widget-area -->
               <div class="widget-area notepad">
                  <h5 class="sidebar-header" id="cuadro4">Síguenos</h5>
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
               <!--/widget-area -->
            </div>
               <!--/widget-area -->
            </div>
         </div>
      </div>
<!--/ page-wrapper -->
  <!--/widget-area -->
  
  <!--/widget-area -->
</div>
<!--/sidebar -->   </div>
  <!-- /row -->
</div>
<!-- /page --></div>
<!--/ page-wrapper -->

<?php
   include 'plantillas/footer.php';
?>