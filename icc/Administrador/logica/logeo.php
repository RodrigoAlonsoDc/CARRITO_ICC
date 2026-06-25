<?php 
require '../../DataBase/db.php';
session_start();
$usuario =$_POST['usuario'];
$password =$_POST['password'];



$q1="SELECT COUNT(*) as admin FROM usuario where usuario='$usuario' and password='$password' and id_rol=1";
$consulta1=mysqli_query($conexion,$q1);

$array1 =mysqli_fetch_array($consulta1);

if ($array1['admin'] > 0) {
	$_SESSION['username']=$usuario;
	header("location: ../VistaCurso/index.php");
}else{
	header("location: ../login.php");
}

?>