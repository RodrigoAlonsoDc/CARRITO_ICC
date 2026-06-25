<?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">Motores Eléctricos</p>
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

                  
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="panel1" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT mo.subtitulo1,mo.video1 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>






			
		";
    }
    else{
    	echo "";
    }


      ?>





<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT mo.subtitulo2,mo.video2 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
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


<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo3,mo.video3 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
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



    <?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo4,mo.video4 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
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


</p>

            
        ";
    }
    else{
        echo "";
    }

      ?>



  <?php 
 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo11,mo.video11 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
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


</p>

            
        ";
    }
    else{
        echo "";
    }

      ?>
      
      

          <?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo5,mo.video5,mo.recurso1 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
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





<a href='cursos/motores2021/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
</p>

            
        ";
    }
    else{
        echo "";
    }

      ?>



 <?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo12,mo.video12,mo.recurso1 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
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





<a href='cursos/motores2021/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
</p>

            
        ";
    }
    else{
        echo "";
    }

      ?>

                        
<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo13,mo.video13,mo.recurso1 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id " ;
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





<a href='cursos/motores2021/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
</p>

            
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
			 $sql="SELECT mo.subtitulo6,mo.video6 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id" ;
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
				 </p>
			
		";
    }
    else{
    	echo "";
    }

      ?>




    <?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo7,mo.video7 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id" ;
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
</p>
        

                 </p>
            
        ";
    }
    else{
        echo "";
    }

      ?>
      
      

  <?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo8,mo.video8,mo.recurso2 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



        echo "  

          <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

        <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

<a href='cursos/motores2021/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a>
</p>
</p>
        

                 </p>
            
        ";
    }
    else{
        echo "";
    }

      ?>
      




                       
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="panel3" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                     






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT mo.subtitulo9,mo.video9,mo.recurso3 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id" ;
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


<?php 



 mysqli_set_charset($conexion,"utf8");
             $sql="SELECT mo.subtitulo10,mo.video10,mo.recurso2 FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id" ;
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

         <a href='cursos/motores2021/$fila[2]' target='_blank'><button type='button' class='btn btn-success'>Descargar Recursos</button></a></p>
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