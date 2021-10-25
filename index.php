<?php
   $Titulo = "Inicio";
   $slide = true;
   $path = "";
   include 'plantillas/header.php';
   include 'plantillas/menu.php';
?>
   
<!-- /container-fluid -->
<!-- ==== Page Content ==== -->
 <!-- section -->
<section id="about-home" class="container-fluid pb-0">
   <div class="container">
      <!-- section heading -->  
      <div class="section-heading text-center" data-aos="fade-down">
         <h2>Servicios Principales</h2>
         <p class="subtitle">Conócenos</p>
      </div>
      </div>
   <div class="container">
   <!-- section -->  
   <section id="intro-cards"  class="row cards-no-margin">
      <!-- card 1 -->  
      <div class="col-lg-4" data-aos="zoom-out">
         <div class="card card-flip">
            <!-- front of card  -->  
            <div class="card bg-secondary text-light ">
               <div class="p-5">
                  <h5 class="card-title text-light">Hogar<br>La Huella</h5>
                  <p class="card-text">
                     In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat lorem
                  </p>
                  <!-- button show on mobile only,where flip is disabled -->
                  <a href="contact.html" class="btn d-lg-none">contacte con nosotros</a>
               </div>
               <!-- /p-5 -->
               <!-- image -->
               <img class="card-img" src="img/intro1.webp" alt="">
            </div>
            <!-- /card -->
            <!-- back of card -->  			
            <div class="card bg-secondary text-light card-back">
               <div class="card-body d-flex justify-content-center align-items-center">
                  <div class="p-4">
                     <h5 class="card-title text-light">Desde 1075</h5>
                     <p class="card-text">enas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. 
                        In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat
                     </p>
                     <!-- button -->
                     <a href="contact.html" class="btn">contacte con nosotros</a>
                  </div>
                  <!-- /p-4 -->
               </div>
               <!-- /card-body -->
            </div>
            <!-- /card -->
         </div>
         <!--/col-lg -->
      </div>
      <!--/card 1 -->  
      <!-- card 2-->  
      <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="300">
         <div class="card card-flip ">
            <!-- front of card  -->  
            <div class="card bg-primary text-light">
               <div class="p-5">
                  <h5 class="card-title text-light">Club de Niños La Huellita</h5>
                  <p class="card-text">
                     In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat lorem
                  </p>
                  <!-- button show on mobile only,where flip is disabled -->
                  <a href="services.html" class="btn d-lg-none">Nuestros Servicios</a>
               </div>
               <!-- /p-5 -->
               <!-- image -->
               <img class="card-img" src="img/intro2.webp" alt="">
            </div>
            <!-- /card -->
            <!-- back of card -->  			
            <div class="card bg-primary text-light card-back">
               <div class="card-body d-flex justify-content-center align-items-center">
                  <div class="p-4">
                     <h5 class="card-title text-light">Didáctico y Divertido</h5>
                     <p class="card-text">enas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. 
                        In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat
                     </p>
                     <!-- button -->
                     <a href="services-single.html" class="btn">Nuestros Servicios</a>
                  </div>
                  <!-- /p-4 -->
               </div>
               <!-- /card-body -->
            </div>
            <!-- /card -->
         </div>
         <!--/card 2 -->
      </div>
      <!--/col-lg -->
      <!-- card 3-->  
      <div class="col-lg-4" data-aos="zoom-out" data-aos-delay="600">
         <div class="card card-flip ">
            <!-- front of card  -->  
            <div class="card bg-tertiary text-light" id="colorAmarillo">
               <div class="p-5">
                  <h5 class="card-title text-light">CAIF<br> Los Periquitos</h5>
                  <p class="card-text">
                     In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat lorem
                  </p>
                  <!-- button show on mobile only,where flip is disabled -->
                  <a href="caif.html" class="btn d-lg-none">Nuestro equipo</a>
               </div>
               <!-- /p-5 -->
               <!-- image -->
               <img class="card-img" src="img/intro3.webp" alt="">
            </div>
            <!-- /card -->
            <!-- back of card -->  			
            <div class="card bg-tertiary text-light card-back">
               <div class="card-body d-flex justify-content-center align-items-center" id="colorAmarillo">
                  <div class="p-4">
                     <h5 class="card-title text-light">Conoce a nuestro personal</h5>
                     <p class="card-text">enas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. 
                        In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat
                     </p>
                     <!-- button -->
                     <a href="caif.html" class="btn">Nuestro equipo</a>
                  </div>
                  <!-- /p-4 -->
               </div>
               <!-- /card-body -->
            </div>
            <!-- /card -->
         </div>
         <!--/card 3 -->
      </div>
      <!--/col-lg -->
   </section>
   <!-- #intro-cards --> 
