<?
/*

Template name: Servicio al Cliente Servicios

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-servicios-cliente.php') ?>
<?php include('include-search-no-slider.php') ?>
    <div class="titulo_seccion sin_slider ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
               <h4 class="divider">servicios generales</h4> 
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="servicio-al-cliente.php" class="back">< volver</a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

    <section class="main_content">
      <div class="container">
          <div class="row">
          <section class="travellers_servicios_generales clearfix">
      
           
          <div class="col-sm-12">
            <?php include('include-slider-travellers-servicios-generales.php'); ?>
          </div>
          </section><!-- travellers servicios generales -->
          <section class="travellers_servicios_adicionales clearfix">
		<? 
			    $detect = new Mobile_Detect();
			    	 
				if ($detect->isMobile()) { 
				   include('include-travellers-servicios-adicionales-mobile.php'); 
				}else{ 	 
				  	include('include-travellers-servicios-adicionales-desktop.php');
				}
		?>
          </section>
    </div> <!-- row -->
<?php include('footer.php') ?>