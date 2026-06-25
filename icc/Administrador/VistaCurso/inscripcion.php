<?php require_once '../../DataBase/db.php'; ?>
<?php require '../../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 class="mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700">INSCRIPCIÓN DE USUARIOS</h1>
	<div class="flex flex-col flex-grow p-4 bg-gray-200">
		<form action="../CodigoCurso/inscripcion.php" method="POST" enctype="multipart/form-data">
			<div class="mt-2 mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="">NOMBRES Y APELLIDOS COMPLETOS</label>
					<select class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" name="id_usuario" id="id_usuario" type="option" required>
					<?php
	        
					mysqli_set_charset($conexion, "utf8");

					$query = $conexion->query("SELECT * FROM usuario");

					while ($valores = mysqli_fetch_array($query)) {
						echo '<option value="'.$valores[id_usuario].'">'.$valores[nombre].' &nbsp; '.$valores[apellido].'</option>';
					}

	        		?>
					</select>
				</div>
			</div>
			<h1 class="mt-5 mb-4 ml-1 text-2xl font-bold text-gray-700">Escoger los cursos de Ingeniería que llevara el estudiante</h1>
			<div class="mt-2 mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>CURSO DE REGULACIÓN DEL MERCADO DE ENERGÍA</h4>
					</label>
					<select name="regulacion" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="14">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>ESPECIALIZACIÓN DE MOTORES ELÉCTRICOS TRIFÁSICOS</h4>
					</label>
					<select name="motores" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="8">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>SISTEMA DE GESTIÓN Y SEGURIDAD EN EL TRABAJO LEY Nº29783</h4>
					</label>
					<select name="seguridad" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="15">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>SISTEMA DE PUESTA A TIERRA</h4>
					</label>
					<select name="tierra" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="16">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>CURSO DE ANALIZADOR DE REDES</h4>
					</label>
					<select name="redes" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="13">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>ANÁLISIS DE FACTURACIÓN Y TARIFAS ELÉCTRICAS</h4>
					</label>
					<select name="analisis" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="3">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>BANCO DE CONDENSADORES</h4>
					</label>
					<select name="banco" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="4">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>MOTORES ELÉCTRICOS 2021</h4>
					</label>
					<select name="motores2021" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="9">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>SISTEMA DE PUESTA A TIERRA 2021</h4>
					</label>
					<select name="tierra2021" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="17">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>CURSO DE ELECTRICIDAD B&AacuteSICA</h4>
					</label>
					<select name="electricidad" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="18">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>PROGRAMACIÓN BÁSICA DE PLC.</h4>
					</label>
					<select name="progplc" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="19">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>RIESGO ELÉCTRICO</h4>
					</label>
					<select name="riesgo" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="20">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>TRABAJO EN ALTURA.</h4>
					</label>
					<select name="altura" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="21">SI</option>
					</select>
				</div>
			</div>
			
			<h1 class="mt-5 mb-4 ml-1 text-2xl font-bold text-gray-700">Escoger Los cursos de Derecho que llevara el estudiante</h1>
			<div class="mt-2 mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>SEMINARIO DE PROCESO DE DESALOJO EN LA CORTE SUPREMA</h4>
					</label>
					<select name="desalojo" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="6">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>CURSO DE OBRA POR IMPUESTO</h4>
					</label>
					<select name="obra" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="10">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>MODIFICACIONES AL REGLAMENTO DE LA LEY DE CONTRATACIONES CON EL ESTADO</h4>
					</label>
					<select name="contratacion" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="5">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>CURSO DE DERECHO AMBIENTAL</h4>
					</label>
					<select name="ambiental" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="2">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>CURSO DE DERECHO PENAL</h4>
					</label>
					<select name="derecho" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="11">SI</option>
					</select>
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>ESPECIALIZACIÓN NUEVO CÓDIGO PROCESAL PENAL</h4>
					</label>
					<select name="procesal" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="12">SI</option>
					</select>
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h4>LITIGACIÓN ORAL EN EL NUEVO CODIGO PROCESAL</h4>
					</label>
					<select name="litigacion" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
						<option value="1">NO</option>
						<option value="7">SI</option>
					</select>
				</div>
			</div>
			<button class="px-6 py-3 mt-8 font-bold text-white bg-blue-600 rounded-full text-1xl hover:bg-blue-800" name="guardar" type="submit">REGISTRAR</button>
		</form>
	</div>
</body>
</html>
<?php require '../../includes/footer.php' ?>