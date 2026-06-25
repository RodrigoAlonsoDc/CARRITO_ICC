<?php require_once '../../DataBase/db.php';?>
<?php require '../../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
	<center><h1 class="mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700">INGRESAR ESTUDIANTE</h1></center>
	<div class="flex flex-col flex-grow p-4 bg-gray-200">
		<form action="../CodigoCurso/registrar_estudiante.php" method="POST" enctype="multipart/form-data">
			<div class="mt-1 mb-2 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>NOMBRE:</h3>
					</label>
					<input type="text" name="nombre" placeholder="NOMBRE" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
				</div>
				<div class="px-3 md:w-1/2">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>APELLIDO:</h3>
					</label>
					<input type="text" name="apellido" placeholder="APELLIDO" class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter">
				</div>
			</div>
			<div class="mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>CORREO:</h3>
					</label>
						<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="text" name="correo" placeholder="CORREO">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>NÚMERO CELULAR:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="text" name="celular" placeholder="CELULAR">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>DNI:</h3>
					</label>
					<input type="text" name="dni" placeholder="DNI" class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter">
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>USUARIO:</h3>
					</label>
					<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="text" name="usuario" placeholder="USUARIO">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>PASSWORD:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="password" name="password" placeholder="PASSWORD">
				</div>
			</div>
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>FECHA DEPOSITO:</h3>
					</label>
					<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="datetime-local" name="fecha_deposito">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>BANCO:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="text" name="banco" placeholder="BANCO">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>NÚMERO OPERACIÓN:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="text" name="numero_operacion" placeholder="NÚMERO OPERACIÓN">
				</div>
			</div>
			<div class="mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>MONTO 1:</h3>
					</label>
					<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="text" name="monto_uno" placeholder="MONTO">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>DETALLE DEPOSITO 1:</h3>
					</label>
						<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="text" name="deposito_uno" placeholder="DETALLE DEPOSITO">
				</div>
			</div>
			<div class="mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>MONTO 2:</h3>
					</label>
					<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="text" name="monto_dos" placeholder="MONTO">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>DETALLE DEPOSITO 2:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="text" name="deposito_dos" placeholder="DETALLE DEPOSITO">
				</div>
			</div>
			<div class="mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>TIPO DEPOSITO:</h3>
					</label>
						<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="text" name="tipo_deposito" placeholder="TIPO DEPOSITO">
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>EMPRESA:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="text" name="empresa" value="ICC" readonly>
				</div>
			</div>
			<div class="mb-8 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>ENCARGADO REGISTRO:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="text" name="encargado" value="ROSSANA" readonly>
				</div>
				<div class="px-3 md:w-1/2">
					<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						<h3>FECHA REGISTRO:</h3>
					</label>
					<input class="block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" type="datetime-local" name="registro">
				</div>
			</div>
				<div>
					<label>
						<h2 class="mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700">INGRESAR BAUCHER</h2>
					</label>
					<div class="mb-8 -mx-3 md:flex">
						<div class="px-3 mb-6 md:w-1/2 md:mb-0">
							<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
								<h4>PRIMERA IMAGEN:</h4>
							</label>
							<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="file" name="imagen1">
						</div>
						<div class="px-3 mb-6 md:w-1/2 md:mb-0">
							<label for="" class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
								<h4>SEGUNDA IMAGEN:</h4>
							</label>
							<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" type="file" name="imagen2">
						</div>
					</div>
				</div>
				<div class="mt-2 mb-8 -mx-3 md:flex">
					<div class="px-3 mb-6 md:w-1/2 md:mb-0">
						<button id="enviar" name="enviar" class="px-6 py-3 mt-8 font-bold text-white bg-blue-600 rounded-full text-1xl hover:bg-blue-800">Enviar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
<?php require '../../includes/footer.php' ?>