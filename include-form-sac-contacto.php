    <div class="container">
                <div class="row">
                 <form id="form_sac_contacto" class="">
                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="exampleInputName2">Nombre completo <span class="texto_rojo">*</span></label>
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="" name="nombre" required>
                        </div>

                      </div>
                        <div class="col-md-4">
                          <div class="form-group">
                          <label for="exampleInputName2">RUT</label>
                           <input type="text" class="form-control" id="exampleInputName2" placeholder="pasaporte / rut / cédula / DNI" name="rut">
                        </div>

                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label for="email">Email <span class="texto_rojo">*</span></label>
                          <input type="email" class="form-control" id="email" placeholder="tucorreo@ejemplo.com" name="mail" required>
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="exampleInputName2">teléfono</label>
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="" name="fono">
                        </div>

                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                               <label for="exampleInputName2">motivo del contacto <span class="texto_rojo">*</span></label>
                                <select class="selectpicker show-menu-arrow " name="motivo" required> 
                                   <option selected="selected" value=""> seleccione</option>
                                   <option value="Consulta">Consulta</option>
                                   <option value="Sugerencia">Sugerencia</option>
                                   <option value="Felicitaciones">Felicitaciones</option>
                                   <option value="Reclamo">Reclamo</option>
                                   <option value="Travellers - Servicios al Turista">Travellers - Servicios al Turista</option>


                             </select>
                        </div>
                      </div>
                          <div class="col-md-4">
                          <div class="form-group">
                               <label for="exampleInputName2">tipo de servicio <span class="texto_rojo">*</span></label>
                                <select class="selectpicker show-menu-arrow" name="tipo" required> 
                                   <option selected="selected" value="" > seleccione</option>
                                   <option value="1">Servicio al Cliente</option>
                                   <option value="2" >Estacionamientos</option>
                                   <option value="3" >Actividades del mall</option>
                                   <option value="4" >Arriendo espacios y locales</option>
                                   <option value="5" >Arriendo Plazas, Activaciones y Medios</option>
                                   <option value="6" >Arriendo Módulos</option>
                                   <option value="7" >Sitio web y redes sociales</option>
                             </select>
                        </div>
                      </div>

                     
                       <div class="col-md-12">
                              <div class="form-group">
                                <label for="mensaje">MENSAJE  <span class="texto_rojo">*</span></label>
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
                              </div>
                      </div>
              
                      <div class="col-md-8">
                       <div class="form-group">
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" value="1" name="optIn"> Me interesa recibir información de actividades, concursos
                              y promociones organizadas y administradas por el sitio web Parque Arauco
                            
                            </label>
                          </div>
                          </div>
                      </div>
                    <div class="col-md-4">
                           <div class="form-group">
                           <button type="submit" class="btn btn-default btn_rojo pull-right" id="btnEnviar">enviar</button>
                        </div>
                      </div> 
                      </form>
                 </div>
              </div>