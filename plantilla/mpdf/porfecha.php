<?php 

require_once('mpdf.php');
$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
require_once "../../aula/logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");

$sql="";

$result=mysqli_query($conexion,$sql);
                                while ($mostrar1=mysqli_fetch_row($result)) {


   $html='
   





<table class="celda1"  width="100%" height="100%">
<thead>
sss
<tr>
<td > N°</td>
<td > APELLIDOS Y NOMBRES</td>
<td > Relaciones Comunitarias</td>
<td > Desarrollo Economico</td>
<td > Impacto Ambiental</td>
<td > formulacion proyectos</td>
<td >Diagnostico Social</td>
<td >Obras por Impuesto</td>
<td >Sociales Comunitarios</td>
<td >Conflictos Sociales</td>
<td >Baucher</td>
<td >Fecha</td>



</thead>
<tbody>





  ';   }
  
require_once "../../logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");
 
$sql="";

$result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_row($result)) {
 		
	$html.=' 
<tr>
	<td> '.$mostrar['0'].'</td>
	<td> '.$mostrar['1'].'&nbsp;'.$mostrar['2'].'</td>
	<td> '.$mostrar['3'].'</td>
	<td> '.$mostrar['4'].'</td>
	<td> '.$mostrar['5'].'</td>
	<td> '.$mostrar['6'].'</td>
	<td > '.$mostrar['7'].'</td>
	<td > '.$mostrar['8'].'</td>
	<td > '.$mostrar['9'].'</td>
	<td > '.$mostrar['10'].'</td>
	<td >   <img src="'.$mostrar['11'].'" class="firma"></td>
	<td > '.$mostrar['12'].'</td>


</tr>

	
';	}


$html.='

</tbody>
</table>';	 	




















	



$mpdf = new mPDF('c','A4-L');
$css=file_get_contents('style2.css');
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output('reporte.pdf','I');


 ?>
	
regina  