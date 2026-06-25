<?php 
require 'conexion.php';
session_start();
$usuario =$_POST['usuario'];
$password =$_POST['password'];

$q="SELECT COUNT(*) as contar FROM usuarios where nombre='$usuario' and password='$password'";
$consulta=mysqli_query($conexion,$q);

$array =mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
	$_SESSION['username']=$usuario;
	header("location:../../plataforma/index.php");
}else{
	header("location:../login.php");
}









 ?>