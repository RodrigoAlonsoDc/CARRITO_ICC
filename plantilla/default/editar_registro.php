   <?php
error_reporting(0);
require_once "cabecera.php" ;
require_once "../../aula/logica/conexion.php" ;
  ?>


<?php 



$id=$_GET['id'];
mysqli_set_charset($conexion,"utf8");
$consulta="SELECT c.id_curso,u.completo,u.apellido,r.titulo,m.titulo,s.titulo,t.titulo,re.titulo,a.titulo,b.titulo,mo.titulo,ti.titulo,e.titulo,pl.titulo,d.titulo,o.titulo,co.titulo,am.titulo,pe.titulo,pro.titulo,l.titulo FROM cursos c INNER JOIN usuarios u ON c.id=u.id INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN motores m ON c.id_motores=m.id_motores INNER JOIN seguridad s ON c.id_seguridad=s.id_seguridad INNER JOIN tierra t ON c.id_tierra=t.id_tierra INNER JOIN redes re ON c.id_redes=re.id_redes INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN banco b ON c.id_banco=b.id_banco INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN tierra_2021 ti ON c.id_tierra_2021=ti.id_tierra_2021 INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN progplc pl ON c.id_progplc=pl.id_progplc INNER JOIN desalojo d ON c.id_desalojo=d.id_desalojo INNER JOIN obra o ON c.id_obra=o.id_obra INNER JOIN contratacion co ON c.id_contratacion=co.id_contratacion INNER JOIN ambiental am ON c.id_ambiental=am.id_ambiental INNER JOIN penal pe ON c.id_penal=pe.id_penal INNER JOIN procesal pro ON c.id_procesal=pro.id_procesal INNER JOIN litigacion l ON c.id_litigacion=l.id_litigacion where c.id_curso=$id";
$result=mysqli_query($conexion,$consulta);
                                while ($mostrar=mysqli_fetch_row($result)){






echo  "
<style>
  textarea{
  height:50px;


  }
</style>
<form  id='registro_editar' enctype='multipart/form-data' method='POST'>
	
 

		 <div class='pcoded-content'>
                        <div class='pcoded-inner-content'>
                            <div class='main-body'>
                                <div class='page-wrapper'>
                                        <div>
                                         

                                            

    <div class='page-body'>
                                    <div class='row'>
                                        <div class='col-sm-12'>
                                            <!-- Basic Form Inputs card start -->
                                            <div class='card'>
                                                <div class='card-header'>
                                                    <h5>Actualizar datos del Usuario</h5>
                                                  



                                                    </span>


                                                   





                                                    <div class='card-header-right'>
                                                        <i class='icofont icofont-spinner-alt-5'></i>
                                                    </div>

                                                </div>
                                                <div class='card-block'>
                                                    <h4 class='sub-title'>Editar</h4>

                                                        <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Nombre de Estudiante</label>
                                                            <div class='col-sm-10'>
                                                            <input type='hidden' name='id_curso'   class='form-control' value='". $mostrar['0']."' >
                                                              <input type='text' class='form-control'  name ='completo' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$mostrar['1']." '>
                                                            </div>
                                                        </div>
                                                        
                                                         <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Apellidos</label>
                                                            <div class='col-sm-10'>
                                                            
                                                              <input type='text' class='form-control'  name ='apellido' aria-label='Small' aria-describedby='inputGroup-sizing-sm' value='".$mostrar['2']." '>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <p class='h4'>CURSOS DE INGENIER&Iacute;A</p>
                                                        <br>
                                                        ";





                                     if ($mostrar[3]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Regulaci&oacute;n del Mercado de Energ&iacute;a</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_regulacion_mercado' >

                                                                  
                                                              <option value='1'>$mostrar[3]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Regulaci&oacute;n del Mercado de Energ&iacute;a</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_regulacion_mercado' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Curso de Regulaci&oacute;n del Mercado de Energ&iacute;a</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }



                                    
                                     /*if ($mostrar[4]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Especializaci&oacute;n de Motores El&eacute;ctricos Trif&aacute;sicos</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_motores' >

                                                                  
                                                              <option value='1'>$mostrar[4]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Especializaci&oacute;n de Motores El&eacute;ctricos Trif&aacute;sicos</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_motores' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Especializaci&oacute;n de Motores El&eacute;ctricos Trif&aacute;sicos</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }*/




                                           if ($mostrar[5]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Sistema de Gesti&oacute;n y Seguridad en el Trabajo Ley Nº29783</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_seguridad' >

                                                                  
                                                              <option value='1'>$mostrar[5]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Sistema de Gesti&oacute;n y Seguridad en el Trabajo Ley Nº29783</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_seguridad' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Sistema de Gesti&oacute;n y Seguridad en el Trabajo Ley Nº29783</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }




                                          /* if ($mostrar[6]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Sistema de Puesta a Tierra</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_tierra' >

                                                                  
                                                              <option value='1'>$mostrar[6]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Sistema de Puesta a Tierra</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_tierra' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Sistema de Puesta a Tierra</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        } */



                                              if ($mostrar[7]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Analizador de Redes</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_redes' >

                                                                  
                                                              <option value='1'>$mostrar[7]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Analizador de Redes</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_redes' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Curso de Analizador de Redes</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }



                                              if ($mostrar[8]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>An&aacute;lisis de Facturaci&oacute;n y Tarifas El&eacute;ctricas</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_analisis' >

                                                                  
                                                              <option value='1'>$mostrar[8]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>An&aacute;lisis de Facturaci&oacute;n y Tarifas El&eacute;ctricas</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_analisis' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Análisis de Facturaci&oacute;n y Tarifas El&eacute;ctricas</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }


                                             if ($mostrar[9]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Banco de Condensadores</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_banco' >

                                                                  
                                                              <option value='1'>$mostrar[9]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Banco de Condensadores</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_banco' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Banco de Condensadores</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }
                                        
                                        if ($mostrar[10]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Especialización de Motores Eléctricos Trifásicos 2021</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_motores2021' >

                                                                  
                                                              <option value='1'>$mostrar[10]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Especialización de Motores Eléctricos Trifásicos 2021</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_motores2021' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Especialización de Motores Eléctricos Trifásicos 2021</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }
                                        
                                        if ($mostrar[11]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Sistema Puesta a Tierra 2021</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_tierra_2021' >

                                                                  
                                                              <option value='1'>$mostrar[11]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Sistema Puesta a Tierra 2021</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_tierra_2021' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Sistema Puesta a Tierra 2021</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }
                                        
                                        if ($mostrar[12]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Electricidad B&aacutesica</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_electricidad' >

                                                                  
                                                              <option value='1'>$mostrar[12]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Electricidad B&aacutesica</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_electricidad' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Curso de Electricidad B&aacutesica</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }
                                        
                                        
                                        if ($mostrar[13]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Programaci&oacuten B&aacutesica de PLC</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_progplc' >

                                                                  
                                                              <option value='1'>$mostrar[13]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Programaci&oacuten B&aacutesica de PLC</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_progplc' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Programaci&oacuten B&aacutesica de PLC</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }

                                        echo " <br>
                                                        <p class='h4'>CURSOS DE DERECHO</p>
                                                        <br>";



                                                         if ($mostrar[14]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Seminario de Proceso de Desalojo en la Corte Suprema</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_desalojo' >

                                                                  
                                                              <option value='1'>$mostrar[14]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Seminario de Proceso de Desalojo en la Corte Suprema</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_desalojo' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Seminario de Proceso de Desalojo en la Corte Suprema</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }


                                                    if ($mostrar[15]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Obra por Impuesto</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_obra' >

                                                                  
                                                              <option value='1'>$mostrar[15]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Obra por Impuesto</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_obra' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Curso de Obra por Impuesto</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }



                                                    if ($mostrar[16]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Modificaciones al Reglamento de la ley de Contrataciones con el Estado</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_contratacion' >

                                                                  
                                                              <option value='1'>$mostrar[16]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Modificaciones al Reglamento de la ley de Contrataciones con el Estado</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_contratacion' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Modificaciones al Reglamento de la ley de Contrataciones con el Estado</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }


                                                if ($mostrar[17]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Derecho Ambiental</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_ambiental' >

                                                                  
                                                              <option value='1'>$mostrar[17]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Derecho Ambiental</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_ambiental' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Curso de Derecho Ambiental</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }



                                                if ($mostrar[18]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Derecho Penal</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_penal' >

                                                                  
                                                              <option value='1'>$mostrar[18]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Curso de Derecho Penal</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_penal' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Curso de Derecho Penal</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }


                                               if ($mostrar[19]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Especialización Nuevo Código Procesal Penal</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_procesal' >

                                                                  
                                                              <option value='1'>$mostrar[19]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Especialización Nuevo Código Procesal Penal</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_procesal' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Especialización Nuevo Código Procesal Penal</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }




                                               if ($mostrar[20]) {
                                          echo " <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Litigación OraI en el Nuevo Código Procesal Penal</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_litigacion' >

                                                                  
                                                              <option value='1'>$mostrar[20]</option> 

                                                              <option value='2'>no</option> 
                                                                            </select>
                                                            </div>
                                                        </div>";


                                        }
                                        else{
                                          echo "
                                          <div class='col-md-12'></div> 
                                    
                                    


                                                       <div class='form-group row'>
                                                            <label class='col-sm-2 col-form-label'>Litigación OraI en el Nuevo Código Procesal Penal</label>
                                                            <div class='col-sm-10'>
                                                                <select class=' col-sm-12 form-control'  name='id_litigacion' >

                                                                  
                                                              <option value='2'>No</option> 

                                                              <option value='1'>Litigación OraI en el Nuevo Código Procesal Penal</option> 
                                                                            </select>
                                                            </div>
                                                        </div>

                                          ";
                                        }
                                        
                                        
                                        
                    

echo "
<input type='submit' value='insertar' class='btn btn-primary'>
</form>
<div id='respuesta2' class='bg-gradient-warning'>
				
			</div>




                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>
                                                   </div>



 ";

}




echo " 	 "



 ?>
   <?php

require_once "footer.php" 
  ?>
