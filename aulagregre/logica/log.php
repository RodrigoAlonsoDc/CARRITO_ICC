<?php 
require 'conexion.php';
session_start();
$usuario =$_POST['usuario'];
$password =$_POST['password'];



$q1="SELECT COUNT(*) as admin FROM usuarios where nombre='$usuario' and password='$password' and tipo='administrador'";
$consulta1=mysqli_query($conexion,$q1);

$array1 =mysqli_fetch_array($consulta1);

if ($array1['admin'] > 0) {
	$_SESSION['username']=$usuario;
	header("location:../../plantilla/default/index.php");
}else{
	header("location:../administrador.php");
}

$conexion -> close();





 ?>