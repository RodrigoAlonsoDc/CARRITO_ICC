<?php  

require_once '../../DataBase/db.php';

?>
<?php  
								
$id_cursos = $_GET['id_cursos'];

$sql = "SELECT * FROM cursos WHERE id_cursos = $id_cursos";
$result = $conexion->query($sql);

while ($fila = $result->fetch_assoc()) {
	mysqli_set_charset($conexion,"utf8");

	echo "

	<!DOCTYPE html>
	<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Document</title>
	</head>
	<body>
		<div>
			<center>
				<label>
					<h1>ACTUALIZAR REGISTRO DE LOS CURSOS INGRESADOS</h1>
				</label>
			</center>
		</div>
		<form>
			<div style='height:100%; float: left; width: 50%; '>
				<div>
					<fieldset>
						<legend>
							<label>
								<h2>ACTUALIZAR CURSO</h2>
							</label>
						</legend>
						<div>
							<input type='hidden' name='id_cursos'   value='".$fila['id_cursos']."' >
						</div>
						<div>
							<label>
								<h4>NOMBRE DEL CURSO:</h4>
							</label>
							<textarea name='titulo'>".$fila['titulo']."</textarea>
						</div>
						<div>
							<label>
								<h4>IMAGEN DE PORTADA:</h4>
							</label>
							<input type='file' name='imagenes'>
							<img src='".$fila['imagen']."' >
						</div>
						<div>
							<label>
								<h4>REGISTRO:</h4>
							</label>
							<input type='text' name='registro' readonly value='".$fila['registro']." '>
						</div>
						<p><br></p>
						<div>
							<button name='actualizar'>ACTUALIZAR</button>
						</div>
						<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>
					</fieldset>
				</div>
			</div>
		</form>
	";
}
echo "     "

?>

<?php

$id_cursos = $_GET['id_cursos'];
mysqli_set_charset($conexion, "utf8");
$consulta = "SELECT i.id_info_cursos, c.titulo, i.imagen, i.subtitulo, i.video, i.recursos FROM info_cursos i INNER JOIN cursos c ON i.id_cursos = c.id_cursos WHERE i.id_info_cursos = $id_cursos";
$resultado = mysqli_query($conexion, $consulta);

while ($mostrar = mysqli_fetch_row($resultado)) {

	echo "
		<form>
			<div style='height:100%; float: left; width: 50%; '>
				<div>
					<fieldset>
						<legend>
							<label>
								<h2>ACTUALIZAR INFORMACIÓN DEL CURSO</h2>
							</label>
						</legend>
						<div>
							<label>
								<h4>NOMBRE DEL CURSO:</h4>
							</label>
							<input type='hidden' name='id_info_cursos' value='".$mostrar['0']."'>
							<input type='text' name='titulo' disabled value='".$mostrar['1']."'>
						</div>
						<div>
							<label>
								<h4>ACTUALIZAR IMAGENES:</h4>
							</label>
							<input type='file' name='imagen'>
							<img src='".$mostrar['2']."'>
						</div>
						<div>
							<label>
								<h4>ACTUALIZAR SUBTITULOS:</h4>
							</label>
							<textarea name='subtitulo'>".$mostrar['3']."</textarea>
						</div>
						<div>
							<label>
								<h4>ACTUALIZAR LINKS DE VIDEOS:</h4>
							</label>
							<textarea name='video'>".$mostrar['4']."</textarea>
						</div>
						<div>
							<label>
								<h4>ACTUALIZAR ARCHIVOS:</h4>
							</label>
							<textarea name='recursos'>".$mostrar['5']."</textarea>
						</div>
						<br>
						<div>
							<button name='actualizar'>ACTUALIZAR</button>
						</div>
					</fieldset>
				</div>
			</div>
		</form>
	</body>
	</html>
	";
}

echo "  "

?>