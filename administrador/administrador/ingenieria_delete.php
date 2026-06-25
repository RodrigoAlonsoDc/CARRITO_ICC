<?php  

session_start();
if ($_SESSION['rol'] != 1) {
    header("location: ./");
}
include '../conexion.php';

$iduser = $_GET['id'];

$sql_delete = mysqli_query($conection, "DELETE FROM usuario WHERE iduser = '$iduser'");

header("location: ingenieria_lista.php");
mysql_close($conection);

?>