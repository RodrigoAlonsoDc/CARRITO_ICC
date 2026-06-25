<?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">Especializaci&oacute;n de Motores El&eacute;ctricos Trif&aacute;sicos</p>
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

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n II</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n III</span></a>

                  
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT m.subtitulo1,m.video1,m.video2,m.recurso FROM cursos c INNER JOIN motores m ON c.id_motores=m.id_motores " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

  <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[2]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/motores/modulo1/$fila[3]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                        
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      





<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT m.subtitulo2,m.video3,m.video4,m.recurso2 FROM cursos c INNER JOIN motores m ON c.id_motores=m.id_motores" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

  <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[2]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/motores/modulo2/$fila[3]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                       
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT m.subtitulo3,m.video5,m.recurso3 FROM cursos c INNER JOIN motores m ON c.id_motores=m.id_motores " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

  

		echo "	
		<h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/motores/modulo3/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                 
                    </div>
                    
                  
                </div>
            </div>
        </div>
    </div>
</section>

		




<?php 

require 'inferior.php';
 ?>