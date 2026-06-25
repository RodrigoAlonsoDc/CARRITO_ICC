<?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">Curso de Derecho Ambiental</p>
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



                  
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       






<?php 



 mysqli_set_charset($conexion,"utf8");
			 $sql="SELECT a.subtitulo1,a.video1 FROM cursos c INNER JOIN ambiental a ON c.id_ambiental=a.id_ambiental INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		 <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/T3GOWQnupqc' allowfullscreen></iframe>
</div>  <br><br>


OBJETIVO
<br><br>
El curso pretende desarrollar tem&aacute;ticamente los aspectos fundamentales del sistema jur&iacute;dico nacional acerca de la teor&iacute;a y la pr&aacute;ctica del desarrollo sostenible (articulaci&oacute;n de las variables: desarrollo, medio ambiente y equidad), con el objeto de adiestrar al estudiante en la identificación, conocimiento y operatividad respecto de los problemas jurídico – ambientales de mayor relevancia social.
<br>
Instruye al alumnado en conocimientos te&oacute;ricos sobre legislaci&oacute;n medioambiental. Igualmente le da los imprescindibles apoyos t&eacute;cnicos que le permitan conocer los fundamentos en los que est&aacute; basada la legislaci&oacute;n relativa al medio ambiente en el &aacute;mbito nacional.
<br><br>
METODOLOGÍA
<br>
Respecto a la metodolog&iacute;a virtual, es asincr&oacute;nica, no es necesario estar en línea a una hora determinada, puedes ingresar en cualquier momento de d&iacute;a o de noche inclusive domingos y feriados.
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
			 $sql="SELECT a.subtitulo2,a.video2 FROM cursos c INNER JOIN ambiental a ON c.id_ambiental=a.id_ambiental INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



		echo "	

		  <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>

		<div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='https://www.youtube.com/embed/oUiyqyDxrE4' allowfullscreen></iframe>
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