<?php 
error_reporting(0);
	require '../../aula/logica/conexion.php';
 

	mysqli_set_charset($conexion,"utf8");
	
			$completo=$_POST['completo'];
	    	$apellido =$_POST['apellido'];
			$correo =$_POST['correo'];
			$celular=$_POST['celular'];
			$dni =$_POST['dni'];
			$nombre=$_POST['nombre'];
			$password=$_POST['password'];
			$fecha_deposito=$_POST['fecha_deposito'];
			$banco=$_POST['banco'];
			$numero_operacion=$_POST['numero_operacion'];
			$monto1=$_POST['monto1'];
			$detalle1=$_POST['detalle1'];
			$monto2=$_POST['monto2']; 
			$detalle2=$_POST['detalle2'];
			$total=$monto1+$monto2;
			$tipo_deposito=$_POST['tipo_deposito'];
			$encargado=$_POST['encargado'];
			
			
			$imagenes=$_FILES['imagenes']['name'];
			$archivo=$_FILES['imagenes']['tmp_name'];
			$ruta2="../img2";
			$ruta2=$ruta2."/".$imagenes;
            move_uploaded_file($archivo,$ruta2);
			
			$empresa=$_POST['empresa'];
			

			$imagen=$_FILES['imagen2']['name'];
			$archivos=$_FILES['imagen2']['tmp_name'];
			$ruta3="../img2";
			$ruta3=$ruta3."/".$imagen;
			
			
		
$consulta = "INSERT INTO usuarios (completo,apellido,correo,celular,dni,nombre,password,fecha_deposito,banco,numero_operacion,
			monto1,detalle1,monto2,detalle2,total,tipo_deposito,encargado,imagen,empresa,tipo,imagen2) VALUES
			 ('$completo','$apellido','$correo','$celular','$dni','$nombre','$password','$fecha_deposito','$banco','$numero_operacion'
			 ,'$monto1','$detalle1','$monto2','$detalle2','$total','$tipo_deposito','$encargado','$ruta2','$empresa','','$ruta3')";
			$resultado =mysqli_query($conexion,$consulta);
	

			if ($resultado) {
				echo "registrado";
			}else{
				echo "no registrado verificar si el nombre o el numero de operación ya existe";
			}


			
 ?>