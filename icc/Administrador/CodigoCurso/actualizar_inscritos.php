<?php  

require_once '../../DataBase/db.php';
mysqli_set_charset($conexion,"utf8");

$id_inscritos = $_POST['id_inscritos'];
$ambiental = $_POST['ambiental'];
$analisis = $_POST['analisis'];
$banco = $_POST['banco'];
$contratacion = $_POST['contratacion'];
$desalojo = $_POST['desalojo'];
$litigacion = $_POST['litigacion'];
$motores = $_POST['motores'];
$motores2021 = $_POST['motores2021'];
$obra = $_POST['obra'];
$derecho = $_POST['derecho'];
$procesal = $_POST['procesal'];
$redes = $_POST['redes'];
$regulacion = $_POST['regulacion'];
$seguridad = $_POST['seguridad'];
$tierra = $_POST['tierra'];
$tierra2021 = $_POST['tierra2021'];
$electricidad = $_POST['electricidad'];
$progplc = $_POST['progplc'];
$riesgo = $_POST['riesgo'];
$altura = $_POST['altura'];


$sql = "UPDATE inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos a ON i.ambiental = a.id_cursos INNER JOIN cursos an ON i.analisis = an.id_cursos INNER JOIN cursos b ON i.banco = b.id_cursos INNER JOIN cursos c ON i.contratacion = c.id_cursos INNER JOIN cursos d ON i.desalojo = d.id_cursos INNER JOIN cursos l ON i.litigacion = l.id_cursos INNER JOIN cursos m ON i.motores = m.id_cursos INNER JOIN cursos mo ON i.motores2021 = mo.id_cursos INNER JOIN cursos o ON i.obra = o.id_cursos INNER JOIN cursos de ON i.derecho = de.id_cursos INNER JOIN cursos p ON i.procesal = p.id_cursos INNER JOIN cursos r ON i.redes = r.id_cursos INNER JOIN cursos re ON i.regulacion = re.id_cursos INNER JOIN cursos s ON i.seguridad = s.id_cursos INNER JOIN cursos t ON i.tierra = t.id_cursos INNER JOIN cursos ti ON i.tierra2021 = ti.id_cursos INNER JOIN cursos e ON i.electricidad = e.id_cursos INNER JOIN cursos pl ON i.progplc = pl.id_cursos INNER JOIN cursos ri ON i.riesgo = ri.id_cursos INNER JOIN cursos al ON i.altura = al.id_cursos 

		SET i.ambiental = '$ambiental',
			i.analisis = '$analisis',
			i.banco = '$banco',
			i.contratacion = '$contratacion',		
			i.desalojo = '$desalojo',
			i.litigacion = '$litigacion',
			i.motores = '$motores',
			i.motores2021 = '$motores2021',
			i.obra = '$obra',
			i.derecho = '$derecho',
			i.procesal = '$procesal',
			i.redes = '$redes',
			i.regulacion = '$regulacion',
			i.seguridad = '$seguridad',
			i.tierra = '$tierra',
			i.tierra2021 = '$tierra2021',
			i.electricidad = '$electricidad',
			i.progplc = '$progplc',
			i.riesgo = '$riesgo',
			i.altura = '$altura'
	
		WHERE i.id_inscritos = '$id_inscritos' ";

if (mysqli_query($conexion,$sql)) {
	echo "<script language='javascript'>window.location='../VistaCurso/lista_inscritos.php'
	alert('Inscritos Actualizado')</script>;";
} else {
	echo "ERROR AL ACTUALIZAR";
}

?>