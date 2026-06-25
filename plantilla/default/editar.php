   <?php
error_reporting(0);
require_once "cabecera.php" ;
require_once "../../aula/logica/conexion.php" ;
  ?>


<?php 



$id=$_GET['id'];

$consulta="SELECT * FROM usuarios where id=$id";
$resultado=$conexion->query($consulta);
while ($filas=$resultado->fetch_assoc()){
mysqli_set_charset($conexion,"utf8");





echo  "
<style>
  textarea{
  height:50px;


  }
</style>
<form  id='actualizar1' enctype='multipart/form-data' method='POST'>
	
 

		 <div class='pcoded-content'>
                        <div class='pcoded-inner-content'>
                            <div class='main-body'>
                                <div class='page-wrapper'>
                                        <div>
                                         

                                            

    <div class='page-body'>
                                    <div class='row'>
                                        <div class='col-sm-12'>
                                            <!-- Basic Form Inputs card start -->
                                            <div class='card'>
                                                <div class='card-header'>
                                                    <h5>Actualizar datos del Usuario</h5>
                                                  



                                                    </span>


                                                   





                                                    <div class='card-header-right'>
                                                        <i class='icofont icofont-spinner-alt-5'></i>
                                                    </div>

                                                </div>
                                                <div class='card-block'>
                                                    <h4 class='sub-title'>Editar</h4>

                                                        <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Nombre de Estudiante</label>
                                                            <div class='col-sm-10'>
                                                            <input type='hidden' name='id'   class='form-control' value='".$filas['id']."' >
                                                              <input type='text' class='form-control'  name ='completo' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$filas['completo']." '>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Apellidos</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='apellido' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$filas['apellido']." '>
                                                            </div>
                                                        </div>
                                                         <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>correo</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='correo' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$filas['correo']." '>
                                                            </div>
                                                        </div>
                                                           <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Celular</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='celular' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$filas['celular']." '>
                                                            </div>
                                                        </div>
                                                            <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>DNI</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='dni' aria-label='Small' aria-describedby='inputGroup-sizing-sm' readonly value='".$filas['dni']." '>
                                                            </div>
                                                        </div>
                                                          <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>USUARIO</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='nombre' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$filas['nombre']." '>
                                                            </div>
                                                        </div>
                                                         <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>PASSWORD</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='password' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$filas['password']." '>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Fecha de Deposito</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='fecha_deposito' aria-label='Small' aria-describedby='inputGroup-sizing-sm'  readonly value='".$filas['fecha_deposito']." '>
                                                            </div>
                                                        </div>
                                                          <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Banco</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='banco' aria-label='Small' aria-describedby='inputGroup-sizing-sm'  readonly value='".$filas['banco']." '>
                                                            </div>
                                                        </div>

                                                            <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>numero_operacion</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='numero_operacion' aria-label='Small' aria-describedby='inputGroup-sizing-sm'  readonly value='".$filas['numero_operacion']." '>
                                                            </div>
                                                        </div>

                                                        
                                            <div class='form-group row'>
                                      <label class='col-sm-2 col-form-label'>Monto 1 y Detalle</label>
                                          <div class='col-sm-2'>
                                           <input type='text' class='form-control'  name ='monto1' aria-label='Small' aria-describedby='inputGroup-sizing-sm'   value='".$filas['monto1']." '>
                                             </div>
                                             <div class='col-sm-2'>
                                           <input type='text' class='form-control'  name ='detalle1' aria-label='Small' aria-describedby='inputGroup-sizing-sm'   value='".$filas['detalle1']." '>
                                             </div>
                                          <label class='col-sm-2 col-form-label'>Pago de Envio y Detalle</label>
                                          <div class='col-sm-2'>
                                           <input type='text' class='form-control'  name ='monto2' aria-label='Small' aria-describedby='inputGroup-sizing-sm'   value='".$filas['monto2']." '>
                                             </div>
                                             <div class='col-sm-2'>
                                            <input type='text' class='form-control'  name ='detalle2' aria-label='Small' aria-describedby='inputGroup-sizing-sm'   value='".$filas['detalle2']." '>
                                             </div>

                                          </div>
                                             <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Total Ingresado</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='total' aria-label='Small' aria-describedby='inputGroup-sizing-sm'  readonly value='".$filas['total']." '>
                                                            </div>
                                                        </div>

                                                          <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Tipo de Deposito</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='tipo_deposito' aria-label='Small' aria-describedby='inputGroup-sizing-sm'   value='".$filas['tipo_deposito']." '>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Encargado</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='encargado' aria-label='Small' aria-describedby='inputGroup-sizing-sm'   value='".$filas['encargado']." '>
                                                            </div>
                                                        </div>
                                                         <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Fecha Registrado</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='registro' aria-label='Small' aria-describedby='inputGroup-sizing-sm'   readonly value='".$filas['registro']." '>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Boucher</label>
                                                            <div class='col-sm-10'>
                                                             <input type='file' name='imagenes' class='form-control' >
                                                             <img src='".$filas['imagen']." ' class'img-fluid baucher' id='baucher' > <br><br>
                                                             <input type='file' name='imagen2' class='form-control' >
                                                             <img src='".$filas['imagen2']." ' class'img-fluid baucher' id='baucher' >




                                                            </div>
                                                        </div>

<input type='submit' value='insertar' class='btn btn-primary'>
</form>
<div id='respuesta1' class='bg-gradient-warning'>
				
			</div>




                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>



 ";

}




echo " 	 "



 ?>
   <?php

require_once "footer.php" 
  ?>
