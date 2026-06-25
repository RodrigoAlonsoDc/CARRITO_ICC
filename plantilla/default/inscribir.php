<?php 

	require '../../aula/logica/conexion.php';
 

	mysqli_set_charset($conexion,"utf8");
	
			$id =$_POST['id'];
			$id_regulacion_mercado =$_POST['id_regulacion_mercado'];
			$id_motores = 2;
			$id_seguridad =$_POST['id_seguridad'];
			$id_tierra = 2;
			$id_redes =$_POST['id_redes'];
			$id_analisis =$_POST['id_analisis'];
			$id_banco =$_POST['id_banco'];
			$id_desalojo =$_POST['id_desalojo'];
			$id_obra =$_POST['id_obra'];
			$id_contratacion =$_POST['id_contratacion'];
			$id_ambiental =$_POST['id_ambiental'];
			$id_penal =$_POST['id_penal'];
			$id_procesal =$_POST['id_procesal'];
			$id_litigacion =$_POST['id_litigacion'];
			$id_motores2021 =$_POST['id_motores2021'];
			$id_tierra_2021 =$_POST['id_tierra_2021'];
			$id_electricidad = $_POST['id_electricidad'];
			$id_progplc = $_POST['id_progplc'];

		
			



			$consulta = "INSERT INTO cursos(id,id_regulacion_mercado,id_motores,id_seguridad,id_tierra,id_redes,id_analisis,id_banco,id_desalojo,id_obra,id_contratacion,id_ambiental,id_penal,id_procesal,id_litigacion,id_motores2021,id_tierra_2021,id_electricidad,id_progplc) VALUES
			 ('$id','$id_regulacion_mercado','$id_motores','$id_seguridad','$id_tierra','$id_redes','$id_analisis','$id_banco','$id_desalojo','$id_obra','$id_contratacion','$id_ambiental','$id_penal','$id_procesal','$id_litigacion','$id_motores2021','$id_tierra_2021','$id_electricidad','$id_progplc')";
			$resultado =mysqli_query($conexion,$consulta);

			if ($resultado) {
				echo "registrado";
			}else{
				echo "error al registrar";
			}


			
 ?>