<?
/*

Template name: Travellers Descuentos

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php // include('include-slider-home.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?>

   <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider">tiendas descuentos</h4>
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="travellers.php" class="back">< volver</a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="travelers_descuentos clearfix">
             
             <div class="col-sm-12">
               <div id="filtro_descuento" class="text-right">
                <div id="text"> filtrar por: </div>
                 <select name="" class="selectpicker show-menu-arrow"> 
                       <option selected="selected" value="">Todas las categorías</option>
                       <option value="">calzado</option>
                       <option value="">restaurantes</option>
                       <option value="">vestuario</option>
                       <option value="">varios</option>
                       <option value="">piso diseño</option>
                       <option value="">distrito de lujo</option>
                       <option value="">fuera de nuestro mall</option>
                 </select>
                 </div>
             </div>
               <div class="clear"></div>
              <div class="grid_descuentos center-block">
                  <div class="container">
                      <div class="row" id="caja_tienda">

 <?php
						if($_GET['catID']){
							$buscar = $_GET['catID'];
							if($_GET['pagina']){
								$desde = 12 * ($_GET['pagina'] - 1);
								$tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit $desde,12");
							}else{
								$tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre limit 12");
							}
						}else{
							if($_GET['pagina']){
								$desde 	 = 12 * ($_GET['pagina'] - 1);
								$tiendas = $db->rawQuery("select * from pak_tiendas where pinDescuento != '' AND pinDescuento != '0' order by nombre limit $desde, 12");
							}else{
								$tiendas = $db->rawQuery("select * from pak_tiendas where pinDescuento != '' AND pinDescuento != '0' order by nombre limit 12");
							}
						}
                            
						if($tiendas){
							foreach ($tiendas as $t) {   
                            	$imagen = get_img_tienda($t['punto_interes']);
                            	if(!$imagen){
                                	$imagen = "/assets/img/demobgtienda.jpg";
                            	}else{
                                	$imagen = '/ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
                            	}
                        ?>                          
                          
                          
                          <div class="col-md-3 caja_tienda"> 
                              <div class="box_descuento">
                                      <div class="item_descuento" id="tienda_<?php echo $t['punto_interes']; ?>">
                                        <a href="javascript:void(0);" data-id="<?php echo $t['punto_interes']; ?>" data-logo="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" data-desc="<?php echo trim($t['descripcion']); ?>" data-img="<?php bloginfo('template_url'); ?>/<?php echo $imagen; ?>" data-fono="<?php echo $t['telefono_punto_interes']; ?>" data-piso="<?php echo $t['numero_piso']; ?>" data-url="<?php echo $t['url_punto_interes']; ?>" data-mapa="<?php bloginfo('template_url'); ?>/ws/uploads/plano_<?php echo $t['punto_interes']; ?>.jpg" data-nombre="<?php echo $t['nombre']; ?>" data-tipo="<?php echo $t['tipo']; ?>">
                                          <div class="box_dcto">
                                              <div class="datos_dcto">
                                         
                                                      <div class="num"><?php echo  $t['pinDescuento']; ?><?php //echo str_replace('%', '', $t['pinDescuento']); ?></div>   
<!--
                                                      <div class="box_percent">
                                                           <div class="text_percent"> % </div>
                                                           <div class="text_dcto">dcto </div>
                                                       </div>
-->
                                                  
                                                      <div class="clearfix"></div>
                                                  <p><?php echo $t['piiDescripcionDescuento']; ?></p>
                                                </div>

                                                 
                                            </div>
                                            <!-- 720 x 720 -->
                                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/<?php echo $imagen; ?>">
                                        </a>
                                        <div class="box_logo_tienda">
                                          <div class="logo_tienda">
                                            <!--  -->
                                              <img src="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" alt="" class="img-responsive">
                                          </div> <!-- logo_tienda -->
                                        </div> <!-- box logo tienda -->
                                    </div> <!--  tienda -->
                            </div> <!-- item tienda -->
                      </div> <!-- col sm 3-->

						<?php
							}
						}  		
						?>


           
                    </div>
                  </div> <!-- container grila descuentos -->
                               
                <div class="box_ver_mas_descuentos text-center">
                	<a href="javascript:void(0);" class="btn btn-default btn_ver_mas hvr-float">
                    	<h3 class="ver_mas" id="cargar_mas">ver más descuentos </h3>
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
                        <span id="loader"  style="display:none"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
                    </a>
                </div> <!-- ver mas -->     
              </div><!-- grid descuentos -->

          </section>
</div> <!-- row -->

<div id="pages" style="display:none;" data-pagina="tiendas">
<?php 
	$postperpage = 12;
	$rowcount = 0;

	if($_GET['busqueda']){
		
		$tiendas = $db->rawQuery("select * from pak_tiendas where descripcion LIKE '%$buscar%' OR nombre LIKE '%$buscar%' ORDER BY nombre");
		if($tiendas){
			foreach ($tiendas as $t) { 
				$rowcount++;
			}
		}
		$cola = "&busqueda=ropa";		
	}elseif($_GET['catID']){
		$tiendas = $db->rawQuery("SELECT * FROM pak_tiendas a, pak_tiendas_scat b WHERE b.sub_categoria = $buscar AND a.punto_interes = b.punto_interes ORDER BY a.nombre");
		if($tiendas){
			foreach ($tiendas as $t) { 
				$rowcount++;
			}
		}
		$cola = "&catID=$buscar";	
	}else{
		$db->where('tipo', Array(119, 131,110), 'NOT IN');
		
		$tiendas = $db->rawQuery("select * from pak_tiendas where pinDescuento != '' AND pinDescuento != '0'");
		if($tiendas){
			foreach ($tiendas as $t) { 
				$rowcount++;
			}
		}
		$cola = "";
	}




	echo "Total Items: ".$rowcount;
	
	$paginas = ceil($rowcount/$postperpage); 
	
	echo " - Páginas: ".$paginas;
	
	$x = 1;
	while($x <= $paginas) {
	?>
		<a href="<?php bloginfo('url'); ?>/travellers-descuentos/?pagina=<?php echo  $x.$cola; ?>"></a>
	<?php 
		$x++; 
	}
	?>
	
</div>

            
<?php include('footer.php') ?>

<script>
<?php if($paginas<=1){ ?>
	$('.box_ver_mas_descuentos').hide();
<?php } ?>	
	
	
var pages 	= new Array();
var current = 0; 
var loaded 	= new Array();
	
$('#pages a').each(function(index) {
    pages[index] = $(this).attr('href');
    loaded[$(this).attr('href')] = 0;
});



$('.box_ver_mas_descuentos').on('click', function(){
  	loaded[pages[current+1]] = loaded[pages[current+1]] + 1; 
    if(loaded[pages[current+1]] <= 1){
         loadMoreContent(current+1);
	}
}) 

function loadMoreContent(position) {
    if(position < pages.length) {
		$('#loader').fadeIn('slow', function() {
			$.post(pages[position], function(data) {
				pines = $(data).find(".caja_tienda");
				console.log(pines);
				$('#loader').fadeOut('slow', function() {
					$('#caja_tienda').append( $(pines).hide().fadeIn(2000));
			        current=position;
			        if(position +1 < pages.length) {
					
					}else{
					 	$('.box_ver_mas_tiendas').hide();
					}
			    });
	    	});
		});
    }
}

</script>