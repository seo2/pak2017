<?php
/*

Template name: Novedades

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
<?php 
// TRADUCCIONES
if(ICL_LANGUAGE_CODE=='en'){
	$tit1 = "NEWS OF THE MONTH";
	$tit2 = "Entertainment";
	$tit3 = "HIGHLIGHTS";
	$btn1 = "More information";
	$btn2 = "View more restaurants";
}elseif(ICL_LANGUAGE_CODE=='pt-br'){ 
	$tit1 = "Novidades DO MÊS";
	$tit2 = "Diversão";
	$tit3 = "DESTACADOS";
	$btn1 = "mais informação";
	$btn2 = "Veja mais restaurantes";
}else{ 
	$tit1 = "NOVEDADES DEL MES";
	$tit2 = "ENTRETENCIÓN";
	$tit3 = "destacados";
	$btn1 = "más información";
	$btn2 = "ver más restaurantes";
} ?> 
    <section class="main_content">
	    <div class="titulo_seccion ">
	        <div class="container">
	        	<div class="row">
	            	<div class="col-sm-12 col-md-10">
	                	<h4 class="divider"><?php echo $tit1; ?></h4>
	            	</div>
					<div class="col-sm-12 col-md-2">
						<a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
					</div>
				</div>
	        </div>
	    </div> <!-- titulo seccion -->

      <div class="container">
          <div class="row">
              <section  class="novedades">
              <div id="novedades" class="anchor_seccion"></div>
                      <div class="grid_tiendas center-block">
                          <div class="container">
<?php	                                         
    $args = array(
		'post_type' => array('novedades_top')
    );
	$the_query = new WP_Query ($args);
	
    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?> 
                        	<div class="row">
                            	<div class="col-sm-4 col-md-3"> 
                                	<div class="item_tienda">
                                        <div class="tienda">
                                        	<a class="" href="<?php echo get('caluga_cine_link'); ?>" target="_blank">
                                            	<img class="img-responsive" src="<?php echo get('caluga_cine_imagen'); ?>">
                                            </a>
                                            <div class="box_logo_destacado">
                                            	<div class="logo_destacado center-block">
                                                	<img src="<?php bloginfo('template_url'); ?>/assets/img/demo_logo_cine.png" alt="" class="img-responsive">
                                              	</div> <!-- logo_tienda -->
                                                <div class="desc_destacado visible-xs">
                                                    <h3>¡Descubre los mejores estrenos!</h3>
                                                    <p>Si eres amante del cine, entra aquí y conoce las últimas novedades en la cartelera de Hoyts Parque Arauco.</p>
                                                    <a href="http://www.cinehoyts.cl/cartelera/santiago-oriente/parque-arauco" target="_blank">www.cinehoyts.cl</a>
                                                </div>
                                            </div> <!-- box logo tienda -->
                                        </div> <!--  tienda -->
                                  	</div> <!-- item tienda -->
								</div> <!-- col sm 4 -->
								
								<div class=" col-sm-8 col-md-9"> 
                  <div class="box_horizontal box_novedades">
										<div class="box_slider">
											<div class="item disable-owl-swipe">
												<div class="image_dynamic">
													<div class="img_lg" style="background: url(<?php echo get('banner_grande_imagen'); ?>);"> </div>
													<div class="caption texto_blanco">
														<div class="">
															<a class="btn btn-default btn_blanco" href="<?php echo get('banner_grande_link'); ?>" role="button"><?php echo $btn1; ?></a>
														</div>
													</div> 
                        </div><!-- image dynamic -->
											</div><!-- item -->
										</div> <!-- box slider -->
									</div> <!-- box horizontal -->
								</div> <!-- col sm 12 -->
							</div><!-- fin row -->
<?php endwhile; else: ?>
<?php endif; ?>             
                              <div class="row" id="caja_tienda">
	                            <?php
								if($_GET['buscar']){
									$buscar = filter_var($_GET["buscar"], FILTER_SANITIZE_STRING);
									if($_GET['page']){
										$desde = 12 * ($_GET['page'] - 1);
										$resultado = $db->rawQuery("select * from cha_historia where hisTit LIKE '%$buscar%' OR hisNom LIKE '%$buscar%' and hisEst = 0 ORDER BY hisId DESC limit $desde, 12");
									}else{
										$resultado = $db->rawQuery("select * from cha_historia where hisTit LIKE '%$buscar%' OR hisNom LIKE '%$buscar%' and hisEst = 0 ORDER BY hisId DESC limit 12");
									}
								}else{
									if($_GET['page']){
										$desde 	 = 12 * ($_GET['page'] - 1);
										$tiendas = $db->rawQuery("select * from pak_tiendas where idioma = $idioma and tipo NOT IN(119,131,110) order by RAND() limit $desde, 4");
									}else{
										$tiendas = $db->rawQuery("select * from pak_tiendas where idioma = $idioma and tipo NOT IN(119,131,110) order by RAND() limit 4");
									}
								}
		                            
								if($tiendas){
									foreach ($tiendas as $t) {   
                                    	$imagen = get_img_tienda($t['punto_interes']);
                                    	if(!$imagen){
                                        	$imagen 	= "/assets/img/demobgtienda.jpg";
										  	$imagen	 	= get_template_directory_uri().$imagen;
                                    	}else{
	                                    	$imagen 	= '/ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
	                                    	$params1 	= array( 'width' => 650, 'height' => 650, 'crop' => true );	
										  	$imagen	 	= get_template_directory_uri().$imagen;
										  	$imagen  	= bfi_thumb( $imagen, $params1 );
                                    	}
                                ?>
                                  <div class="col-sm-3 caja_tienda"> 
                                      <div class="item_tienda" id="tienda_<?php echo $t['punto_interes']; ?>">
                                            <div  class="tienda">
                                                <a class="btn_tienda" href="javascript:void(0);"  >
                                                    <span id="adidas" class="overlay_img" data-id="<?php echo $t['punto_interes']; ?>" data-logo="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" data-desc='<?php echo trim($t['descripcion']); ?>' data-img="<?php echo $imagen; ?>" data-fono="<?php echo $t['telefono_punto_interes']; ?>" data-piso="<?php echo $t['numero_piso']; ?>" data-url="<?php echo $t['url_punto_interes']; ?>" data-mapa="<?php bloginfo('template_url'); ?>/ws/uploads/plano_<?php echo $t['punto_interes']; ?>.jpg" data-nombre="<?php echo $t['nombre']; ?>" data-tipo="<?php echo $t['tipo']; ?>"></span>
                                                    <img class="img-responsive" src="<?php echo $imagen; ?>">
                                                  </a>
                                                  <div class="box_logo_tienda">
                                                    <div class="logo_tienda">
                                                        <img src="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" alt="" class="img-responsive">
                                                    </div> <!-- logo_tienda -->
                                                  </div> <!-- box logo tienda -->
                                            </div> <!--  tienda -->
                                    </div> <!-- item tienda -->

                              </div> <!-- col sm 3 -->
								 
								<?php
									}
								}  		
								?>

                            </div><!-- row tiendas -->
                          </div> <!-- container grilla novedades -->

<!--
                          <div class="box_ver_mas_tiendas text-center">
                               <a href="" class="btn btn-default btn_ver_mas hvr-float">
                                  <h3 class="ver_mas">ver más novedades</h3>
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
                              </a>
                          </div>
-->
                                         
                      </div><!-- grid tiendas -->
              
              </section> <!-- end tiendas -->
      </div>

    <div class="row">
        <section class="entretencion clearfix">
        	<div id="entretencion" class="anchor_entretencion"></div>
			<h4 class="divider"><?php echo $tit2; ?></h4>    
<?php 
    $detect = new Mobile_Detect();
    	 
	if ($detect->isMobile()) { 
	   include('include-entretencion-mobile.php'); 
	}else{ 	 
	  	include('include-entretencion-desktop.php');
	}
?>
   
        </section>
    </div><!-- row -->
      
<div id="pages" style="display:none;" data-pagina="boulevard"></div>
<?php include('footer.php') ?>

