<?php 
require 'superior.php'
 
 ?>

<p class="text-center h3 mt-4">Seminario de Proceso de Desalojo en la Corte Suprema</p>
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
			 $sql="SELECT d.subtitulo1,d.video1 FROM cursos c INNER JOIN desalojo d ON c.id_desalojo=d.id_desalojo INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>
TEMA: “EL PROCESO DE DESALOJO EN CORTE SUPREMA”  <br>
PONENTES: <br>
DR. JULIO POZO S&Aacute;NCHEZ  <br>
DR. FORT NINAMANCCO C&Oacute;RDOVA  <br>
COMENTARIOS:  <br>
EX. MAGISTRADO CESAR CASTA&Ntilde;EDA.
			
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