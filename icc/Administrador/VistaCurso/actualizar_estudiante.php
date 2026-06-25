<?php require_once '../../DataBase/db.php'; ?>
<?php require '../../includes/header.php'; ?>

<?php  

$id_usuario = $_GET['id_usuario'];

$consulta = "SELECT * FROM usuario WHERE id_usuario=$id_usuario";
$result = $conexion->query($consulta);
while ($fila = $result->fetch_assoc()) {
	mysqli_set_charset($conexion, "utf8");

	echo "

	<!DOCTYPE html>
	<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<title>Document</title>
	</head>
	<body>
		<h1 class='mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700'>ACTUALIZAR USUARIO A CURSO</h1>
		<div class='flex flex-col flex-grow p-4 bg-gray-200'>
			<form action='../CodigoCurso/actualizar_estudiante.php' method='POST' enctype='multipart/form-data'>
				<div class='mt-2 mb-8 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='' name=''>
						<h3>NOMBRE:</h3>
						</label>
						<input type='hidden' name='id_usuario' value='".$fila['id_usuario']."'>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red type='text' name='nombre' placeholder='NOMBRE' value='".$fila['nombre']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='' id=''>
							<h3>APELLIDO:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='apellido' placeholder='APELLIDO' value='".$fila['apellido']."'>
					</div>
				</div>
				<div class='mb-8 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='' id=''>
							<h3>CORREO:</h3>
						</label>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='correo' placeholder='CORREO' value='".$fila['correo']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='Numero celular' id='Numero celular'>
							<h3>NÚMERO CELULAR:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='celular' placeholder='CELULAR' value='".$fila['celular']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='dni' id='dni'>
							<h3>DNI:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='dni' placeholder='DNI' value='".$fila['dni']."'>
					</div>
				</div>
				<div class='mb-10 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='usuario' id='usuario'>
							<h3>USUARIO:</h3>
						</label>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='usuario' placeholder='USUARIO' value='".$fila['usuario']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='contraseña' id='contraseña'>
							<h3>PASSWORD:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='password' placeholder='PASSWORD' value='".$fila['password']."'>
					</div>
				</div>
				<div class='mb-10 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='nombre' id='nombre'>
							<h3>FECHA DEPOSITO:</h3>
						</label>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='fecha_deposito' readonly value='".$fila['fecha_deposito']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='banco' id='banco'>
							<h3>BANCO:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='bacno' placeholder='BANCO' value='".$fila['banco']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='numero_operacion' id='numero_operacion'>
							<h3>NÚMERO OPERACIÓN:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='numero_operacion' placeholder='NÚMERO OPERACIÓN' value='".$fila['numero_operacion']."'>
					</div>
				</div>
				<div class='mb-8 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='monto1' id='monto1'>
							<h3>MONTO 1:</h3>
						</label>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='monto_uno' placeholder='MONTO' value='".$fila['monto_uno']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='tipo_deposito' id='tipo_deposito'>
							<h3>DETALLE MONTO 1:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='deposito_uno' placeholder='DETALLE MONTO' value='".$fila['deposito_uno']."'>
					</div>
				</div>
				<div class='mb-8 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='monto1' id='monto1'>
							<h3>MONTO 2:</h3>
						</label>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='monto_dos' placeholder='MONTO' value='".$fila['monto_dos']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='tipo_deposito' id='tipo_deposito'>
							<h3>DETALLE MONTO 2:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='deposito_dos' placeholder='DETALLE MONTO' value='".$fila['deposito_dos']."'>
					</div>
				</div>
				<div class='mb-8 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='monto1' id='monto1'>
							<h3>TIPO DEPOSITO:</h3>
						</label>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='tipo_deposito' placeholder='TIPO DEPOSITO' value='".$fila['tipo_deposito']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='tipo_deposito' id='tipo_deposito'>
							<h3>EMPRESA:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='empresa' readonly value='".$fila['empresa']."'>
					</div>
				</div>
				<div class='mb-8 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='monto1' id='monto1'>
							<h3>ENCARGADO:</h3>
						</label>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='encargado' readonly value='".$fila['encargado']."'>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker' for='tipo_deposito' id='tipo_deposito'>
							<h3>FECHA REGISTRO:</h3>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='registro' readonly value='".$fila['registro']."'>
					</div>
				</div>
				<div>
					<div class='px-0 md:w-1/2'>
						
					</div>
				</div>
					<div class='flex flex-col flex-grow p-4 bg-gray-200'>
						<h1 class='mb-5 font-bold'>INGRESAR BAUCHER</h1>
					</div>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='file' name='imagen'>
						<img src='".$fila['imagen']." ' > <br><br>
					</div>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='file' name='imagen2'>
						<img src='".$fila['imagen2']." ' >
					</div>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<button class='px-6 py-3 mt-8 font-bold text-white bg-blue-600 rounded-full text-1xl hover:bg-blue-800' type='submit' name='actualizar' id='actualizar'>Actualizar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
	</html>

	";
}

?>
<?php require '../../includes/footer.php' ?>