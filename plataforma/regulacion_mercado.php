 <?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">REGULACI&Oacute;N DEL MERCADO EL&Eacute;CTRICO</p>
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

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n II</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT r.subtitulo1,r.video1,r.archivos1 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo1/$fila[2].rar' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
			
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
			 $sql="SELECT r.subtitulo2,r.video2,r.archivos2 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo2/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
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
			 $sql="SELECT r.subtitulo3,r.video3,r.archivo3 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

  

		echo "	
		<h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo3/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                 
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                       
<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT r.subtitulo4,r.video4,r.archivo4 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

  

		echo "	
		<h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo4/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
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

		

	<p class="text-center h3 ">REGULACI&Oacute;N DEL MERCADO DE HIDROCARBUROS L&iacute;QUIDOS</p>

	<br>








<section class="sect header">
    <div class="container py-4">
        


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home1" role="tab" aria-controls="v-pills-home1" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n I</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile1" role="tab" aria-controls="v-pills-profile1" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n II</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages1" role="tab" aria-controls="v-pills-messages1" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n III</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n IV</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT r.subtitulo5,r.video5,r.archivo5 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo5/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                        
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      





<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT r.subtitulo6,r.video6,r.archivo6 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo6/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                       
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages1" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT r.subtitulo7,r.video7,r.archivo7 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

  

		echo "	
		<h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo7/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                 
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                       
<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT r.subtitulo8,r.video8,r.archivo8 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

  

		echo "	
		<h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

				<a href='cursos/regulacion_mercado/modulo8/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
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