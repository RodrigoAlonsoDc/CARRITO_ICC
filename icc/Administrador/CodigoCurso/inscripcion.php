<?php

require_once '../../DataBase/db.php';

mysqli_set_charset($conexion, "utf8");

$id_usuario = $_POST['id_usuario'];
$ambiental = $_POST['ambiental'];
$analisis = $_POST['analisis'];
$banco = $_POST['banco'];
$contratacion = $_POST['contratacion'];
$desalojo = $_POST['desalojo'];
$litigacion = $_POST['litigacion'];
$motores = $_POST['motores'];
$motores2021 = $_POST['motores2021'];
$obra = $_POST['obra'];
$derecho = $_POST['derecho'];
$procesal = $_POST['procesal'];
$redes = $_POST['redes'];
$regulacion = $_POST['regulacion'];
$seguridad = $_POST['seguridad'];
$tierra = $_POST['tierra'];
$tierra2021 = $_POST['tierra2021'];
$electricidad = $_POST['electricidad'];
$progplc = $_POST['progplc'];
$riesgo = $_POST['riesgo'];
$altura = $_POST['altura'];

$consulta = "INSERT INTO inscritos (id_usuario, ambiental, analisis, banco, contratacion, desalojo, litigacion, motores, motores2021, obra, derecho, procesal, redes, regulacion, seguridad, tierra, tierra2021, electricidad, progplc, riesgo, altura) VALUES ('$id_usuario', '$ambiental', '$analisis', '$banco', '$contratacion', '$desalojo', '$litigacion', '$motores', '$motores2021', '$obra', '$derecho', '$procesal', '$redes', '$regulacion', '$seguridad', '$tierra', '$tierra2021', '$electricidad', '$progplc', '$riesgo', '$altura')";

$result = mysqli_query($conexion, $consulta);

if ($result) {
	echo "<script language='javascript'>window.location='../VistaCurso/inscripcion.php'
	alert('Registro exitoso')</script>;";
} else {
	echo "Error al Registrar";
}

?>