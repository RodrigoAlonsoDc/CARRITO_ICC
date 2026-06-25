
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
                                                <h5>LISTA DE ESTUDIANTES y Cursos ESCRITOS</h5>
                                               
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="feather icon-maximize full-card"></i></li>
                                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block">
                                               <form action="../pdf/porfecha.php" method="post" > 
                                                <span>Lista de Estudiantes Inscritos por Fecha </span>
                             <input type="date" id="desde" name="desde" />
                             <input type="date" id="hasta" name="hasta" />
                             

      <button  type="submit" id="mos" class="btn btn-primary glyphicon glyphicon-remove" > <font color="white"> Imprimir por Fecha</font>  </button>
        
        </form>
        <br><br>

        <form action="../pdf/contable.php" method="post" > 
                                                <span>Datos Contables por fecha  </span>
                             <input type="date" id="desde" name="desde" />
                             <input type="date" id="hasta" name="hasta" />


      <button  type="submit" id="mos" class="btn btn-primary glyphicon glyphicon-remove" > <font color="white"> Imprimir por Fecha</font>  </button>
        
        </form>


          <form action="../mpdf/reportes.php" method="post" > 
                                                <span>Bauchers por Fecha  </span>
                             <input type="date" id="desde" name="desde" />
                             <input type="date" id="hasta" name="hasta" />


      <button  type="submit" id="mos" class="btn btn-primary glyphicon glyphicon-remove" > <font color="white"> Imprimir por Fecha</font>  </button>
        
        </form>
        <br><br>
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                  <th>ID</th>
                                                                    <th>Nombres Completos</th>

                                                                     <th>opciones</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                 
                                                               <?php 
                                mysqli_set_charset($conexion,"utf8");
                                $sql="SELECT c.id_curso,u.completo,u.apellido FROM cursos c INNER JOIN usuarios u ON c.id=u.id  ORDER BY c.id_curso DESC   LIMIT 10  ";
                                $result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_row($result)) {
                                    

                                  $primera=$mostrar['0'];
                                 ?>
                                <tr> 
                                  <th scope="row"><?php  echo $mostrar['0'] ?></th>
                                  <th scope="row"><?php  echo $mostrar['1'] ?>
                                    <?php  echo $mostrar['2'] ?>
                                  </th>
                                
                                  
                                            <td>
        <button class="btn btn-danger glyphicon glyphicon-remove" ><a href="editar_registro.php?id=<?php  echo  $mostrar['0'];?>" >   <font color="white">EDITAR</font> </a> </button>

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
