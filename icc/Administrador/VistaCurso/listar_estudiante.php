<?php  require_once '../../DataBase/db.php'; ?>
<?php require '../../includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 class="mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700">Administrador</h1>
	<div class="flex flex-col flex-grow p-4 bg-gray-200">
		<center><h1 class="flex items-center px-1 py-2 font-sans text-xl font-bold text-indigo-500 break-normal md:text-1xl">LISTA DE ESTUDIANTES</h1></center>
		<div id='recipients' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">ID</th>
						<th data-priority="2">Nombres</th>
						<th data-priority="3">Apellidos</th>
						<th data-priority="4">Usuarios</th>
						<th data-priority="5">Fecha Registro</th>
						<th data-priority="6">Editar</th>
					</tr>
				</thead>
				<tbody>
					<?php  

					mysqli_set_charset($conexion, "utf8");

					$sql = "SELECT * FROM usuario";
					$result = mysqli_query($conexion, $sql);

					while ($mostrar = mysqli_fetch_array($result)) {
					?>
					<tr>
						<th scope="row"><?php echo $mostrar['id_usuario']; ?></th>
						<th scope="row"><?php echo $mostrar['nombre'] ?></th>
						<th><?php echo $mostrar['apellido'] ?></th>
						<th><?php echo $mostrar['usuario'] ?></th>
						<th><?php echo $mostrar['registro'] ?></th>
						<th>
							<button class=" rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white"><a href="actualizar_estudiante.php?id_usuario=<?php  echo  $mostrar['id_usuario'];?>" ><font color="black">EDITAR</font> </a> </button>
						</th>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
<?php require '../../includes/footer.php' ?>					