</div>
<!-- /container --> 
   <!-- whale in water scene -->
   <!-- whale -->
   <img src="img/ornaments/whale.png" class="floating-whale" alt="">
   <!-- waves -->
   <div class="waveHorizontals">
      <div id="waveHorizontal1" class="waveHorizontal"></div>
      <div id="waveHorizontal2" class="waveHorizontal"></div>
      <div id="waveHorizontal3" class="waveHorizontal"></div>
   </div>
   <!-- sea -->
   <div class="sea"></div>
   <!--/ whale in water scene ends -->
</section>
<!-- /section ends -->

<!-- section -->
<section id="services-home" class="bg-secondary ">
   <div class="container pb-5">
      <!-- section heading -->  
      <div class="section-heading text-center text-light" data-aos="fade-down">
         <h2>Otros  Servicios</h2>
         <p class="subtitle">Acompañamiento Familiar</p>
      </div>
      <!-- /section heading -->
        <div class="carousel-3items owl-carousel owl-theme col-lg-12">
            <!-- service 1  -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="services-single.html">
                  <img src="img/services/service1.webp" alt="" class="blob img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="services-single.html">
                     <h4 class="service-head">Acompañamiento Familiar</h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit integer dictum malesuada Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus Etiam rhoncus.
                  </p>
                  <!-- Button -->	 
                  <a href="services-single.html" class="btn btn-quaternary  btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
            <!-- service 2  -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="services-single.html">
                  <img src="img/services/service2.webp" alt="" class="blob2 img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="services-single.html">
                     <h4 class="service-head">Salon de<br>Eventos</h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit integer dictum malesuada Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus Etiam rhoncus.
                  </p>
                  <!-- Button -->	 
                  <a href="services-single.html" class="btn btn-quaternary btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
            <!-- service 3  -->
            <!-- service 4  -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="services-single.html">
                  <img src="img/comunidadstorta.JPG" alt="" class="blob2 img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="services-single.html">
                     <h4 class="service-head">Comunidad La Storta</h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit integer dictum malesuada Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus Etiam rhoncus.
                  </p>
                  <!-- Button -->	 
                  <a href="services-single.html" class="btn btn-quaternary btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
            <!-- service 5 -->
            <div class="serviceBox2">
               <!-- service icon -->
               <div class="service-icon">
                  <a href="services-single.html">
                  <img src="img/services/service5.webp" alt="" class="blob img-fluid">
                  </a>
               </div>
               <!-- service content -->
               <div class="service-content">
                  <a href="services-single.html">
                     <h4 class="service-head">Paseos y Actividades</h4>
                  </a>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit integer dictum malesuada Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus Etiam rhoncus.
                  </p>
                  <!-- Button -->	 
                  <a href="services-single.html" class="btn btn-quaternary btn-sm mt-2 ml-1" id="colorAmarillo">Leer más</a>
               </div>
            </div>
         </div>
         <!-- /owl-services --> 
   </div>
   <!-- /container -->
