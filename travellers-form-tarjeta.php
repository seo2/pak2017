<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php // include('include-slider-home.php') ?>
<?php //include('include-search-home.php') ?>
<?php include('include-search-no-slider.php') ?>
     <div class="titulo_seccion sin_slider">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4 class="divider">contacto</h4>
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
          <section class="tarjeta_descuento">
            

               <p> En nuestro afán por entregarte siempre una experiencia única y de calidad, disponemos
                          para ti una serie de servicios que harán de tu visita a Parque Arauco el mejor momento.</p>

               <p> Nuestro personal, altamente capacitado, tiene una clara orientación hacia 
                         tus necesidades, siempre con la mejor disposición a ayudarte en lo que necesites.</p>

               <p> Para cualquier duda o consulta, puedes llamarnos directamente al teléfono: 
               <span class="texto_negro_bold">600 500 0011</span> o bien escribirnos a través del siguiente formulario:</p>

                <p class="texto_rojo">Los campos marcados con el signo (*) son obligatorios.</p>

                <!-- formulario  -->
               <?php  include('include-form-tarjeta-travellers.php') ?>
             

          
          
          </section> <!-- tarjeta_descuento -->
      </div> <!-- row -->
<?php include('footer.php') ?>

