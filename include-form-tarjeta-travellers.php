    <div class="container">
             <div class="row">
                 <form id="form_tarjeta_descuento" class="">
                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="nombre">Nombre y apellido <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control" id="nombre" placeholder="" name="nom" required>
                        </div>

                      </div>
                                     <div class="col-md-4">
                          <div class="form-group">
                               <label for="nacionalidad">nacionalidad <span class="texto_rojo">*</span></label>
                                <select name="nacionalidad" required class="selectpicker show-menu-arrow "> 
                                   <option selected="selected" value=""> seleccione</option>
                                   <?php
							 		$paises = $db->rawQuery("select * from pak_paises");
									if($paises){
										foreach ($paises as $t) { ?>
                                   <option value="<?php echo $t['nombre']; ?>"><?php echo $t['nombre']; ?></option>
									<?php	}
									}    
									?>                              

                             </select>
                        </div>
                      </div>

                         <div class="col-md-4">
                          <div class="form-group">
                          <label for="rut">identificacion <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control" id="rut" placeholder="pasaporte / rut / cédula / DNI" name="rut" required>
                        </div>

                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email">Teléfono <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control" id="email" placeholder="" name="fono" required>
                        </div>
                      </div>
                       <div class="col-md-4">
                          <div class="form-group">
                          <label for="fecha">fecha de visita <span class="texto_rojo">*</span></label>
                          <input type="date" class="form-control" id="fecha" placeholder="" name="fecha" required>
                        </div>
                      </div>
                      
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email">danos tu e-mail <span class="texto_rojo">*</span></label>
                          <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com" name="mail" required>
                        </div>
                      </div>

                     <!--<div class="col-md-8">
                          <div class="form-group">
                          <label for="exampleInputName2">hospedaje</label>
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="INGRESE HOTEL O DIRECCIÓN DONDE HOSPEDA">
                        </div>
                      </div> -->
                    
                       <div class="col-md-12">
                          <div class="form-group">
                          <label for="mensaje">mensaje <span class="texto_rojo">*</span></label>
                          <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
                        </div>
                      </div>
                  
                        <div class="col-sm-8">
                           <div class="form-group">
                            <div class="checkbox">
                                <label class="subscribe">
                                  <input type="checkbox" name="optIn" value="1"> Me interesa recibir información de actividades, concursos
                                  y promociones organizadas y administradas por el sitio web Parque Arauco
                                
                                </label>
                              </div>
                              </div>
                        </div>

                         <div class="col-sm-4">
                             <div class="form-group">
                             <button type="submit" class="btn btn-default btn_rojo" id="btnEnviar">enviar</button>
                          </div>
                        </div>
                    
                 
                      </form>
                 </div>
               
              </div>