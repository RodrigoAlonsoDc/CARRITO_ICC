
<?php require_once '../../DataBase/db.php';?>
<?php require '../../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<center>
			<label>
				<h1 class="mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700">REGISTRO Y LISTADO DE CURSO</h1>
			</label>
		</center>
	</div>
	<div class="container px-6 mx-auto grid">
		<main class=" w-full overflow-y-auto">
			<section v-if="active === 'performance'" id="performance">
				<div class="flex flex-wrap flex-row">
					<div class="w-full lg:w-1/2">
						<form action="../CodigoCurso/registrar_cursos.php" method="POST">
							<section class="m-4 bg-white border border-gray-300 border-solid rounded shadow">
								<header class="border-b border-solid border-gray-300 p-4 text-lg font-medium">
									<h2>AGREGAR CURSOS</h2>
								</header>
								<div>
									<?php  

									$sql = "SELECT id_cursos FROM cursos ORDER BY id_cursos DESC LIMIT 1 ";
									$result = $conexion->query($sql);

									while ($fila = $result->fetch_assoc()) {
										 mysqli_set_charset($conexion, "utf8");

										 echo "

										 <input type='hidden' name='id_cursos' readonly value='".++$fila['id_cursos']." '>

										 ";
										} 

									?>
								</div>
								<section class="w-full">
									<div class="mt-2 mb-8 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h2>NOMBRE DEL CURSO:</h2>
											</label>
											<textarea name="titulo" placeholder="INGRESAR NOMBRE CURSO" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red"></textarea>
										</div>
									</div>
									<div class="mt-2 mb-8 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h4>IMAGEN DE PORTADA:</h4>
											</label>
											<input type="file" name="imagenes" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
										</div>
									</div>
									<div class="mt-2 mb-8 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h4>REGISTRO:</h4>
											</label>
											<input type="datetime-local" name="registro" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
										</div>
									</div>
									<div class="mt-2 mb-8 -mx-3 md:flex px-10">
										<button name="guardar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">REGISTRAR</button>
									</div>
								</section>
							</section>
						</form>
					</div>
					<div class="w-full lg:w-1/2">
						<form action="../CodigoCurso/registrar_info_cursos.php" method="POST">
							<section class="m-4 bg-white border border-gray-300 border-solid rounded shadow">
								<header class="border-b border-solid border-gray-300 p-4 text-lg font-medium">
									<h2>ADICIONAR INFORMACIÓN DEL CURSO</h2>
								</header>
								<section class="w-full">
									<div class="mt-2 mb-2 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h4>SELECCIONAR CURSO:</h4>
											</label>
											<select class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
												<?php 

												mysqli_set_charset($conexion, "utf8");

												$query = $conexion->query("SELECT * FROM cursos");

												while ($valores = mysqli_fetch_array($query)) {
													echo '<option value="'.$valores[id_cursos].'">'.$valores[titulo].'</option>';
												}

												?>
											</select>
										</div>
									</div>
									<div class="mt-2 mb-2 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h4>INGRESAR IMAGENES:</h4>
											</label>
											<input type="file" name="imagen" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
										</div>
									</div>
									<div class="mt-2 mb-4 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h4>INGRESAR SUBTITULOS:</h4>
											</label>
											<textarea name="subtitulo" placeholder="INGRESAR SUBTITULOS" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red"></textarea>
										</div>
									</div>
									<div class="mt-2 mb-8 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h4>INGRESAR VIDEOS:</h4>
											</label>
											<textarea name="video" placeholder="INGRESAR LINK DEL VIDEO" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red"></textarea>
										</div>
									</div>
									<div class="mt-2 mb-8 -mx-3 md:flex">
										<div class="px-8 -ml-2 mb-6 md:w-full md:mb-0">
											<label class="ml-2 block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
												<h4>INGRESAR ARCHIVOS:</h4>
											</label>
											<input type="file" name="recursos" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
										</div>
									</div>
									<div class="mt-2 mb-8 -mx-3 md:flex px-10">
										<button name="guardar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">REGISTRAR</button>
									</div>
								</section>
							</section>
						</form>
					</div>
				</div>
			</section>
			<section class="m-4 bg-white border border-gray-300 border-solid rounded shadow">
				<header class="border-b border-solid border-gray-300 p-4 text-lg font-medium">
					<h2 class="text-center">LISTADO DE INFORMACIÓN CURSOS</h2>
				</header>
				<section class="flex flex-row flex-wrap items-center text-center border-b border-solid border-gray-300">
					<div class="flex flex-col flex-grow p-4">
						<div class="p-8 mt-6 bg-white rounded shadow lg:mt-0" id='recipients'>
							<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
								<thead>
									<tr>
										<th data-priority="1"><h4>ID</h4></th>
										<th data-priority="2"><h4>CURSOS</h4></th>
										<th data-priority="3"><h4>IMAGENES</h4></th>
										<th data-priority="4"><h4>REGISTRO</h4></th>
										<th data-priority="5"><h4>OPCIONES</h4></th>
									</tr>
								</thead>
								<tbody>
									<?php  

									mysqli_set_charset($conexion, "utf8");

									$sql = "SELECT * FROM cursos";
									$result = mysqli_query($conexion, $sql);

									while ($mostrar = mysqli_fetch_array($result)) {
										?>

										<tr>
											<th><?php echo $mostrar['id_cursos'] ?></th>
											<th><?php echo $mostrar['titulo'] ?></th>
											<th><?php echo $mostrar['imagen'] ?></th>
											<th><?php echo $mostrar['registro'] ?></th>
											<td>
												<button>
													<a href="actualizar_cursos.php?id_cursos=<?php echo $mostrar['id_cursos'] ?>"><font>EDITAR</font></a>
												</button>
												<button>
													<a href="actualizar_cursos.php?id_cursos=<?php echo $mostrar['id_cursos'] ?>"><font>ELIMINAR</font></a>
												</button>
											</td>
										</tr>

										<?php
									}

									?>
								</tbody>
							</table>
						</div>
					</div>
				</section>
				<section id="chart" class="p-4">
				</section>
			</section>
		</main>
	</div>
</body>
</html>
<?php require '../../includes/footer.php' ?>