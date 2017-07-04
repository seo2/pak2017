<style>
	   .content_servicio{position: relative;}
     .anclita{position: absolute; top: -150px; height: 10px; width: 10px;}
     
      
</style>
<div class="container">
  <div class="row">
	  	<?
			$args = array(
				'post_type' 	=> 'galeria',
				'posts_per_page'=> 4
			);

            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					
		?>		  
	  
	  
        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="box_servicio" id="gal1box">

              <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal<?php echo $e; ?>">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/demo_portada_galeria.jpg"  class="center-block img-responsive">
              </a>
            </div>
            <div class="box_more_info">
              <a href="javascript:void(0);"  data-toggle="collapse" data-target="#gal<?php echo $e; ?>">Bazar orgánico Huerto del Parque</a>
            </div>
        </div>

        <?    
                endwhile; 
          } 
        ?>	

    <div class="clearfix"></div>
    
	  	<?
			$args = array(
				'post_type' 	=> 'galeria',
				'posts_per_page'=> 4
			);

            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					
		?>		 
    
    
        <div id="gal<?php echo $i; ?>" class="content_servicio collapse">     
        	<div id="gal<?php echo $i; ?>ancla" class="anclita"></div>
            <div class="container">
              <div class="close_servicio" data-target="#gal1"></div>
              	<div class="row">
              <!---->
                   <div class="col-md-6">
                        <div class="slider_entrentencion owl-carousel owl-theme">
							<?php $imagenes = muestra_galeria(); ?>
							<?php foreach ($imagenes as $imagen): ?>
							<div class="item">
                            	<div class="img_servicio" style="background: url(<?php echo wp_get_attachment_url($imagen->ID); ?>);"></div>
                        	</div>
							<?php endforeach ?>
                        </div><!--  slider_entretenion -->
                        <!-- <p>Quiero compartir este post: </p> -->
                  </div>
                  <!---->
                  <div class="col-md-6  ">
                  	<div class="desc_servicio desc_galeria">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                        <div class="btn-mas"><a href="<?php the_permalink(); ?>">Ver más</a></div>
                    </div>
                  </div>
                </div>
            </div><!-- container -->
        </div> 
        <?    
                endwhile; 
          } 
        ?>	


        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="box_servicio" id="gal5box">
              <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal5">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/prev_gal05.jpg"  class="center-block img-responsive">
              </a>
            </div>
            <div class="box_more_info">
              <a href="javascript:void(0);"  data-toggle="collapse" data-target="#gal5">Shows infantiles - Blvd febrero</a>
            </div>
        </div>

            <div class="col-xs-6 col-sm-3 col-md-3">
              <div class="box_servicio" id="gal6box">
                <a href="javascript:void(0);" class="" data-toggle="collapse" data-target="#gal6">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/prev_gal06.jpg"   class="center-block img-responsive">
                 
                </a>
              </div>
               <div class="box_more_info">
                  <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal6">Tributos Boulevard</a>
                </div>
          </div>

          <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="box_servicio" id="gal7box">
              <a href="javascript:void(0);" class="" data-toggle="collapse" data-target="#gal7">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/prev_gal07.jpg"   class="center-block img-responsive">
               
              </a>
            </div>
             <div class="box_more_info">
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal7">Día de los enamorados</a>
              </div>
        </div>

        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="box_servicio" id="gal8box">
              <a href="javascript:void(0);" class="" data-toggle="collapse" data-target="#gal8">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/prev_gal08.jpg"   class="center-block img-responsive">
               
              </a>
            </div>
             <div class="box_more_info">
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal8">Entrega de regalos Navidad 1+1</a>
              </div>
        </div>

        <!-- contenido galerias -->


            <div id="gal5" class="content_servicio collapse">
             
             	  <div id="gal5ancla" class="anclita"></div>
             
                <div class="container">
                  <div class="close_servicio" data-target="#gal5"> </div>
                  <div class="row">
                      <div class="col-md-6 ">
                            <div class="slider_entrentencion owl-carousel owl-theme">
                            	<div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_001.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_002.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_003.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_004.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_005.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_006.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_007.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_008.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_009.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_010.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_011.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_012.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_013.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_014.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_015.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/shows_infantiles/img_016.jpg);"> </div>
                                </div>

                                </div><!--  slider_entretenion -->
                                <!-- <p>Quiero compartir este post: </p> -->
                      </div>
                      <div class="col-md-6  ">
                           <div class="desc_servicio desc_galeria">
                           <h4>Shows infantiles - Blvd febrero</h4>
                               <p>El verano se vivió en Boulevard Kids, con entretenidas obras junto a muchas familias. Revisa cómo lo pasamos.</p>
                               <div class="btn-mas"><a href="shows_infantiles.php">Ver más</a></div>
                           </div>
                      </div>

                      
                    </div>
                    
                </div> <!-- container -->
            </div> <!-- content galeria de arte  -->

            <div id="gal6" class="content_servicio collapse">
             
             	  <div id="gal6ancla" class="anclita"></div>
             
                <div class="container">
                  
                  <div class="close_servicio" data-target="#gal6"> </div>
                  <div class="row">
                      <div class="col-md-6 ">
                            <div class="slider_entrentencion owl-carousel owl-theme">
                            	<div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_001.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_002.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_003.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_004.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_005.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_006.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_007.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_008.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_009.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_010.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_011.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_012.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_013.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_014.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_015.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_016.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_017.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_018.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_019.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_020.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_021.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_022.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_023.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_024.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_025.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_026.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_027.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_028.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_029.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_030.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_031.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_032.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_033.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_034.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_035.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_036.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_037.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_038.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_039.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_040.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_041.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_042.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_043.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_044.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_045.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_046.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_047.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_048.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_049.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_050.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_051.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_052.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_053.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_054.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_055.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_056.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_057.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_058.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_059.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_060.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_061.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_062.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_063.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_064.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_065.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_066.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_067.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_068.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_069.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_070.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_071.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_072.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_073.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_074.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_075.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_076.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_077.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_078.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_079.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_080.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_081.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_082.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_083.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_084.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_085.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_086.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_087.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_088.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_089.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_090.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_091.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_092.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_093.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_094.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_095.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_096.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_097.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_098.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_099.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_100.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_101.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_102.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_103.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_104.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_105.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_106.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_107.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_108.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_109.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_110.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_111.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_112.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_113.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_114.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_115.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_116.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_117.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/tributos_boulevard/img_118.jpg);"> </div>
                                </div>
                            </div><!--  slider_entretenion -->
                                <!-- <p>Quiero compartir este post: </p> -->
                      </div>
                      <div class="col-md-6  ">
                           <div class="desc_servicio desc_galeria">
                           <h4>Tributos Boulevard</h4>
                               <p>En enero la música era la tónica de Boulevard. Revisa todos los detalles de cómo estuvieron los Tributos.</p>
                               <div class="btn-mas"><a href="tributos_boulevard.php">Ver más</a></div>
                           </div>
                      </div>

                     
                    </div>
                    
                </div> <!-- container -->
            </div> <!-- content galeria de arte  -->

            <div id="gal7" class="content_servicio collapse">
             
             	  <div id="gal7ancla" class="anclita"></div>
             
                <div class="container">
                  
                  <div class="close_servicio" data-target="#gal7"> </div>
                  <div class="row">
                      <div class="col-md-6 ">
                            <div class="slider_entrentencion owl-carousel owl-theme">
                            	<div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_001.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_002.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_003.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_004.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_005.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_006.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_007.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_008.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_009.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_010.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_011.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_012.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_013.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_014.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_015.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_016.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_018.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_019.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_020.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_021.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_022.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_023.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_024.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_025.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_026.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_027.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/dia_enamorados/img_028.jpg);"> </div>
                                </div>
                            </div><!--  slider_entretenion -->
                                <!-- <p>Quiero compartir este post: </p> -->
                      </div>
                      <div class="col-md-6  ">
                           <div class="desc_servicio desc_galeria">
                           <h4>Día de los enamorados</h4>
                               <p>El día más romántico del año se vivió en todo Parque Arauco. Conoce lo que hicimos aquí.</p>
                               <div class="btn-mas"><a href="dia_enamorados.php">Ver más</a></div>
                           </div>
                      </div>

                      
                    </div>
                    
                </div> <!-- container -->
            </div> <!-- content galeria de arte  -->

            <div id="gal8" class="content_servicio collapse">
             
             	  <div id="gal8ancla" class="anclita"></div>
             
                <div class="container">
                  
                  <div class="close_servicio" data-target="#gal8"> </div>
                  <div class="row">
                      <div class="col-md-6">
                      		<div class="slider_entrentencion owl-carousel owl-theme">
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_001.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_002.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_003.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_004.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_005.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_006.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_007.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_008.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_009.jpg);"> </div>
                                </div>
                                <div class="item">
                                	<div class="img_servicio" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/galeria/entrega_regalos/img_010.jpg);"> </div>
                                </div>
                            </div><!--  slider_entretenion -->
                                <!-- <p>Quiero compartir este post: </p> -->
                      </div>
                      <div class="col-md-6">
                           <div class="desc_servicio desc_galeria">
                           <h4>Entrega de regalos Navidad 1+1</h4>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim 
                               commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                               <div class="btn-mas"><a href="entrega_regalos_navidad.php">Ver más</a></div>
                           </div>
                      </div>
                    </div>
                </div> <!-- container -->
            </div> <!-- content galeria   -->
  </div><!-- row -->
</div> <!-- container -->
  <!--<div class="box_ver_mas_tiendas text-center">
     <a href="" class="btn btn-default btn_ver_mas hvr-float">
        <h3 class="ver_mas">ver más galerías</h3>
        <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
    </a>
  </div>-->


    





