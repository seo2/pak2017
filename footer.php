      <div class="row">
                   <div class="col-sm-12">
                    <div class="image_dynamic hover">
                       <a href="servicios-cliente.php">
                       <div class="img_servicio" style="background: url(assets/img/bg_servicio_cliente.png);"> </div>
                             <div class="caption_lg">
                                <h3>servicio al cliente</h3>
                                <h4 class="divider">TODO LO QUE NECESITAS SABER</h4>
                                <p>Dónde estamos, tarifas de estacionamiento, contacto y preguntas frecuentes. </p>
                             <!--    <div class="text-center">
                                  <a class="btn btn-default btn_blanco" href="http://revistadetalle.cl/" target="_blank" role="button">ver más</a>
                                </div>  -->
                            </div><!-- caption_lg -->
                       </a>
                  </div>
                </div>
              </div><!-- END MAIN ROW -->
      </div> <!-- END MAIN CONTAINER -->
    </section> <!-- END MAIN_CONTENT -->
            
    <?php include('include-visitanos.php') ?>

    <div class="container">
     <footer>
      <div class="row">
          <div class="col-xs-12 col-sm-4">
            <ul class="menu_footer">
              <li class=""><a href="http://www.parauco.com/" target="_blank">Investor Relations</a></li>
              <li><a href="contacto-comercial.php">Contacto Comercial</a></li>
              <li><a href="https://secure.ethicspoint.com/domain/media/es/gui/23025/index.html" target="_blank">Código Conducta Empresarial</a></li>
              <li><a href="terminos-y-condiciones.php">Términos y Condiciones de Uso</a></li>
              <li><a href="http://sistemas.parquearauco.cl/Relatorios/Inicio.aspx" target="_blank">Relatorios de ventas</a></li>
              <li><a href="http://sistemas.parquearauco.cl/Portal" target="_blank">Proveedores y Locatarios</a></li>
              <li><a href="legales-concursos.php">Legales concursos</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-6">
              <ul class="bullets">
                <li class="bullet clearfix">
                  <div class="bullet-icon bullet-icon-1">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                  </div>
                  <div class="bullet-content">
                    <h2>Parque Arauco Kennedy</h2>
                    <p>Av. Pdte. Kennedy Nº5413, <br>
                    Las Condes. Santiago Chile. <br>
                    <a href="https://www.google.es/maps/place/Parque+Arauco/@-33.4019089,-70.5798102,18z/data=!4m13!1m7!3m6!1s0x9662cf4657be4221:0xedf29683ef50290a!2sAv+Presidente+Kennedy,+Regi%C3%B3n+Metropolitana,+Chile!3b1!8m2!3d-33.3977769!4d-70.5709762!3m4!1s0x9662cf26243dcc31:0xc9aacb64a9fec91!8m2!3d-33.4018773!4d-70.5792048" class="link_rojo" target="_blank">ver en maps</a></p>
                  </div>
                </li>  
                <li class="bullet clearfix">
                  <div class="bullet-icon bullet-icon-2">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </div>
                  <div class="bullet-content">
                    <h2>horarios</h2>
                    <p>Lunes a sábado de 10:00 a 21:00 hrs.</p>
                    <p>domingo y festivos de 11:00 a 21:00 hrs. </p>
                  </div>
                </li>
              </ul>
          </div>
            <a href="http://www.parauco.com/" class="btn_inversionistas hvr-float" target="_blank">
              <img src="https://s219687.gridserver.com/clientes/bond/pak/assets/img/btn_inversionistas.svg" class="img-responsive">
            </a>
        </div> <!-- row -->
      </footer> <!-- footer -->
    </div><!-- container footer -->
    <div class="container">
          <div class="footer_bottom">
          <div class="copy">
              2017 © Todos los derechos reservados.
          </div>
          <div class="trip_advisor">
          <!-- <a href="https://www.tripadvisor.cl/Attraction_Review-g294305-d2491922-Reviews-Parque_Arauco-Santiago_Santiago_Metropolitan_Region.html">
              <img src="assets/img/tripadvisor.png"> 
          </a> -->
            
              <div id="TA_socialButtonBubbles464" class="TA_socialButtonBubbles">
                  <ul id="RuQEoXeD" class="TA_links x91SAq">
                      <li id="ErqX32" class="PZPJHn">
                      <a target="_blank" href="http://www.tripadvisor.cl/Attraction_Review-g294305-d2491922-Reviews-Parque_Arauco-Santiago_Santiago_Metropolitan_Region.html"><img src="http://www.tripadvisor.cl/img/cdsi/img2/branding/socialWidget/20x28_green-21693-2.png"/></a>
                      </li>
                  </ul>
              </div>
              <script src="http://www.jscache.com/wejs?wtype=socialButtonBubbles&amp;uniq=464&amp;locationId=2491922&amp;color=green&amp;size=rect&amp;lang=es_CL&amp;display_version=2"></script>
               
          </div> <!-- trip advisor -->
      </div><!-- footer_bottom -->  
    </div>
    <!-- js --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="http://www.youtube.com/player_api"></script>
    <script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>
