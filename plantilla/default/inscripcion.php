
  <?php
  error_reporting(0);
require_once "../../aula/logica/conexion.php" ;
require_once "cabecera.php" ;

  ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                     
                                           
                                            
                                     
                                   
                                       
 <div class="card">

                                                <div class="card-header">
                                                  <p>Inscribir Usuario a curso</p>
                                       <div class="card-block">
                                        <form method="POST" id="inscribir" enctype="multipart/form-data" >

                                  

                                                 <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nombre Completo</label>
                                                            <div class="col-sm-10">
                                                                <select class="js-example-diacritics col-sm-12" multiple="multiple" name="id" required>
                                                                <?php

 mysqli_set_charset($conexion,"utf8");

          $query = $conexion -> query ("SELECT * FROM usuarios");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id].'">'.$valores[completo].' &nbsp; '.$valores[apellido].'</option>';
          }
        ?>
                                                            </select>
                                                            </div>
                                                        </div>

                                                        <br>
                                                          <h4>Escoger Los cursos de Ingenier&iacute;a que llevara el estudiante</h4>
                                                        <br>


                                      <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Curso de Regulaci&oacute;n del Mercado de Energ&iacute;a</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_regulacion_mercado">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>

                                    
                                           <!--<div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Especializaci&oacute;n de Motores El&eacute;ctricos Trif&aacute;sicos</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_motores">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>-->


                                             <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Sistema de Gesti&oacute;n y Seguridad en el Trabajo Ley Nº29783</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_seguridad">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>




                                             <!--<div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Sistema de Puesta a Tierra</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_tierra">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>-->

                                            <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Curso de Analizador de Redes</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_redes">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>



                                                 <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">An&aacute;lisis de Facturaci&oacute;n y Tarifas El&eacute;ctricas</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_analisis">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>

                                                 <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Banco de Condensadores</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_banco">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>
                                          
                                           <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Motores El&eacute;ctricos 2021</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_motores2021">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>
                                          
                                          <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Sistema Puesta Tierra 2021</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_tierra_2021">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>
                                          
                                          <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Curso de Electricidad B&aacutesica</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_electricidad">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>
                                          
                                          <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Programaci&oacuten B&aacutesica de PLC</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_progplc">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>

                                              <br>
                                                          <h4>Escoger Los cursos de Derecho que llevara el estudiante</h4>
                                                        <br>




                                           <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Seminario de Proceso de Desalojo en la Corte Suprema</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_desalojo">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>



                                           <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Curso de Obra por Impuesto</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_obra">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>

                                             <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Modificaciones al Reglamento de la ley de Contrataciones con el Estado</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_contratacion">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>



                                          <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Curso de Derecho Ambiental</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_ambiental">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>


                                          <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Curso de Derecho Penal</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_penal">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>


                                            <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Especialización Nuevo C&oacute;digo Procesal Penal</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_procesal">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>



                                            <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Litigaci&oacute;n OraI en el Nuevo C&oacute;digo Procesal Penal</label>
                                          <div class="col-sm-10">
                                           <div class="">

                                              <select id="hello-single" class="form-control" name="id_litigacion">
                                                
                                                    <option value="2" >No </option>
                                                      <option value="1" > Si</option>

                                              </select>
                                                                   
                                                 </div>
                                             </div>
                                          </div>

                                           <button  type="submit" class="btn btn-mat btn-primary " id="insertar" name="insertar" value="insertar">Registrar</button>


                                      </form>   
                                      <div id="respuesta"></div>
                                       </div>
                                     </div></div>
                                                                
                                           
                                                         
                                                       
                                         
                                                
                                                         
                                                                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<html>
    <body>
   

     
    </body>
</html>



  <?php

require_once "footer.php" ;
  ?>


