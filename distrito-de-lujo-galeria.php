<?
/*

Template name: Distrito de lujo Galería

*/
?>
<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php //include('include-slider-dl.php') ?>
<?php include('include-search-no-slider.php') ?>

    <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4  class="divider">vida en distrito</h4>
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="distrito-de-lujo.php" class="back">< volver</a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <section class="main_content">
      <div id="galerias" class="container">
      
      <div class="row">
        <section class="entretencion clearfix">
       
          <div class="grid_tiendas center-block">
            <div class="hidden-xs">
              <?php include('include-distrito-galeria-desktop.php'); ?>
            </div>

            <div class="visible-xs">
              <?php include('include-distrito-galeria-mobile.php'); ?>
            </div>
          </div>

        </section> <!-- entretencion -->
      </div><!-- row -->
<?php include('footer.php') ?>

