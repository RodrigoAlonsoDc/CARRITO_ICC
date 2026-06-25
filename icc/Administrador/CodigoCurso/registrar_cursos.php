<?php  

require_once '../../DataBase/db.php';

mysqli_set_charset($conexion, "utf8");

$id_cursos = $_POST['id_cursos'];

$imagenes = $_FILES['imagenes']['name'];
$archivo = $_FILES['imagenes']['tmp_name'];
$ruta2 = "img";
$ruta2 = $ruta2."/".$imagenes;
			
move_uploaded_file($archivo,$ruta2);

$titulo = $_POST['titulo'];

$sql = "INSERT INTO cursos (id_cursos, imagen, titulo) VALUES ('$id_cursos', '$ruta2', '$titulo') ";

$result = mysqli_query($conexion, $sql);

if ($result) {
	echo "<script language='javascript'>window.location='../VistaCurso/registrar_cursos.php'
	alert('Registro Exitoso')</script>;";
} else {
	echo "Registro fallido";
}

?>