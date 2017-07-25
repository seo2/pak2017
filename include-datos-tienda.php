<?php
$style = '';
if(isset($_GET['tiendaID'])){
	$punto_interes = $_GET['tiendaID'];
	$tiendas = $db->rawQuery("select * from pak_tiendas where idioma  = $idioma and punto_interes = $punto_interes");
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
			$logo = "ws/uploads/logo_". $t['punto_interes'].".jpg";
			$desc = trim($t['descripcion']);
			$fono=$t['telefono_punto_interes'];
			$piso= $t['numero_piso']; 
			$url= $t['url_punto_interes']; 
			$mapa="ws/uploads/plano_".$t['punto_interes'].".jpg";  	
	    	$pinDescuento = $t['pinDescuento'];
	    	$piiDescripcionDescuento = $t['piiDescripcionDescuento'];
	    }
	}
	$style = 'style="display:block"';
}

?>

<div id="caja_datos_tienda" class="container-fluid nopad" <?php echo $style; ?>>
	<div class="container">
    	<div id="adidas" class="datos_tienda">
			<div class="row ">
            	<div class="col-sm-6 col-sm-push-6 nopad relative">
                	<div class="img_tienda" style="background: url(<?php echo $imagen; ?>);" >
					<?php 
					if($pinDescuento != '' && $pinDescuento != '0'){
						$clase = '';
					}else{
						$clase = ' hide';
					}
						$clase = ' hide';
					?>
                    	<div class="marco pinDescuento<?php echo $clase; ?>"></div>
						<div class="box_dcto pinDescuento<?php echo $clase; ?>">
                        	<div class="datos_dcto">
                                <div class="num" id="pinDescuento"><?php echo $pinDescuento; ?></div>  
                                <div class="clearfix"></div>
								<p id="piiDescripcionDescuento"><?php echo $piiDescripcionDescuento; ?></p>
                        	</div>
						</div>
                	</div><!-- // img tienda -->
            	</div>
				<div class="col-sm-6  col-sm-pull-6 nopad relative min-height">
                    <div class="datos">
                        <div class="logo_tienda">
                            <img src="<?php bloginfo('template_url'); ?>/<?php echo $logo; ?>" alt="" class="img-responsive">
                        </div>
						<p class="descripciontienda"><?php echo $desc; ?></p>
                        <h3> CONTACTO: <span class="telefono"><?php echo $fono; ?><span></h3>
                        <h4> PISO <span class="piso"><?php echo $piso; ?></span></h4> 
                        <a href="javascript:void(0);" class="btn btn-default btn_mapa hide" data-toggle="modal" data-target="#mapaTienda">
                        <i class="fa fa-map-marker " aria-hidden="true"></i> ver mapa de ubicación </a>
                        <div class="clearfix"></div>
                        <a href="<?php echo $url; ?>" target="_blank" class="url"><?php echo $url; ?></a>
                        <div class="share_tienda">
                        	<ul>
                            	<li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fs219687.gridserver.com%2Fclientes%2Fbond%2Fpak%2F&t=" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL),'Facebook Sharer', 'width=500,height=500'); return false;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/intent/tweet?source=https%3A%2F%2Fs219687.gridserver.com%2Fclientes%2Fbond%2Fpak%2F&text=:%20https%3A%2F%2Fs219687.gridserver.com%2Fclientes%2Fbond%2Fpak%2F" target="_blank" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL),'Twitter Sharer', 'width=500,height=500'); return false;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        	</ul>
                        </div> <!-- share -->
                    </div> <!-- datos  -->
				</div>
            </div>
        </div> <!-- adidas -->
	</div>

	<!-- mapa distrito -->
	<div class="modal fade" id="mapaTienda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<img src="<?php echo $mapa; ?>" class="img-responsive center-block" alt="">
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
	</div>


    <section class="search_home_xs visible-xs visible-sm">
        <?php include('include-search-home-mobile.php'); ?>
    </section>
</div>