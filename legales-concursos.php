<?
/*

Template name: Legales Concursos

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
               <h4 class="divider">bases legales concursos </h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="<?php bloginfo('url'); ?>" class="back">< volver</a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->


    <section class="main_content">
      <div class="container">
          <div class="row">
              <section class="terminos clearfix">
                <!--   <h4 class="divider">términos y condiciones</h4> -->

                <div class="col-sm-12">
                <div class="content">
                  
                    <form id="bases">
                      <div class="col-sm-12">
                          <div class="form-group">
                              <label for=""> Selecciona la base del concurso que estas buscando(.PDF)</label>
                              <select class="selectpicker input-large form-control ">
                                  <option value=""> Selecciona </option>
                                  <option value=""> Bases 1</option>
                                  <option value=""> Bases 2</option>
                                  <option value=""> Bases 3</option>
                              </select>
                        </div>
                      </div>
                    </form>
                </div>

             
                  </div>
              </section> <!-- end terminos -->
      </div>

<?php include('footer.php') ?>

