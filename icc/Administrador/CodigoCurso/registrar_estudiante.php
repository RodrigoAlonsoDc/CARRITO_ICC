
<?php  

require_once '../../DataBase/db.php';

mysqli_set_charset($conexion,"utf8");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$dni = $_POST['dni'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$fecha_deposito = $_POST['fecha_deposito'];
$banco = $_POST['banco'];
$numero_operacion = $_POST['numero_operacion'];
$monto_uno = $_POST['monto_uno'];
$deposito_uno = $_POST['deposito_uno'];
$monto_dos = $_POST['monto_dos'];
$deposito_dos = $_POST['deposito_dos'];
$tipo_deposito = $_POST['tipo_deposito'];
$empresa = $_POST['empresa'];
$encargado = $_POST['encargado'];

$imagenes=$_FILES['imagenes']['name'];
$archivo = $_FILES['imagenes']['tmp_name'];
$ruta2 = "img";
$ruta2 = $ruta2."/".$imagenes;
			
$imagenes = $_FILES['imagenes']['name'];
$archivo = $_FILES['imagenes']['tmp_name'];
$ruta2 = "img";
$ruta2 = $ruta2."/".$imagenes;
			
move_uploaded_file($archivo,$ruta2);
			
$imagen = $_FILES['imagen2']['name'];
$archivos = $_FILES['imagen2']['tmp_name'];
$ruta3 = "img2";
$ruta3=$ruta3."/".$imagen;

move_uploaded_file($archivos,$ruta3);

$total = $monto_uno + $monto_dos;
$rol = 2;

$sql = "INSERT INTO `usuario`(`nombre`, `apellido`, `correo`, `celular`, `dni`, `usuario`, `password`, `fecha_deposito`, `banco`, `numero_operacion`, `monto_uno`, `deposito_uno`, `monto_dos`, `deposito_dos`, `tipo_deposito`, `empresa`, `encargado`, `imagen`, `imagen2`, `total`, `id_rol`) VALUES ('$nombre','$apellido','$correo','$celular','$dni','$usuario','$password','$fecha_deposito','$banco','$numero_operacion','$monto_uno','$deposito_uno','$monto_dos','$deposito_dos','$tipo_deposito','$empresa','$encargado','$ruta2','$ruta3','$total','$rol')";

$result = mysqli_query($conexion, $sql);

if ($result) {
	echo "<script language='javascript'>window.location='../VistaCurso/registrar_estudiante.php'
	alert('Registro Exitoso')</script>;";
}else{
	echo "Error al registrar Estudiante";
}

?>