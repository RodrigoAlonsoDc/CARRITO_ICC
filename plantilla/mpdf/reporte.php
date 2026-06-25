<?php 

require_once('mpdf.php');

$id=$_GET['id'];
require_once "../../aula/logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");
$sql="SELECT e.id_extras,t.nombres,t.cargo,t.nombres,e.desde,e.hasta,e.motivo,e.hora FROM extras e INNER JOIN trabajadores t on e.id_trabajadores=t.id_trabajadores where e.id_extras=$id";

 $result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_row($result)) {
 
$html='
	




  '; }

require_once "../../aula/logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");
$sql="SELECT e.id_extras,t.nombres,e.cargot,t.nombres,e.desde,e.hasta,e.motivo,e.hora,t.firma,e.supervisor,t.firma FROM extras e INNER JOIN trabajadores t on e.id_trabajadores=t.id_trabajadores where e.id_extras=$id ";

 $result=mysqli_query($conexion,$sql);
                                while ($mostrar=mysqli_fetch_row($result))  {
 	
                 
	$html.=' 

<img src="../img/logo_color.png" class="logo">
	
	<table  class="tab" >
<tr>


<td class="nuevo">Fecha y Hora Registrado:</td>

</tr>
<tr>



<td clas="nuevo"> '.$mostrar['7'].' </td>
</tr>

</table>

	
';	

$html.='
 <br> <br>
<table class="celda"  width="100%" height="100%">
<tr>
<td class="nuevo" COLSPAN=2>IDENTIFICACI&Oacute;N DE COLABORADOR:</td>

</tr>
<tr>
<td  >Supervisor :</td>
<td  >'.$mostrar['1'].'</td>

</tr>
<tr>
<td  >Trabajador:</td>
<td  >'.$mostrar['9'].'</td>

</tr>
<tr>
<td  >Cargo :</td>
<td  >'.$mostrar['2'].'</td>

</tr>



</table>

<table class="celda"  width="100%" height="100%">
<tr>
<td class="nuevo" COLSPAN=3>Solicitud:</td>

</tr>
<tr>
<td  ROWSPAN=2>Cantidad horas extras :</td>
<td>Desde</td>
<td>Hasta</td>

</tr>
<tr>
<td>'.$mostrar['4'].'</td>
<td>'.$mostrar['5'].'</td>

</tr>
<tr>
<td>Motivo del Trabajo a Realizar:</td>
<td  COLSPAN=2> '.$mostrar['6'].' </td>
</tr>



</table>
 
<br><br>
<center>


<img src="'.$mostrar["8"].'" class="firma1"> 
 <br>

<img src="../img/firma.png" class="logo1">
</center>






';	 	
$html.=' 
	

';
$html.='

	


	

';
$html.='';
}












$html.='	
		


';


$html.='';
$html.='';
$html.='';






	$html.='	


	';




$mpdf = new mPDF('c','A4', 0, '', 16, 16, 8, 4, -15, -5);
$css=file_get_contents('style.css');
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output('reporte.pdf','I');


 ?>
	
