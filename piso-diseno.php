<?
/*

Template name: Piso de Diseño

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-piso-diseno.php') ?>
<?php include('include-search-home.php') ?>



    <section class="main_content">
       <div class="titulo_seccion">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider">piso diseño</h4>
            </div>
            <div class="col-sm-12 col-md-2">
               <a href="<?php bloginfo('url'); ?>" class="back">< volver</a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->
    
      <div class="container">
          <div class="row">
              <section class="tiendas">
                      <div class="grid_tiendas center-block">
                          <div class="container">
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
										$tiendas = $db->rawQuery("select * from pak_tiendas where tipo = 131 order by nombre limit $desde, 12");
									}else{
										$tiendas = $db->rawQuery("select * from pak_tiendas where tipo = 131 order by nombre limit 12");
									}
								}
		                            
								if($tiendas){
									foreach ($tiendas as $t) {   
                                    	$imagen = get_img_tienda($t['punto_interes']);
                                    	if(!$imagen){
                                        	$imagen = "assets/img/demobgtienda.jpg";
                                    	}else{
	                                    	$imagen = 'ws/uploads/img_'. $t['punto_interes'].'_1.jpg';
                                    	}
                                ?>
					            <div class="col-sm-3 caja_tienda"> 
					            	<div class="item_tienda" id="tienda_<?php echo $t['punto_interes']; ?>">
					                	<div  class="tienda">
					                    	<a class="btn_tienda" href="javascript:void(0);"  >
                                              <h4 class="nombre_tienda"><?php echo $t['nombre']; ?></h4>
                                               <div class="borde"> </div>
                                              <span class="bg_nombre_tienda"> </span>
					                        	<span id="adidas" class="overlay_img" data-id="<?php echo $t['punto_interes']; ?>" data-logo="<?php bloginfo('template_url'); ?>/ws/uploads/logo_<?php echo $t['punto_interes']; ?>.jpg" data-desc="<?php echo trim($t['descripcion']); ?>" data-img="<?php bloginfo('template_url'); ?>/<?php echo $imagen; ?>" data-fono="<?php echo $t['telefono_punto_interes']; ?>" data-piso="<?php echo $t['numero_piso']; ?>" data-url="<?php echo $t['url_punto_interes']; ?>" data-mapa="<?php bloginfo('template_url'); ?>/ws/uploads/plano_<?php echo $t['punto_interes']; ?>.jpg" data-nombre="<?php echo $t['nombre']; ?>"></span>
					                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/<?php echo $imagen; ?>">
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
                          </div> <!-- container grila tiendas -->
                          <div class="box_ver_mas_tiendas text-center">
                                <a href="javascript:void(0);" class="btn btn-default btn_ver_mas hvr-float">
                                  <h3 class="ver_mas" id="cargar_mas">ver más tiendas </h3>
                                  <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
                                  <span id="loader"  style="display:none"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i></span>
                                </a>
                          </div> <!-- ver mas -->
                                         
                      </div><!-- grid tiendas -->
              
              </section> <!-- end tiendas -->
      </div>
		  <div id="pages" style="display:none;" data-pagina="piso-diseno">
<?php 
	$postperpage = 12;
	$db->where('tipo', Array(131), 'IN');
	$rowcount = $db->getValue ("pak_tiendas", "count(*)");

	echo "Total Items: ".$rowcount;
	
	$paginas = ceil($rowcount/$postperpage); 
	
	echo " - Páginas: ".$paginas;
	
	$x = 1;
	while($x <= $paginas) {
	?>
		<a href="<?php bloginfo('url'); ?>/piso-diseno?page=<?php echo  $x; ?>"></a>
	<?php 
		$x++; 
	}
	?>
</div>
<?php include('footer.php') ?>

<script>

var pages 	= new Array();
var current = 0; 
var loaded 	= new Array();
	
$('#pages a').each(function(index) {
    pages[index] = $(this).attr('href');
    loaded[$(this).attr('href')] = 0;
});



$('.box_ver_mas_tiendas').on('click', function(){
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
