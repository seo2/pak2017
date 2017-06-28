<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>

    <div class="titulo_seccion ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
                <h4  class="divider">galería de fotos</h4>
            </div>
            <div class="col-sm-12 col-md-2">
                 <a href="novedades.php#entretencion" class="back">< volver</a>
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
              <?php include('include-novedades-galeria-desktop.php'); ?>
            </div>

            <div class="visible-xs">
              <?php include('include-novedades-galeria-mobile.php'); ?>
            </div>
          </div>

            <section class="galeria_videos">
              <h4 class="divider">videos</h4>
                <div class="container">
                  <div class="row">
                      <div class="col-sm-6">
                        <div id="video2" class="box_video" data-video="_YZyLJecku4">
                            <div class="lente_video"></div>
                            <!-- 560 x 300 -->
                            <div class="cap_video" style="background: url(assets/img/day_off.png);"></div>
                            <div class="yt-video embed-responsive embed-responsive-16by9">
                              <iframe  class="videito video2" width="420" height="315" src="" frameborder="0" allowfullscreen></iframe> 
                            </div>                        
                                <div class="btn_play_video">
                                  <a class="hvr-float play_video">
                                      <img src="assets/img/btn_play_video.png" alt="">
                                  </a> 
                                  <p>ver video</p>                               
                            </div>
                        </div>
                      </div>
                       <div class="col-sm-6">
                        <div id="video1" class="box_video" data-video="bkPN-msE7SI">
                            <div class="lente_video"></div>
                              <!-- 560x300-->
                            <div class="cap_video" style="background: url(assets/img/navidad.jpg);"> </div>
                            <div class="yt-video embed-responsive embed-responsive-16by9">
                               <iframe  class="videito video1"  width="420" height="315" src="" frameborder="0" allowfullscreen></iframe> 
                            </div>
                            <div class="btn_play_video">
                                  <a class="hvr-float play_video">
                                      <img src="assets/img/btn_play_video.png" alt="">
                                  </a>
                                  <p>ver video</p>                                 
                            </div>
                        </div>
                      </div>
                      

                  </div>
                </div> <!-- container-videos -->

            </section>
            
            <div class="box_ver_mas_tiendas text-center">
             <a href="https://www.youtube.com/user/parquearauco/videos" target="_blank" class="btn btn-default btn_ver_mas hvr-float">
                <h3 class="ver_mas">ver más videos</h3>
                <img src="assets/img/arrow_down.png" alt="" class="img-responsive center-block arrow_down">
            </a>
          </div>
        </section> <!-- entretencion -->
      </div><!-- row -->
<?php include('footer.php') ?>