</section>
<!-- /section ends -->
<!-- Section  -->
<section id="counter-section" class="container-fluid counter-calltoaction bg-fixed overlay"  data-100-bottom="background-position: 50% 100px;"
   data-top-bottom="background-position: 50% -100px;" >
   <div id="counter" class="container">
      <div  class="row col-lg-10 offset-lg-1">
         <!-- Counter -->
         <div class="col-xl-4 col-md-4">
            <div class="counter">
               <div class="counter-wrapper" id="colorRojo">
                  <i class="counter-icon flaticon-balloon-playing"></i>
                  <!-- insert your final value on data-count= -->
                  <div class="counter-value" data-count="100">0</div>
                  <h3 class="title">Niños Hogar</h3>
               </div>
            </div>
            <!-- /counter -->
         </div>
         <!-- /col-lg -->
         <!-- Counter -->
         <div class="col-xl-4 col-md-4">
            <div class="counter">
               <div class="counter-wrapper" id="cuadroicon2">
                  <i class="counter-icon flaticon-family"></i>
                  <!-- insert your final value on data-count= -->
                  <div class="counter-value" data-count="900">0</div>
                  <h3 class="title">Familias Apoyadas</h3>
               </div>
            </div>
            <!-- /counter -->
         </div>
         <!-- /col-lg -->
         <!-- Counter -->
         <div class="col-xl-4 col-md-4">
            <div class="counter">
               <div class="counter-wrapper bg-tertiary" id="cuadroicon">
                  <i class="counter-icon flaticon-friendship"></i>
                  <!-- insert your final value on data-count= -->
                  <div class="counter-value" data-count="450">0</div>
                  <h3 class="title">Voluntarios</h3>
               </div>
            </div>
            <!-- /counter -->
         </div>
         <!-- /col-lg -->		 
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends-->
<!-- section -->
<section id="blogprev-home" data-100-bottom="background-position: 0% 120%;"
   data-top-bottom="background-position: 0% 100%;">
   <div class="container">
      <!-- section heading -->  
      <div class="section-heading text-center" data-aos="fade-down">
         <h2>Últimas Novedades</h2>
         <p class="subtitle">Nuestras actualizaciones</p>
      </div>
      <!-- /section-heading -->
      <!-- blog carousel -->
      <div class="carousel-3items owl-carousel owl-theme mt-0">
         <!-- blog-box -->
         <div class="blog-box">
            <!-- image -->
            <a href="blog-single.html">
               <div class="image"><img src="img/blog/blogstyle2-1.webp" alt=""/></div>
            </a>
            <!-- blog-box-caption -->
            <div class="blog-box-caption">
               <!-- date -->
               <div class="date"><span class="day">12</span><span class="month">Mayo</span></div>
               <a href="Lahuella45.php">
                  <h4>La Huella Cumple 45 Años</h4>
               </a>
               <!-- /link -->
               <p>
               La Huella es un lugar de enseñanza una organizacion en la que trabajar comunitariamente en una prestacion de servicios y entrega con gratuidad total hacia los vulnerados donde se nos manifiesta Jesús...
               </p>
            </div>
            <!-- blog-box-footer -->
                  <a href="Lahuella45.php" class="btn btn-primary " id="colorAmarillo">Leer más</a>
            <!-- /blog-box-footer -->
         </div>
         <!-- /blog-box -->
         <!-- blog-box -->
         <div class="blog-box">
            <!-- image -->
            <a href="blog-single.html">
               <div class="image"><img src="img/blog/blogstyle2-3-3.png" alt=""/></div>
            </a>
            <!-- blog-box-caption -->
            <div class="blog-box-caption">
               <!-- date -->
               <div class="date"><span class="day">28</span><span class="month">Junio</span></div>
               <a href="videoinstitucional.php">
                  <h4>Nuestro Video Institucional</h4>
               </a>
               <!-- /link -->
               <p>
               Los desafíos de la huella fue adecuarse de forma continua a la nuevas situaciones. la huella surge de una vertiente de la profesión fe cristiana con valores cristianos abiertos a todos.
               </p>
            </div>
            <!-- blog-box-footer -->
                  <a href="videoinstitucional.php" class="btn btn-primary " id="colorAmarillo">Leer más</a>
            <!-- /blog-box-footer -->
         </div>
         <!-- /blog-box -->
         <!-- blog-box -->
         <div class="blog-box">
            <!-- image -->
            <a href="blog-single.html">
               <div class="image"><img src="img/blog/blogstyle2-3.png" alt=""/></div>
            </a>
            <!-- blog-box-caption -->
            <div class="blog-box-caption">
               <!-- date -->
               <div class="date"><span class="day">02</span><span class="month">Julio</span></div>
               <a href="librohistoria.php">
                  <h4>El Libro Con Nuestra Historia</h4>
               </a>
               <!-- /link -->
               <p>
               Nuestra historia, que transcurre en una chacra suburbana, con niños y niñas y gente viviendo en comunidad, ordeñando vacas y criando chanchos, parece de un mundo de ficción en un pasado remoto.
               </p>
            </div>
            <!-- blog-box-footer -->
                  <a href="librohistoria.php" class="btn btn-primary " id="colorAmarillo">Leer más</a>
            <!-- /blog-box-footer -->
         </div>
         <!-- /blog-box -->
         <!-- blog-box -->
         <!-- /blog-box -->
      </div>
      <!-- /owl-carousel -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends-->
