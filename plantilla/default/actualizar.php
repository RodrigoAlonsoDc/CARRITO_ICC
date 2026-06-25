<?php  
error_reporting(0);
require_once "../../aula/logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");

$id=$_POST['id'];
$completo=$_POST['completo'];
$apellido=$_POST['apellido']; 
$correo=$_POST['correo']; 
$celular=$_POST['celular']; 
$dni=$_POST['dni'];
$nombre=$_POST['nombre'];
$password=$_POST['password']; 


$fecha_deposito=$_POST['fecha_deposito'];
$banco=$_POST['banco'];
$numero_operacion=$_POST['numero_operacion']; 



$monto1=$_POST['monto1'];
$detalle1=$_POST['detalle1'];
$monto2=$_POST['monto2']; 
$detalle2=$_POST['detalle2'];



$total=$_POST['total'];
$tipo_deposito=$_POST['tipo_deposito'];
$encargado=$_POST['encargado']; 
$registro=$_POST['registro'];


$imagenes=$_FILES['imagenes']['name'];
			$archivo=$_FILES['imagenes']['tmp_name'];
			$ruta2="../img2";
			$ruta2=$ruta2."/".$imagenes;

			move_uploaded_file($archivo,$ruta2);


			$imagen=$_FILES['imagen2']['name'];
			$archivos=$_FILES['imagen2']['tmp_name'];
			$ruta3="../img2";
			$ruta3=$ruta3."/".$imagen;

			move_uploaded_file($archivos,$ruta3);


$sql="UPDATE usuarios set completo='$completo',
						
					      apellido='$apellido',
					      correo='$correo',
					        celular='$celular',
					        dni='$dni',
					         nombre='$nombre',
					         password='$password',
					         fecha_deposito='$fecha_deposito',
					       banco='$banco',
					       numero_operacion='$numero_operacion',
					       monto1='$monto1',
					       detalle1='$detalle1',
					       monto2='$monto2',
					       detalle2='$detalle2',
					       total='$total',
					       tipo_deposito='$tipo_deposito',
					       encargado='$encargado',
					       imagen='$ruta2',
					       imagen2='$ruta3',
					       registro='$registro'




						 where id='$id'";


if(mysqli_query($conexion,$sql)){
  
    echo "se ha actualizado correctamente ";
}else{
    echo "ocurrio un error inesperado";
}

 ?>