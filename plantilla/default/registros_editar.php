<?php 

require_once "../../aula/logica/conexion.php" ;
mysqli_set_charset($conexion,"utf8");

$id =$_POST['id_curso'];
			$id_regulacion_mercado =$_POST['id_regulacion_mercado'];
			$id_motores =$_POST['id_motores'];
			$id_seguridad =$_POST['id_seguridad'];
			$id_tierra =$_POST['id_tierra'];
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
			$id_electricidad =$_POST['id_electricidad'];
			$id_progplc = $_POST['id_progplc'];

		

$sql="UPDATE cursos c INNER JOIN usuarios u ON c.id=u.id INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN motores m ON c.id_motores=m.id_motores INNER JOIN seguridad s ON c.id_seguridad=s.id_seguridad INNER JOIN tierra t ON c.id_tierra=t.id_tierra INNER JOIN redes re ON c.id_redes=re.id_redes INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN banco b ON c.id_banco=b.id_banco INNER JOIN desalojo d ON c.id_desalojo=d.id_desalojo INNER JOIN obra o ON c.id_obra=o.id_obra INNER JOIN contratacion co ON c.id_contratacion=co.id_contratacion INNER JOIN ambiental am ON c.id_ambiental=am.id_ambiental INNER JOIN penal pe ON c.id_penal=pe.id_penal INNER JOIN procesal pro ON c.id_procesal=pro.id_procesal INNER JOIN litigacion l ON c.id_litigacion=l.id_litigacion 
INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN tierra_2021 ti ON c.id_tierra_2021=ti.id_tierra_2021 INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN progplc pl ON c.id_progplc=pl.id_progplc

				set c.id_regulacion_mercado ='$id_regulacion_mercado',
					c.id_motores ='$id_motores',
					c.id_seguridad='$id_seguridad',
					c.id_tierra='$id_tierra',
					c.id_redes='$id_redes',
					c.id_analisis='$id_analisis',
					c.id_banco='$id_banco',
					c.id_desalojo='$id_desalojo',
					c.id_obra='$id_obra',
					c.id_contratacion='$id_contratacion',
					c.id_ambiental='$id_ambiental',
					c.id_penal='$id_penal',
					c.id_procesal='$id_procesal',
				
					c.id_litigacion='$id_litigacion',
					c.id_motores2021='$id_motores2021',
					c.id_tierra_2021='$id_tierra_2021',
					c.id_electricidad='$id_electricidad',
					c.id_progplc='$id_progplc'


					 where c.id_curso='$id'";


if(mysqli_query($conexion,$sql)){
  
    echo "se ha actualizado correctamente ";
}else{
    echo "ocurrio un error inesperado";
}

 ?>