<!-- section -->		   
<section id="callout" class=" container-fluid bg-fixed">
   <div class="container">
      <!-- row -->
      <div class="row">
         <div class="col-lg-6 p-0" data-start="right: 50%;" 
            data-center="right:-5%;">
            <!-- image  -->
            <img src="img/call-to-action/calltoactionbg.webp" class="img-fluid img-rounded" alt="">
         </div>
         <!-- text box  -->
         <div class="col-lg-6 bg-secondary p-5 justify-content-center align-self-center"  data-start="left: 50%;" 
            data-center="left:-5%;">
            <div class="text-light justify-content-center align-self-center">
               <h3>El mejor espacio para tus fiestas y eventos</h3>
               <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus vi tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
               <a href="contact.html" class="btn btn-tertiary">Contacte con nosotros</a>
            </div>
            <!-- /text-light  -->
         </div>
         <!-- /col-lg  -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /section ends -->
<!-- Section -->
<section id="contact-home" class="container">
          
            <!-- section heading -->  
            <div class="section-heading text-center" data-aos="fade-down">
               <h2>Contacto</h2>
               <p class="subtitle">Ponete en contacto</p>
            </div>
            <!-- /section-heading -->  
          <div class="container">
      <div class="row">
         <div class="col-lg-7">
            <h3>Información de contacto</h3>
            <p></p>
             <!-- contact icons-->
            <ul class="list-inline mt-3 list-contact colored-icons">
               <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a href="mailto:email@yoursite.com">Hogar: lahuella1975@gmail.com</a><li>
               <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>Oficina: 2365 0827</li>
               <li class="list-inline-item" ><i class="fa fa-map-marker margin-icon"></i>Ruta 48 Luis Pérez Aguirre, Km 19.500, 90200 Las Piedras, Canelones, Uruguay</li>
            </ul>
            <!-- /list-->
            <!-- map-->
            <div id="map-canvas" class="mt-5"></div>
            <!-- /map-->
         </div>
         <!-- /col-lg- -->
         <!-- contact box -->  
         <div class="col-lg-4 contact-form3 offset-lg-1 bg-light h-100">
            <div class="contact-image bg-light">
               <!-- envelope icon-->
               <i class="fas fa-envelope"></i>
            </div>
            <h5 class="text-center mt-3">Envíá un mensaje</h5>
            <!-- Form Starts -->
            <div id="contact_form">
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-12">
                        <label>Nombre<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field" required=""> 
                     </div>
                     <div class="col-md-12">
                        <label>Correo Electronico <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field" required=""> 
                     </div>
                     <div class="col-md-12">
                        <label>Asunto</label>
                        <input type="text" name="subject" class="form-control input-field"> 
                     </div>
                     <div class="col-md-12">
                        <label>Mensaje<span class="required">*</span></label>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                     </div>
                  </div>
                  <!-- button -->
                  <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary btn-block mt-3 colorAmarillo" style="background-color: #E4A40F;">Enviar mensaje</button>
               </div>
               <!-- /form-group-->
               <!-- Contact results -->
               <div id="contact_results"></div>
            </div>
            <!-- /contact-form-->
         </div>
         <!-- /col-lg-->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
</section>
<!-- /Section --></div>
<!--/ page-wrapper -->

<?php
   include 'plantillas/footer.php';
?>