<?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">An&aacute;lisis de Facturaci&oacute;n y evaluaci&oacute;n de tarifas El&eacute;ctricas</p>
<!-- Demo header-->
<section class="sect header">
    <div class="container py-4">
        


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">M&oacute;dulo I</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">M&oacute;dulo II</span></a>
                    
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-1" role="tab" aria-controls="v-1" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">M&oacute;dulo III Parte Practica</span></a>
                    
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-2" role="tab" aria-controls="v-2" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">M&oacute;dulo IV Parte Practica</span></a>
                        
                  
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo1,a.video1,a.recurso FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>



				<a href='cursos/analisis/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
			
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
			 $sql="SELECT a.subtitulo2,a.video2 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                       
                    </div>
                    
<div class="tab-pane fade shadow rounded bg-white p-5" id="v-1" role="tabpanel" aria-labelledby="v-1">
                      





<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo3,a.video3 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 1: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>

<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo4,a.video4 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 2: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>

<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo5,a.video5 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 3: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>

<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo6,a.video6 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 4: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>

<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo7,a.video7 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 5: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
                       
                    </div>

<div class="tab-pane fade shadow rounded bg-white p-5" id="v-2" role="tabpanel" aria-labelledby="v-2">
                      





<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo8,a.video8 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 1: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
      
<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo9,a.video9 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 2: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>

<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo10,a.video10 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 3: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>

<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo11,a.video11 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 4: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
      
<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo12,a.video12 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 5: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>
      
<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo13,a.video13 FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>Sesión 6: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>


			
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