<div class="container">
  <div class="row">
	  	<?
		  	if($_GET['pagina']){
			  	
		  	}else{
			  	$offset1 = 0;
			  	$offset2 = 4;
			  	$e = 0;
			  	$i = 0;
		  	}
			$args = array(
				'post_type' 	=> 'galeria',
				'posts_per_page'=> 4,
				'category_name'	=> 'distrito-de-lujo',
				'offset' 		=> $offset1
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					$e++;	
		?>		  
        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="box_servicio" id="gal<?php echo $e; ?>box">

              <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal<?php echo $e; ?>">
                  <? the_post_thumbnail('preview_galerias', array( 'class' => 'center-block img-responsive' ) ); ?>
              </a>
            </div>
            <div class="box_more_info">
              <a href="javascript:void(0);"  data-toggle="collapse" data-target="#gal<?php echo $e; ?>"><?php the_title(); ?></a>
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
				'posts_per_page'=> 4,
				'category_name'	=> 'distrito-de-lujo',
				'offset' 		=> $offset1
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					$i++;
		?>		 
        <div id="gal<?php echo $i; ?>" class="content_servicio collapse">     
        	<div id="gal<?php echo $i; ?>ancla" class="anclita"></div>
            <div class="container">
              <div class="close_servicio" data-target="#gal<?php echo $i; ?>"></div>
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
                  <div class="col-md-6">
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
		<?
			$args = array(
				'post_type' 	=> 'galeria',
				'posts_per_page'=> 4,
				'category_name'	=> 'distrito-de-lujo',
				'offset' 		=> $offset2
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					$e++;	
		?>		  
        <div class="col-xs-6 col-sm-3 col-md-3">
            <div class="box_servicio" id="gal<?php echo $e; ?>box">

              <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal<?php echo $e; ?>">
                  <? the_post_thumbnail('preview_galerias', array( 'class' => 'center-block img-responsive' ) ); ?>
              </a>
            </div>
            <div class="box_more_info">
              <a href="javascript:void(0);" data-toggle="collapse" data-target="#gal<?php echo $e; ?>"><?php the_title(); ?></a>
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
				'posts_per_page'=> 4,
				'category_name'	=> 'distrito-de-lujo',
				'offset' 		=> $offset2
			);
            $query = new WP_Query( $args ); 
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) : $query->the_post();							
					$i++;
		?>		 
        <div id="gal<?php echo $i; ?>" class="content_servicio collapse">     
        	<div id="gal<?php echo $i; ?>ancla" class="anclita"></div>
            <div class="container">
              <div class="close_servicio" data-target="#gal<?php echo $i; ?>"></div>
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
                        <div class="btn-mas"><a href="<?php the_permalink(); ?>" alt="ver más">Ver más</a></div>
                    </div>
                  </div>
                </div>
            </div><!-- container -->
        </div> 
        <?    
                endwhile; 
          } 
        ?>	

  </div><!-- row -->
</div> <!-- container -->
<div class="box_ver_mas_tiendas text-center">
    <a href="" class="btn btn-default btn_ver_mas hvr-float">
    	<h3 class="ver_mas">ver más galerías</h3>
		<img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="ver más galerías" class="img-responsive center-block arrow_down">
    </a>
</div>


    





