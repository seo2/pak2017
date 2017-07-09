
<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-3 col-md-3">
	    <?php
			$args = array(
				'p' => 428,
				'post_type'	=> array('novedades')
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();
?>
        <div class="box_servicio" id="sala_artebox">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#sala_arte">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bg_sala.jpg"  class="center-block img-responsive">
          </a>
        </div>
        <div class="box_more_info">
          <a  href="javascript:void(0);"  data-toggle="collapse" data-target="#sala_arte">sala de arte</a>
        </div>
<?php 
        endwhile; 
	} 
?>      
    </div>

      <div class="col-xs-6 col-sm-3 col-md-3">
<?php
			$args = array(
				'p' => 431,
				'post_type'	=> array('novedades')
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();
?>	      
        <div class="box_servicio" id="teatrobox">
          <a href="javascript:void(0);" class="" data-toggle="collapse" data-target="#teatro">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bg_mori.jpg"   class="center-block img-responsive">
           
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#teatro">teatro mori</a>
          </div>
<?php 
        endwhile; 
	} 
?>    
    </div>


    <div class="col-xs-6 col-sm-3 col-md-3">
    	<div class="box_servicio_no_callapse">
        	<a href="<?php bloginfo('url'); ?>/novedades-galeria#galerias" >
            	<img src="<?php bloginfo('template_url'); ?>/assets/img/bg_galeria.jpg"  class="center-block img-responsive">
        	</a>
        </div>
          <div class="box_more_info_no_collapse">
            <a href="<?php bloginfo('url'); ?>/novedades-galeria#galerias">galería</a>
          </div>
    </div>
      
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio_no_callapse">
          <a href="http://www.cinehoyts.cl/cartelera/santiago-oriente/parque-arauco" target="_blank">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bg_cine.jpg"  class="center-block img-responsive">
          </a>
        </div>
        <div class="box_more_info_no_collapse">
          <a href="http://www.cinehoyts.cl/cartelera/santiago-oriente/parque-arauco" target="_blank">cine hoyts</a>
        </div>
    </div>

            <div id="sala_arte" class="content_servicio collapse" >

               <div id="sala_arteancla" class="anclita"></div>
<?php
			$args = array(
				'p' => 428,
				'post_type'	=> array('novedades')
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();
?>
                <div class="container">
                  <h4 class="divider"><?php the_title(); ?></h4>
                  <div class="close_servicio" data-target="#sala_arte"> </div>
                  <div class="row">
                      <div class="col-md-6 col-md-push-6">
                            <div class="slider_entrentencion owl-carousel owl-theme">
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/demo_galeria.jpg);"> </div>
                                </div>
                            </div><!--  slider_entretenion -->
                      </div>
                      <div class="col-md-6 col-md-pull-6 ">
                           <div class="desc_servicio desc_entretencion">
                               <?php the_content(); ?>
                           </div>
                      </div>
                    </div>
                    
                </div> <!-- container -->
<?php 
        endwhile; 
	} 
?>                
            </div> <!-- content galeria de arte  -->

            <div id="teatro" class="content_servicio collapse">
            <div id="teatroancla" class="anclita"></div>
<?php
			$args = array(
				'p' => 431,
				'post_type'	=> array('novedades')
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();
?>
              <div class="container">
              <h4 class="divider"><?php the_title(); ?></h4>
               <div class="close_servicio" data-target="#teatro"> </div>
                  <div class="row">
                     <div class="col-md-6 col-md-push-6">
                           <div class="slider_entrentencion owl-carousel owl-theme ">
                                     <div class="item">
                                         <div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/salamori.jpg);"> </div>
                                     </div>
                               </div><!--  slider_entretenion -->
                              <!--  <p>Quiero compartir este post: </p> -->

                               <div class="box_cartelera clearfix">
                                    <div class="row">
                                      <div class="col-xs-8">
                                          <a href="http://www.centromori.cl/" target="_blank">ver cartelera y precios</a>
                                      </div>
                                      <div class="col-xs-4">
                                          <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_mori.png" alt="" class="img-responsive pull-right"></div> 
                                    </div>    
                               </div>
                     </div>
                     <div class="col-md-6 col-md-pull-6 ">
                          <div class="desc_servicio desc_entretencion">
                             <?php the_content(); ?>
                          </div>
                     </div>
                  </div>
              </div>
<?php 
        endwhile; 
	} 
?> 
            </div><!-- teatro mori  -->
  </div>
</div>


    





