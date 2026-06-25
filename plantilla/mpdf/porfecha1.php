<?php 

require_once('mpdf.php');
$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
require_once "../../logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");

$sql="SELECT * FROM usuarios WHERE registro BETWEEN '$desde' and '$hasta' ";

$result=mysqli_query($conexion,$sql);
                                while ($mostrar1=mysqli_fetch_row($result)) {


   $html='
   





<table class="celda1"  width="100%" height="100%">
<thead>
sss
<tr>
<td > N°</td>
<td > APELLIDOS Y NOMBRES</td>
<td > DNI</td>
<td class="morado"> fecha de deposito</td>
<td class="morado"> Monto 1</td>
<td > Detalle</td>
<td class="morado">Envio</td>
<td >Detalle Envio</td>
<td class="morado">Total de deposito</td>
<td >Empresa</td>
<td >Baucher</td>




</thead>
<tbody>





  ';   }
  
require_once "../../logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");
 
$sql="SELECT id,completo,apellido,dni,fecha_deposito,monto1,detalle1,monto2,detalle2,total,empresa,imagen FROM usuarios WHERE registro BETWEEN '$desde' and '$hasta' ";

$result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_row($result)) {
 		
	$html.=' 
<tr>
	<td> '.$mostrar['0'].'</td>
	<td> '.$mostrar['1'].'&nbsp;'.$mostrar['2'].'</td>
	<td> '.$mostrar['3'].'</td>
	<td class="morado"> '.$mostrar['4'].'</td>
	<td class="morado"> '.$mostrar['5'].'</td>
	<td> '.$mostrar['6'].'</td>
	<td class="morado"> '.$mostrar['7'].'</td>
	<td > '.$mostrar['8'].'</td>
	<td  class="morado"> '.$mostrar['9'].'</td>
<td > COMUNA 24</td>
	<td >   <img src="'.$mostrar['11'].'" class="firma"></td>
	


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