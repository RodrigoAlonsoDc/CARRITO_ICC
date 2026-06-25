<?php 

require_once('mpdf.php');
  
$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
 

require_once "../../aula/logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");

$sql="SELECT id,imagen FROM usuarios WHERE registro BETWEEN '$desde' and '$hasta'";

$result=mysqli_query($conexion,$sql);
                                while ($mostrar1=mysqli_fetch_row($result)) {


   $html='
   





<table class="celda1"  width="100%" height="100%">
<thead>
sss
<tr>
<td > N°</td>
<td > Nombres</td>
<td > imagen</td>
<td > Banco</td>
<td > imagen2</td>

</thead>
<tbody>





  ';   }
  
require_once "../../aula/logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");
 
$sql="SELECT id,completo,apellido,imagen,banco,imagen2 FROM usuarios WHERE registro BETWEEN '$desde' and '$hasta'";

$result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_row($result)) {
 		
	$html.=' 
<tr>
	<td> '.$mostrar['0'].'</td>
	<td> '.$mostrar['1'].' '.$mostrar['2'].'</td>
	<td> <img src="'.$mostrar['3'].'" class="firma"> </td>
	
<td> '.$mostrar['4'].'</td>
<td> <img src="'.$mostrar['5'].'"  width="180" height="250"> </td>

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