<?php require_once "../../DataBase/db.php"; ?>
<?php require '../../includes/header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1 class="mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700">LISTA DE ESTUDIANTES Y CURSOS INSCRITOS</h1>
	<div class="flex flex-col flex-grow p-4 bg-gray-200">
		<form action="#" target="print_popup" method="POST">
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="nombre" id="nombre">Lista de Estudiantes Inscritos por Fecha</label>
					<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" id="fecha_registro" name="desde" type="datetime-local" placeholder="Nombre">
				</div>
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker">
						....
					</label>
					<input type="datetime-local" name="hasta" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
				</div>
				<div class="px-3 md:w-1/2">
          			<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="numero_operacion" id="numero_operacion">
            		Documento
          			</label>
          			<button type="submit" id="mos" class="btn btn-primary glyphicon glyphicon-remove" > <font color="red"> Imprimir por Fecha</font>  </button>
        		</div>
			</div>
		</form>
		<form action="" target="print_popup" method="POST">
			<div class="mb-10 -mx-3 md:flex">
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
					<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="nombre" id="nombre">Datos Contables por fecha</label>
					<input type="datetime-local" name="desde" class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red">
				</div>
				<div class="px-3 mb-6 md:w-1/2 md:mb-0">
          			<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="nombre" id="nombre">....</label>
          			<input class="block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red" id="fecha_registro" name="hasta" type="datetime-local" placeholder="Nombre">
        		</div>
        		<div class="px-3 md:w-1/2">
          			<label class="block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker" for="numero_operacion" id="numero_operacion">Documento</label>
          			<button  type="submit" id="mos" class="btn btn-primary glyphicon glyphicon-remove" > <font color="red"> Imprimir por Fecha</font>  </button>
        		</div>
			</div>
		</form>
	</div>
	<div class="flex flex-col flex-grow p-4 bg-gray-200">
		<h1 class="flex items-center px-1 py-2 font-sans text-xl font-bold text-indigo-500 break-normal md:text-1xl"> LISTA DE ESTUDIANTES INSCRITOS</h1>
		<div id='recipients' class="p-8 mt-6 bg-white rounded shadow lg:mt-0">
			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<div class="table-responsive">
					<div class="dt-responsive table-responsive">
						<table id="res-config" class="border-separate border border-black" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
							<thead class="border-separate border border-black">
								<tr>
									<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-200 text-left text-xs font-bold text-black uppercase tracking-wider">Nº</th>
									<th class="border-separate border bg-gray-200">Nombres Completos</th>
									<th class="border-separate border bg-gray-200">Cursos</th>
									<th class="border-separate border bg-gray-200">Opciones</th>
								</tr>
							</thead>
							<tbody>
								<?php  

								mysqli_set_charset($conexion,"utf8");

								$sql = "SELECT i.id_inscritos, u.nombre, u.apellido, a.titulo, an.titulo, b.titulo, c.titulo, d.titulo, l.titulo, m.titulo, mo.titulo, o.titulo, de.titulo, p.titulo, r.titulo, re.titulo, s.titulo, t.titulo, ti.titulo, e.titulo, pl.titulo, ri.titulo, al.titulo FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos a ON i.ambiental = a.id_cursos INNER JOIN cursos an ON i.analisis = an.id_cursos INNER JOIN cursos b ON i.banco = b.id_cursos INNER JOIN cursos c ON i.contratacion = c.id_cursos INNER JOIN cursos d ON i.desalojo = d.id_cursos INNER JOIN cursos l ON i.litigacion = l.id_cursos INNER JOIN cursos m ON i.motores = m.id_cursos INNER JOIN cursos mo ON i.motores2021 = mo.id_cursos INNER JOIN cursos o ON i.obra = o.id_cursos INNER JOIN cursos de ON i.derecho = de.id_cursos INNER JOIN cursos p ON i.procesal = p.id_cursos INNER JOIN cursos r ON i.redes = r.id_cursos INNER JOIN cursos re ON i.regulacion = re.id_cursos INNER JOIN cursos s ON i.seguridad = s.id_cursos INNER JOIN cursos t ON i.tierra = t.id_cursos INNER JOIN cursos ti ON i.tierra2021 = ti.id_cursos INNER JOIN cursos e ON i.electricidad = e.id_cursos INNER JOIN cursos pl ON i.progplc = pl.id_cursos INNER JOIN cursos ri ON i.riesgo = ri.id_cursos INNER JOIN cursos al ON i.altura = al.id_cursos ";

								$result = mysqli_query($conexion,$sql);
								while ($mostrar = mysqli_fetch_row($result)) {
								$primera = $mostrar['0'];
								?>

								<tr>
									<th class="px-5 py-5 border-b border-gray-500 bg-white text-sm" scope="row"><?php echo $mostrar['0'] ?></th>
									<th class="px-5 py-5 border-b border-gray-500 bg-white text-sm" scope="row"><?php echo $mostrar['1'] ?> <?php echo $mostrar['2'] ?></th>
									<td class="px-5 py-5 border-b border-gray-500 bg-white text-sm">
										<?php 

											if ($mostrar[3]) {
												echo "<div class='col-md-12'>$mostrar[3]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[4]) {
												echo "<div class='col-md-12'>$mostrar[4]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[5]) {
												echo "<div class='col-md-12'>$mostrar[5]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[6]) {
												echo "<div class='col-md-12'>$mostrar[6]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[7]) {
												echo "<div class='col-md-12'>$mostrar[7]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[8]) {
												echo "<div class='col-md-12'>$mostrar[8]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[9]) {
												echo "<div class='col-md-12'>$mostrar[9]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[10]) {
												echo "<div class='col-md-12'>$mostrar[10]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[11]) {
												echo "<div class='col-md-12'>$mostrar[11]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[12]) {
												echo "<div class='col-md-12'>$mostrar[12]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[13]) {
												echo "<div class='col-md-12'>$mostrar[13]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[14]) {
												echo "<div class='col-md-12'>$mostrar[14]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[15]) {
												echo "<div class='col-md-12'>$mostrar[15]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[16]) {
												echo "<div class='col-md-12'>$mostrar[16]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

											if ($mostrar[17]) {
												echo "<div class='col-md-12'>$mostrar[17]</div>";
											} else {
												echo "";
											}

										?>
										<?php 

										if ($mostrar[18]) {
												echo "<div class='col-md-12'>$mostrar[18]</div>";
										} else {
											echo "";
										}

										?>
										<?php 

										if ($mostrar[19]) {
												echo "<div class='col-md-12'>$mostrar[19]</div>";
										} else {
											echo "";
										}

										?>
										<?php 

										if ($mostrar[20]) {
												echo "<div class='col-md-12'>$mostrar[20]</div>";
										} else {
											echo "";
										}

										?>
										<?php 

										if ($mostrar[21]) {
												echo "<div class='col-md-12'>$mostrar[21]</div>";
										} else {
											echo "";
										}

										?>
										<?php 

										if ($mostrar[22]) {
												echo "<div class='col-md-12'>$mostrar[22]</div>";
										} else {
											echo "";
										}

										?>

									</td>
									<td class="px-5 py-5 border-b border-gray-500 bg-white text-sm">
			                 			<button class="rounded bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white"><a href="actualizar_inscritos.php?id_usuario=<?php  echo  $mostrar['0'];?>" ><font color="black">EDITAR</font> </a> </button> 
			              			</td>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</table>
		</div>
	</div>
</body>
</html>
<?php require '../../includes/footer.php' ?>