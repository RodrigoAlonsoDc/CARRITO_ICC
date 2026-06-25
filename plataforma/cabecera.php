<?php
error_reporting(0);
session_start();
$usuario=$_SESSION['username'];
if (!isset($usuario)) {
    header("location:../aula/login.php");

}else{




}



 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <title>ICC</title>
  </head>
 <body class="foo">
	<header>
	

		<div id="cd-hamburger-menu"><a class="cd-img-replace" href="#0">Menu</a></div>
		
	</header>

	<nav id="main-nav">
		<ul>
			<li><a href="index.php">Mis Cursos</a></li>
			<li><a href="cerrar.php">Cerrar Sesi&oacute;n</a></li>
			<li><a href="#" >Bienvenido <?php echo "$usuario";    ?> </a></li>
		</ul>
	</nav>
