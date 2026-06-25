<?php
  $host = "localhost";
  $username = "icccom_app";
  $password = "bpFsCGU@d0sx@zO";
  $dbname = "icccom_app";

  try {
	  $conexion = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
	  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $exception){
	  die("Connection error: " . $exception->getMessage());
  }
?>