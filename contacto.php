<?php
   $Titulo = "Contacto";
   $path = "";
   $contacto = true;
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>
      <!-- page wrapper starts -->
      <!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
   <div class="container" >
      <!-- jumbo-heading -->
      <div class="jumbo-heading" data-aos="fade-down">
         <h1>Contacto</h1>
         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
               <li class="breadcrumb-item active" aria-current="page">Contacto</li>
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
         <div class="col-md-12">
            <div class="row">
               <!-- contact-info-->
               <div class="contact-info col-lg-12">
                  <!-- contact-info-->
                  <h3 class="mb-2">Información de contacto</h3>
                  <p class="h7">Póngase en contacto con nosotros ahora mismo</p>
                  <p><b>Vías de acceso:</b> Ruta 48, Ruta Nacional 5. Se puede acceder por un camino vecinal que comunica directamente con el barrio Villa Ilusión y el Barrio Pueblo Nuevo.<br>
                  <b>Medios de locomoción:</b> 809 Directo de COPSA y líneas de COdelESTE a Los Cerrillos por Ruta 48. Líneas metropolitanas y locales por Avenida Dr. Pouey y Avenida Artigas.
                  </p>
                  <h4 class="mt-5">Envíenos un mensaje</h4>
                  <!-- Form Starts -->
                  <div id="contact_form">
                  <form action="includes/contacto.php" method="post"  enctype="multipart/form-data" name="formulario">
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-6">
                              <label>Nombre<span class="required">*</span></label>
                              <input type="text" name="name" class="form-control input-field" required=""> 
                           </div>
                           <div class="col-md-6">
                              <label>Correo electronico<span class="required">*</span></label>
                              <input type="email" name="email" class="form-control input-field" required=""> 
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <label>Asunto</label>
                              <input type="text" name="subject" class="form-control input-field"> 
                           </div>
                           <div class="col-md-12">
                              <label>Mensaje<span class="required">*</span></label>
                              <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                           </div>
                        </div>
                        <input name="enviar" type="submit" value="Enviar" />
                        <!-- <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary">Enviar mensaje</button> -->
                     </div>
                     <!-- /form-group-->
                     <!-- Contact results -->
                     <div id="contact_results"></div>
                  </form>
                  </div>
                  <!-- /contact)form-->
               </div>
               <!-- /contact-info-->
               <div class="col-lg-12">
                  <!-- contact info boxes start-->
                  <div class="contact-info res-margin">
                     <div class="row res-margin mt-5 res-margin">
                        <div class="col-lg-4 mt-5">
                           <div class="contact-icon bg-secondary text-light">
                              <!---icon-->
                              <i class="fa fa-envelope top-icon"></i>
                              <!-- contact-icon info-->
                              <div class="contact-icon-info">
                                 <h5>Email</h5>
                                 <p><a href="mailto:lahuella1975@gmail.com">lahuella1975@gmail.com</a></p>
                              </div>
                           </div>
                           <!-- /contact-icon-->
                        </div>
                        <!-- /col-lg-->
                        <div class="col-lg-4 mt-5 res-margin">
                           <div class="contact-icon bg-secondary text-light">
                              <!---icon-->
                              <i class="fa fa-map-marker top-icon"></i>
                              <!-- contact-icon info-->
                              <div class="contact-icon-info">
                                 <h5>Dirección</h5>
                                 <p>Ruta 48 Luis Pérez Aguirre, Km 19.500, 90200 Las Piedras, Canelones, Uruguay</p>
                              </div>
                           </div>
                           <!-- /contact-icon-->
                        </div>
                        <!-- /col-lg -->
                        <div class="col-lg-4 mt-5 res-margin">
                           <div class="contact-icon bg-secondary text-light">
                              <!---icon-->
                              <i class="fa fa-phone top-icon"></i>
                              <!-- contact-icon info-->
                              <div class="contact-icon-info">
                                 <h5>Teléfono</h5>
                                 <p><a href="tel:+59823650827">2365 0827</a></p>
                              </div>
                           </div>
                           <!-- /contact-icon-->
                        </div>
                        <!-- /col-lg-->
                     </div>
                     <!-- /row -->
                  </div>
                  <!-- /contact-info-->
               </div>
               <!-- /col-lg-->
            </div>
            <!-- /row-->
            <!-- map-->
            <div id="map-canvas" class="mt-5 map-small-height container"></div>
            <!-- /map-->
         </div>
         <!-- /col-lg-12-->
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
                           <a href="equipotrabajo.php" class="text-center">
                           <p style="text-align: justify"><strong>Conoce al grupo de personas que pone en marcha al hogar La Huella</strong></p>
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
                  <p style="text-align: justify">Crear un espacio paa cobijar bajo nuestro techo y privilegiar al niño postergado o abandonado</p>
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
                        <li class="list-inline-item"><a  title="Pinterest" target="_blank"  href="#"><i class="fab fa-pinterest"></i></a></li>
                     </ul>
                  </div>
                  <!--/contact-icon-info -->
               </div>
               <!--/widget-area -->
            </div>
         </div>
      </div>
<!--/ page-wrapper -->

<?php
   include 'plantillas/footer.php';
?>