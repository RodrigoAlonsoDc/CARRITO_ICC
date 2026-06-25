<?php 

require '../aula/logica/conexion.php';
 mysqli_set_charset($conexion,"utf8");
 ?>

<?php 
error_reporting(0);
session_start();
$usuario=$_SESSION['username'];



 ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/tab.css">

    <title>ICC</title>
  </head>
  <body>
  	<div class="nav1"> 
  	<center>	<img src="../img/icc.png" class="logo"></center> <br>
   <ul class="nav justify-content-center">
   
  <li class="nav-item">
    <a class="nav-link " href="index.php">Mis Cursos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cerrar.php">Cerrar</a>
  </li>

</ul>

 </div>