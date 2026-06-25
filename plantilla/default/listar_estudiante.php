
  <?php
error_reporting(0);
require_once "cabecera.php" ;
require_once "../../aula/logica/conexion.php" ;
  ?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                   <div class="page-body">
                                        <!-- Config. table start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>LISTA DE ESTUDIANTES ESCRITOS</h5>
                                                <span>.</span>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="feather icon-maximize full-card"></i></li>
                                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                  <th>ID</th>
                                                                    <th>Nombres</th>
                                                                    <th>Apellidos</th>
                                                                    <th>usuario</th>
                                                                    <th>fecha_deposito</th>
                                                                    <th>Numero de Operación</th>
                                                                    <th>Monto Pagado</th>
                                                                    <th>Encargado de Registro</th>
                                                                    <th>fecha de registro</th>
                                                                     <th>opciones</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 
                                                               <?php 
                                                                  mysqli_set_charset($conexion,"utf8");
                                $sql="SELECT * FROM usuarios ORDER BY ID DESC LIMIT 10";
                                $result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_array($result)) {
                                    
                           
                                 ?>
                                <tr> 
                                  <th scope="row"><?php  echo $mostrar['id'] ?></th>
                                  <th scope="row"><?php  echo $mostrar['completo'] ?></th>
                                  <td><?php  echo $mostrar['apellido'] ?></td>
                                    <td><?php  echo $mostrar['nombre'] ?></td>
                                          <td><?php  echo $mostrar['fecha_deposito'] ?></td>
                                          
                                                       <td><?php  echo $mostrar['numero_operacion'] ?></td>
                                                           <td><?php  echo $mostrar['total'] ?></td>
                                                           <td><?php  echo $mostrar['encargado'] ?></td>
                                                            <td><?php  echo $mostrar['registro'] ?></td>
                                            <td>
        <button class="btn btn-danger glyphicon glyphicon-remove" ><a href="editar.php?id=<?php  echo  $mostrar['id'];?>" >   <font color="white">EDITAR</font> </a> </button>

</td>    </tr>
                                <?php       } ?>

                                                            </tbody>
                                                        </table>
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

  <?php

require_once "footer.php" ;
  ?>