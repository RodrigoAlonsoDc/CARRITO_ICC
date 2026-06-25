<?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">Curso de Derecho Penal</p>
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
                         
                          <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages1" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n IV y V</span></a>

                         <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages2" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n VI</span></a>

                         <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages3" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n VII</span></a>

                         <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages4" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n VIII y IX</span></a>


                         <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages5" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Sesi&oacute;n X</span></a>

                  
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT p.subtitulo1,p.video1 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                      

<br>



<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT p.subtitulo2,p.video2 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT p.subtitulo3,p.video3 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    
                  








 <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages1" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT p.subtitulo4,p.video4 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    







 <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages2" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT p.subtitulo5,p.video5 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    



 <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT p.subtitulo6,p.video6 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    



<div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages4" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT p.subtitulo7,p.video7 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    
<div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages5" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT p.subtitulo8,p.video8 FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id " ;
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
                    



                </div>
            </div>
        </div>
    </div>
</section>

		




<?php 

require 'inferior.php';
 ?>