<!--     <script src="assets/js/typeahead.min.js"></script> -->
    <script src="assets/js/jquery.autocomplete.min.js"></script>
    <script src="assets/js/formValidation.min.js"></script>
    <script src="assets/js/language/es_ES.js"></script>
	<script src="assets/js/framework/bootstrap.min.js"></script>
    <script src="assets/js/pak.js?v=1.1"></script>

<script> 
	$(function(){
  var currencies = [
	  
	  <?php
	$categorias = $db->rawQuery("select * from pak_categorias");
	if($categorias){
		foreach ($categorias as $p) {
			
			echo "{ value: '".$p['nombre_subcategoria']."', id: '".$p['id_subcategoria']."', tipo: '-', busqueda: 'Cat' },";
		}
	}  	
	$tiendas = $db->rawQuery("select * from pak_tiendas");
	if($tiendas){
		foreach ($tiendas as $t) {
			
			echo "{ value: '". str_replace("'", "",  $t['nombre'])."', id: '".$t['punto_interes']."', tipo: '".$t['tipo']."', busqueda: 'Tienda' },";
		}
	}    
	  ?>
    
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#input_search_home').autocomplete({
    lookup: currencies,
    onSelect: function (suggestion) {
     // alert(suggestion.busqueda+': '+suggestion.value+ ' - id: '+ suggestion.id);
     
      
      if(suggestion.busqueda=='Cat'){
	      pagina = '/tiendas.php?catID=';
      }else if(suggestion.busqueda=='Tienda'){
	      if(suggestion.tipo=='0'){
		      pagina = '/tiendas.php?tiendaID=';
	      }else if(suggestion.tipo=='110'){
		      pagina = '/boulevard-tiendas.php?tiendaID=';
		  }else if(suggestion.tipo=='119'){
		      pagina = '/distrito-de-lujo-tienda.php?tiendaID=';
		  }else if(suggestion.tipo=='131'){
		      pagina = '/piso-diseno.php?tiendaID=';
		  }
      }else{
	      
      }
	  window.location.href = urlpak+pagina+suggestion.id;
      
    }
  });
  

}); 

<?php 	
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url,'distrito-de-lujo-tienda') !== false) {
	    $dl = true;
	} else {
	    $dl = false;
	}
	if(isset($_GET['tiendaID']) && !$dl){
	
	
	
	 ?>
    $("#lang_switcher").removeClass('visible-xs visible-sm').css('display', 'none');
    $(".lang, .rrss, .search").hide();
    $("#caja_datos_tienda").css("display", "block");
    $(".close_tienda").css('display','block').show();
    $('body').toggleClass('menu_open');
<?php } ?>

</script>  
  
  </body>
</html>