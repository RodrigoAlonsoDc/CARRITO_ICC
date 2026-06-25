<?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">Electricidad Basica</p>
<!-- Demo header-->
<section class="sect header">
    <div class="container py-4">
        


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#panel1" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n I</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#panel2" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n II</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#panel3" role="tab" aria-controls="panel3" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n III</span></a>
                        
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#panel4" role="tab" aria-controls="panel4" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n IV</span></a>
                        
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#panel5" role="tab" aria-controls="panel5" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n V</span></a>
                        
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#panel6" role="tab" aria-controls="panel6" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n VI</span></a>

                  
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="panel1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT e.subtitulo,e.video,e.recurso FROM cursos c INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>MÓDULO 1: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>



</p>

<a href='cursos/electricidad/Modulo1/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>


			
		";
    }
    else{
    	echo "";
    }


      ?>
</div>

<div class="tab-pane fade shadow rounded bg-white p-5" id="panel2" role="tabpanel" aria-labelledby="v-pills-profile-tab">


<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT e.subtitulo1,e.video1,e.recurso1 FROM cursos c INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>MÓDULO 2: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

</p>

<a href='cursos/electricidad/Modulo2/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>

</p>


			
		";
    }
    else{
    	echo "";
    }

      ?>

</div>

<div class="tab-pane fade shadow rounded bg-white p-5" id="panel3" role="tabpanel" aria-labelledby="v-pills-profile-tab">


<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT e.subtitulo2,e.video2,e.recurso2 FROM cursos c INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



        echo "  

         <h4 class='font-italic mb-4'>MÓDULO 3: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
        <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

</p>

<a href='cursos/electricidad/Modulo3/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>

</p>
            
        ";
    }
    else{
        echo "";
    }

      ?>
      
</div>
<div class="tab-pane fade shadow rounded bg-white p-5" id="panel4" role="tabpanel" aria-labelledby="v-pills-profile-tab">



    <?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT e.subtitulo3,e.video3,e.recurso3 FROM cursos c INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



        echo "  

         <h4 class='font-italic mb-4'>MÓDULO 4: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
        <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>



</p>

<a href='cursos/electricidad/Modulo4/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
</p>

            
        ";
    }
    else{
        echo "";
    }

      ?>

</div>
<div class="tab-pane fade shadow rounded bg-white p-5" id="panel5" role="tabpanel" aria-labelledby="v-pills-profile-tab">


  <?php 
 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT e.subtitulo4,e.video4,e.recurso4 FROM cursos c INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



        echo "  

         <h4 class='font-italic mb-4'>MÓDULO 5: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
        <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>



</p>
<a href='cursos/electricidad/Modulo5/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>

</p>

            
        ";
    }
    else{
        echo "";
    }

      ?>
      
</div>
<div class="tab-pane fade shadow rounded bg-white p-5" id="panel6" role="tabpanel" aria-labelledby="v-pills-profile-tab">
      
      

          <?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT e.subtitulo5,e.video5,e.recurso5 FROM cursos c INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



        echo "  

         <h4 class='font-italic mb-4'>MÓDULO 6: $fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
        <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>



</p>





<a href='cursos/electricidad/Modulo6/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
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