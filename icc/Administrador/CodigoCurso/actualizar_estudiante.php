
<?php  

require_once '../../DataBase/db.php';

mysqli_set_charset($conexion,"utf8");

$id_usuario = $_POST['id_usuario'];
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
$archivo=$_FILES['imagenes']['tmp_name'];
$ruta2="../img2";
$ruta2=$ruta2."/".$imagenes;

move_uploaded_file($archivo,$ruta2);

$imagen=$_FILES['imagen2']['name'];
$archivos=$_FILES['imagen2']['tmp_name'];
$ruta3="../img2";
$ruta3=$ruta3."/".$imagen;

move_uploaded_file($archivos,$ruta3);

$total = $monto_uno + $monto_dos;
$rol = 2;


$sql = "UPDATE usuario SET nombre = '$nombre',
						   apellido = '$apellido',
						   correo='$correo',
                           celular='$celular',
                           dni='$dni',
                           usuario='$usuario',
                           password='$password',
                           fecha_deposito='$fecha_deposito',
                           banco='$banco',
                           numero_operacion='$numero_operacion',
                           monto_uno='$monto_uno',
                           deposito_uno='$deposito_uno',
                           monto_dos='$monto_dos',
                           deposito_dos='$deposito_dos',
                           tipo_deposito='$tipo_deposito',
                           empresa='$empresa',
                           encargado='$encargado',
                           imagen='$ruta2',
                           imagen2='$ruta3',
                           total = '$total',
                           id_rol = '$rol'

						   WHERE id_usuario = '$id_usuario' ";

if (mysqli_query($conexion, $sql)) {
    echo "<script language='javascript'>window.location='../VistaCurso/listar_estudiante.php'
    alert('Registro Actualizado')</script>;";
} else {
    echo "Ocurrio un Error al actualizar";
}

?>