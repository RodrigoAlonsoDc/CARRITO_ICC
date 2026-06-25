
  <?php
error_reporting(0);
require_once "cabecera.php" ;

  ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        
                                           
                                            
                                     
                                   
                                       
 <div class="card">

                                                <div class="card-header">
                                                  <p>Ingresar Nuevo Estudiante</p>
                                       <div class="card-block">
                                        <form method="POST" id="formulario" enctype="multipart/form-data" >

                                   <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Nombre Completo</label>
                                                            <div class="col-sm-10">
                                                                <input  type="text" class="form-control form-txt-primary"  placeholder="Escribir Nombre Completo" name="completo">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Apellidos</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control form-txt-primary" placeholder="Escribir Apellidos" name="apellido">
                                                            </div>
                                                        </div>

                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Correo</label>
                                          <div class="col-sm-10">
                                           <input type="text" class="form-control form-txt-primary" placeholder="Escribir Correo" name="correo">
                                             </div>
                                          </div>

                                           <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Numero Celular</label>
                                          <div class="col-sm-10">
                                           <input type="number" class="form-control form-txt-primary" placeholder="Digitar Numero de Celular" name="celular">
                                             </div>
                                          </div>

                                             <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Numero de DNI</label>
                                          <div class="col-sm-10">
                                           <input type="number" class="form-control form-txt-primary" placeholder="Digitar Numero de DNI" name="dni">
                                             </div>
                                          </div>
                                          
                                           <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Nombre de Usuario</label>
                                          <div class="col-sm-10">
                                           <input type="text" class="form-control form-txt-primary" placeholder="usuario para plataforma" name="nombre" >
                                             </div>
                                          </div>

                                          <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Contrase&ntilde;a</label>
                                          <div class="col-sm-10">
                                           <input type="password" class="form-control form-txt-primary" placeholder="Contrase&ntilde;a" name="password" >
                                             </div>
                                          </div>

                                              <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">fecha de deposito y hora</label>
                                          <div class="col-sm-10">
                                           <input type="datetime-local" class="form-control form-txt-primary"  name="fecha_deposito" >
                                             </div>
                                          </div>
                                          

                                              <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Banco</label>
                                          <div class="col-sm-10">
                                           <input type="text" class="form-control form-txt-primary" placeholder="Ingresar de que banco se realizo la operaci&oacute;n" name="banco" >
                                             </div>
                                          </div>
                                          

                                              <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Numero de Operaci&oacute;n</label>
                                          <div class="col-sm-10">
                                           <input type="text" class="form-control form-txt-primary" placeholder="numero de operaci&oacute;n" name="numero_operacion" >
                                             </div>
                                          </div>
                                          

                                            <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Monto 1 y Detalle</label>
                                          <div class="col-sm-2">
                                           <input type="number" class="form-control form-txt-primary" placeholder="monto 1" name="monto1" >
                                             </div>
                                             <div class="col-sm-2">
                                           <input type="text" class="form-control form-txt-primary" placeholder="detalle de deposito" name="detalle1" >
                                             </div>
 <label class="col-sm-2 col-form-label">Pago de Envio y Detalle</label>
                                          <div class="col-sm-2">
                                           <input type="number" class="form-control form-txt-primary" placeholder="monto 2" name="monto2" >
                                             </div>
                                             <div class="col-sm-2">
                                           <input type="text" class="form-control form-txt-primary" placeholder="detalle de envio" name="detalle2" >
                                             </div>

                                          </div>
                                          

                                          <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tipo de Deposito</label>
                                          <div class="col-sm-10">
                                           <input type="text" class="form-control form-txt-primary" placeholder="Tipo de deposito" name="tipo_deposito" >
                                             </div>
                                          </div>

                                            <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Encargado de Registro</label>
                                          <div class="col-sm-10">
                                           <input type="text" class="form-control form-txt-primary" placeholder="Nombre de quien Registra" name="encargado" >
                                             </div>
                                          </div>
                                          



                                             <div class="form-group row">
                                 
                                          <div class="col-sm-10">
                                          <input type="text" name="empresa" value="ICC" class="form-control" hidden>
                                          </div>

                                           <div class="card-block">
                                                <div class="sub-title">Ingresar Baucher</div>
                                               <input type="file" name="imagenes" class="form-control" ><br><br>
                                                  <input type="file" name="imagen2" class="form-control" >

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

  <?php

require_once "footer.php" ;
  ?>

