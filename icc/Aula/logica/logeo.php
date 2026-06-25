<?php
require '../../DataBase/db.php';
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$q="SELECT count(*) as contar FROM usuario where usuario = '$usuario' and password = '$password'  ";

$consulta=mysqli_query($conexion,$q);
$array=mysqli_fetch_array($consulta);


if ($array['contar'] > 0) {
	$_SESSION['username'] = $usuario;
	header("location: ../index.php");
}else{
	header("location: ../login.php");
}
?>
