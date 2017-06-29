<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>

    <section class="main_content">
      <div class="container">
          <div class="row">
              <div class="col-sm-6 col-md-6">

                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
                          <div class="item">
                              <a href="<?php bloginfo('url'); ?>/distrito-de-lujo">
                                <div class="logo_seccion logo_distrito" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_distrito.svg);"> </div>
                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_distrito.png);"> </div>
                              </a>
                          </div>
                      </div><!-- box slider  -->
                  </div> <!-- slider distrito -->
              </div> 

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <div class="box_slider owl-carousel owl-theme ">
                              <div class="item">
                                  <a href="<?php bloginfo('url'); ?>/boulevard">
                                       <div class="caption">
                                          <p>&nbsp </p>
                                           <h3>boulevard </h3>
                                           <div class="divider"> </div>
                                       </div>
                                       <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_zona.png);"> </div>                             
                                  </a>
                               </div> <!-- item -->
                         
                          </div><!-- box slider  -->
                 </div>
              </div> <!-- slider zona boulevard -->

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                      <div class="box_slider owl-carousel owl-theme ">
                           <div class="item">
                                  
                               <a href="<?php bloginfo('url'); ?>/piso-diseno">
                                    <div class="logo_seccion logo_piso_diseno" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_piso_diseno.svg);"> </div> 
                                    <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_piso_diseno.png);"> </div>                 
                               </a>
                            </div> <!-- item -->
                   
                       </div><!-- box slider  -->
                   </div>
              </div> <!-- piso diseño -->

              <div class="col-sm-6 col-md-6">
                  <div class="box">
                         <div class="box_slider owl-carousel owl-theme">
                              <div class="item">
                                  <a href="<?php bloginfo('url'); ?>/travellers">
                                        <div class="logo_seccion logo_travellers" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_travellers_blanco.svg);"> </div>                             
										<div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_travellers.png);"> </div>                             
                                  </a>
                               </div>
                          </div><!-- box slider  -->
                   </div><!-- travellers -->
              </div>
                
              <div class="col-sm-12">
                    <!-- NOVEDADES -->
                    <div class="box_horizontal">
                       <div class="box_slider owl-carousel owl-theme">
                         <div class="item">
                            <div class="image_dynamic">
                                 <div class="img_lg" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/emporio_paula_lanas.png);"> </div>
                                 <!--<div class="caption">
                                           <h3>novedades</h3>
                                           <h4 class="divider">bocas moradas</h4>
                                           <p>Revisa el panorama para este fin de semana</p>
                                           <div class="text-center">
                                               <a href="novedades.php" class="btn btn-default btn_blanco"  role="button">ver todo</a>
                                           </div>
                                 </div> caption -->
                           </div><!-- image dynamic -->
                         </div><!-- item -->
                      </div>
                    </div>
              </div>
                
            </div> <!-- row -->
            <div class="row">
              <div class="col-sm-6 col-md-6">
                  <div class="box">
                        <!-- arauco tag -->
                        <a href="<?php bloginfo('url'); ?>/arauco-tag" class="box_enlace">
                          <div class="box_img" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_arauco_tag.png);"> </div>
                          <div class="caption">
                              <h3>Inscríbete</h3>
                              <div class="divider"> &nbsp </div>
                          </div>
                        </a>
                 </div> <!-- arauco tag -->
                      
                  <div class="box">
                     <div class="box_slider owl-carousel owl-theme">
                           <div class="item">
                             <a href="novedades-galeria.php#galerias">
                                <div class="caption">
                                    <h3>Galería</h3>
                                    <div class="divider"> &nbsp </div>
                                </div>
                               <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/portada_galeria.jpg);"> </div>
                             </a>
                           </div>
                      <!--      <div class="item">
                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider2.jpg);"> </div>
                            </div>
                           <div class="item">
                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider3.jpg);"> </div>
                            </div>
                           <div class="item"> 
                                <div class="box_slide" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/slider4.jpg);"> </div>
                            </div> -->
                       </div><!-- box slider  -->
                </div> <!-- galeria -->
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="image_dynamic">
                    <div class="lente"></div>
                    <div class="image_dynamic_portada" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/revista_detalle.jpg);"> </div>
                    <div class="caption_revista" >
                      <div class="logo_revista" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/logo_revista_detalle.svg);"> </div>
                            <p>Suscríbete y podrás estar al día de todas las tendencias.
                            <a href="http://www.revistadetalle.cl/" target="_blank"  class="btn btn-default btn_revista hvr-float" role="button">revista detalle</a>
                      </p>
                       
                    </div>
                 </div>
              </div> <!-- revista detalle -->
      </div> <!-- row -->
<?php include('footer.php') ?>

