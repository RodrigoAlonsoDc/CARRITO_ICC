<?php 
require 'superior.php'

 ?>

<p class="text-center h3 mt-4">Litigaci&oacute;n OraI en el Nuevo C&oacute;digo Procesal Penal</p>
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
             $sql="SELECT l.subtitulo1,l.video1 FROM cursos c INNER JOIN litigacion l ON c.id_litigacion=l.id_litigacion INNER JOIN usuarios u ON c.id=u.id" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {



        echo "  

         <h4 class='font-italic mb-4'>$fila[0]</h4>
                        <p class='font-italic text-muted mb-2'>
        <div class='embed-responsive embed-responsive-16by9'>
  <iframe class='embed-responsive-item' src='$fila[1]' allowfullscreen></iframe>
</div>  <br><br>

TEMARIO:
<br><br>
Ámbito de litigaci&oacute;n: Como contar la historia del caso <br>
Ámbito de litigaci&oacute;n: Elementos de la teoría del caso<br>
Ámbito de litigaci&oacute;n: Alegatos iniciales<br>
Ámbito de litigaci&oacute;n: Alegato final<br>
Ámbito de litigaci&oacute;n: Técnica del interrogatorio <br>
Ámbito de litigaci&oacute;n: Objeciones a preguntas <br>
Aplicaci&oacute;n: Análisis de audiencias <br>
Aplicaci&oacute;n: Simulaci&oacute;n de audiencia penal <br>

CERTIFICACI&Oacute;N: <br>
ICC Capacitaciones en Derecho y Gestión Pública <br>
Se entregará un certificado firmado por el COLEGIO DE ABOGADOS DE LIMA <br><br>

Expositores:<br><br>

VICTOR CUBAS VILLANUEVA <br>
ELIZABETH ARIAS QUISPE <br>
DAIVI FARFAN SULLCAHUAMAN <br>
SERGIO EMERSON CHAVEZ PANDURO <br>
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
             $sql="SELECT l.subtitulo2,l.video2 FROM cursos c INNER JOIN litigacion l ON c.id_litigacion=l.id_litigacion INNER JOIN usuarios u ON c.id=u.id" ;
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