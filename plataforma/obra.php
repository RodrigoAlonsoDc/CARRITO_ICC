<?php 
require 'superior.php'
 
 ?>

<p class="text-center h3 mt-4">Curso de Obra por Impuesto </p>
<!-- Demo header-->
<section class="sect header">
    <div class="container py-4">
        


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n I</span></a>

                
                  
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT o.subtitulo,o.video,o.recurso1,o.recurso2 FROM cursos c INNER JOIN obra o ON c.id_obra=o.id_obra INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>
        <a href='cursos/obra/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>

         <a href='cursos/obra/$fila[3]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>

<br>
Sesión I: Mecanismo de Obras por Impuesto: Mejoras al Marco Normativo<br>

Sesión II: Aproximaci&oacute;n al modelo de obras por impuesto en el Per&uacute;.<br>

(Msc. Francisco Torres Madrid)<br>
			
		";
    }
    else{
    	echo "";
    }

      ?> <br>
                        
                    </div>
                    
          
          
                    
                  
                </div>
            </div>
        </div>
    </div>
</section>

		




<?php 

require 'inferior.php';
 ?>