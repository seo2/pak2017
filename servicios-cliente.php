<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-servicios-cliente.php') ?>
<?php include('include-search-no-slider.php') ?>
    <div class="titulo_seccion sin_slider ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                 <h4 class="divider"> servicio al cliente </h4> 
            </div>
            <div class="col-sm-12 col-md-2">
               <a href="<?php bloginfo('url'); ?>" class="back">< volver</a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="servicios_cliente clearfix">
     
           <!-- servicios cliente desktop -->
            <div class="hidden-xs">
                <?php include('include-sac-desktop.php') ?>
            </div>
            <!-- servicios cliente mobile -->
             <div class="visible-xs">
                <?php include('include-sac-mobile.php') ?>
            </div>

              <div class="hidden-xs">
                <?php include('include-sac-como-llegar-desktop.php') ?>
              </div>
              <div class="visible-xs">
                <?php include('include-sac-como-llegar-mobile.php') ?>
              </div>
                  
                 <div class="col-sm-6 col-md-6">
                     <div class="box">
                           <div class="box_slider">
                                 <div class="item disable-owl-swipe">
                                    <a href="servicios-cliente-servicios.php">
                                         <div class="caption">
                                             <p>&nbsp </p>
                                             <h3>servicios </h3>
                                             <div class="divider"> </div>
                                         </div>
                                         <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_sac_servicios.jpg);"> </div>                             
                                    </a>
                                 </div> <!-- item -->
                             </div><!-- box slider  -->

                    </div><!-- servicios -->
                </div>

                <div id="content_como_llegar" class="content_servicio collapse hidden-xs">
                    <div class="container">
                    <h4 class="divider verde">Cómo llegar</h4> 
                    <div class="close_servicio"> </div>
                      <div class="row">
                          <div class="col-md-12 ">
                               <div class="desc_servicio">
                                       <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/mapa.png" alt="">
                               </div>
                          </div>
                          <div class="datos_como_llegar clearfix">
                              <div class="col-xs-2">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/map_turistik.png" alt="" class="img-responsive center-block">
                              </div>
                              <div class="col-xs-10">
                                    <div class="centerer">
                                      <p>El pasajero debe esperar en el lugar indicado por Turistik a la hora.</p>
                                      <p> Para mayor información de este servicio contactarse con Turistik al <strong>(56- 2) 28201000 </strong>o el e-mail: <a href="mailto:contacto@turistik.cl"><strong>contacto@turistik.cl</strong></a></p>
                                    </div>
                                   
                              </div>
                           <!--    <div class="clearfix"></div>
                              <div class="col-xs-2">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/map_transfer.png" alt="" class="img-responsive center-block">
                              </div>
                              <div class="col-xs-10">
                                    <div class="centerer">
                                      <p>Parque Arauco Shopping Center pone a su disposición y sin costo el servicio regular de Transfer Gratis, desde y hacia los hoteles. Este servicio recorre los principales hoteles de la cuidad los 365 días del año.</p>
                                       <p> Para mayor información y detalles nuestros servicios al cliente, ingresa <a href=""><strong>aquí</strong></a></p>
                                    </div>
                               
                              </div> -->
                          </div>
                        

                        </div>
                        
                    </div> <!-- container -->
                </div> <!-- content como llegar -->
         

                <div class="col-sm-6 col-md-6">
                  <div class="box">
                     <div class="box_slider owl-carousel owl-theme">
                           <div class="item">
                               <a href="travellers.php">
                                     <div class="logo_seccion logo_travellers" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_travellers_blanco.svg);"> </div>                             
                                    <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_travellers.png);"> </div>                             
                               </a>
                            </div>
                 
                       </div><!-- box slider  -->
                </div> <!-- galeria -->
            </div>
        </section>
    </div> <!-- row -->
<?php include('footer.php') ?>

