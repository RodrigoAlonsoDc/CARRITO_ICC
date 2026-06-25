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
	<?php  

	$id_usuario = $_GET['id_usuario'];
	mysqli_set_charset($conexion,"utf8");

    $sql = "SELECT i.id_inscritos, u.nombre, u.apellido, a.titulo, an.titulo, b.titulo, c.titulo, d.titulo, l.titulo, m.titulo, mo.titulo, o.titulo, de.titulo, p.titulo, r.titulo, re.titulo, s.titulo, t.titulo, ti.titulo, e.titulo, pl.titulo, ri.titulo, al.titulo FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos a ON i.ambiental = a.id_cursos INNER JOIN cursos an ON i.analisis = an.id_cursos INNER JOIN cursos b ON i.banco = b.id_cursos INNER JOIN cursos c ON i.contratacion = c.id_cursos INNER JOIN cursos d ON i.desalojo = d.id_cursos INNER JOIN cursos l ON i.litigacion = l.id_cursos INNER JOIN cursos m ON i.motores = m.id_cursos INNER JOIN cursos mo ON i.motores2021 = mo.id_cursos INNER JOIN cursos o ON i.obra = o.id_cursos INNER JOIN cursos de ON i.derecho = de.id_cursos INNER JOIN cursos p ON i.procesal = p.id_cursos INNER JOIN cursos r ON i.redes = r.id_cursos INNER JOIN cursos re ON i.regulacion = re.id_cursos INNER JOIN cursos s ON i.seguridad = s.id_cursos INNER JOIN cursos t ON i.tierra = t.id_cursos INNER JOIN cursos ti ON i.tierra2021 = ti.id_cursos INNER JOIN cursos e ON i.electricidad = e.id_cursos INNER JOIN cursos pl ON i.progplc = pl.id_cursos INNER JOIN cursos ri ON i.riesgo = ri.id_cursos INNER JOIN cursos al ON i.altura = al.id_cursos WHERE i.id_inscritos = $id_usuario";

	$result = mysqli_query($conexion, $sql);

	while ($mostrar = mysqli_fetch_row($result)) {
		echo "

		<h1 class='mt-5 mb-4 ml-5 text-2xl font-bold text-gray-700'>ACTUALIZAR DATOS DEL USUARIO</h1>
		<div class='flex flex-col flex-grow p-4 bg-gray-200'>
			<form action='../CodigoCurso/actualizar_inscritos.php' method='POST' enctype='multipart/form-data'>
				<div class='mt-2 mb-8 -mx-3 md:flex'>
					<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
							<h4>NOMRES COMPLETOS</h4>
						</label>
						<input type='hidden' name='id_inscritos' value='". $mostrar['0']."' >
						<input class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red' type='text' name='nombre' value='". $mostrar['1']."' disabled required>
					</div>
					<div class='px-3 md:w-1/2'>
						<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
							<h4>APELLIDOS COMPLETOS</h4>
						</label>
						<input class='block w-full px-4 py-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-grey-lighter' type='text' name='apellido' value='". $mostrar['2']."' disabled required>
					</div>
				</div>
				<div>
					<label>
						<h2 class='mt-5 mb-4 ml-1 text-2xl font-bold text-gray-700'>ACTUALIZAR LOS CURSOS DE INGENIERÍA QUE LLEVARA EL ESTUDIANTE</h2>
					</label>
				</div>
			
		";

		//PRIMER CURSO REGULACION DEL MERCADO DE ENERGIA
		if ($mostrar[15]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE REGULACIÓN DEL MERCADO DE ENERGÍA</h4>
					</label>
					<select name='regulacion' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='14'>$mostrar[15]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE REGULACIÓN DEL MERCADO DE ENERGÍA</h4>
					</label>
					<select name='regulacion' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='14'>CURSO DE REGULACIÓN DEL MERCADO DE ENERGÍA</option>
					</select>
				</div>

          ";
		}

		//CURSO ESPECIALIZACIÓN DE MOTORES ELÉCTRICOS TRIFÁSICOS
		if ($mostrar[9]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>ESPECIALIZACIÓN DE MOTORES ELÉCTRICOS TRIFÁSICOS</h4>
					</label>
					<select name='motores' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='8'>$mostrar[9]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>ESPECIALIZACIÓN DE MOTORES ELÉCTRICOS TRIFÁSICOS</h4>
					</label>
					<select name='motores' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='8'>ESPECIALIZACIÓN DE MOTORES ELÉCTRICOS TRIFÁSICOS</option>
					</select>
				</div>
			</div>

          ";
		}

		//CURSO SISTEMA DE GESTIÓN Y SEGURIDAD EN EL TRABAJO LEY Nº29783
		if ($mostrar[16]) {
			echo "
			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>SISTEMA DE GESTIÓN Y SEGURIDAD EN EL TRABAJO LEY Nº29783</h4>
					</label>
					<select name='seguridad' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='15'>$mostrar[16]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>SISTEMA DE GESTIÓN Y SEGURIDAD EN EL TRABAJO LEY Nº29783</h4>
					</label>
					<select name='seguridad' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='15'>SISTEMA DE GESTIÓN Y SEGURIDAD EN EL TRABAJO LEY Nº29783</option>
					</select>
				</div>

          ";
		}

		//CURSO SISTEMA DE PUESTA A TIERRA
		if ($mostrar[17]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>SISTEMA DE PUESTA A TIERRA</h4>
					</label>
					<select name='tierra' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='16'>$mostrar[17]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

			<div>
				<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
					<h4>SISTEMA DE PUESTA A TIERRA</h4>
				</label>
				<select name='tierra' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
					<option value='1'>NO</option>
					<option value='16'>SISTEMA DE PUESTA A TIERRA</option>
				</select>
			</div>
		</div>

          ";
		}

		//CURSO DE ANALIZADOR DE REDES
		if ($mostrar[14]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE ANALIZADOR DE REDES</h4>
					</label>
					<select name='redes' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='13'>$mostrar[14]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE ANALIZADOR DE REDES</h4>
					</label>
					<select name='redes' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='13'>CURSO DE ANALIZADOR DE REDES</option>
					</select>
				</div>

          ";
		}

		//CURSO ANÁLISIS DE FACTURACIÓN Y TARIFAS ELÉCTRICAS
		if ($mostrar[4]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>ANÁLISIS DE FACTURACIÓN Y TARIFAS ELÉCTRICAS</h4>
					</label>
					<select name='analisis' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='3'>$mostrar[4]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

			<div>
				<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
					<h4>ANÁLISIS DE FACTURACIÓN Y TARIFAS ELÉCTRICAS</h4>
				</label>
				<select name='analisis' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
					<option value='1'>NO</option>
					<option value='3'>ANÁLISIS DE FACTURACIÓN Y TARIFAS ELÉCTRICAS</option>
				</select>
			</div>
		</div>

          ";
		}

		//CURSO BANCO DE CONDENSADORES
		if ($mostrar[5]) {
			echo "
			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>BANCO DE CONDENSADORES</h4>
					</label>
					<select name='banco' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='4'>$mostrar[5]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>BANCO DE CONDENSADORES</h4>
					</label>
					<select name='banco' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='4'>BANCO DE CONDENSADORES</option>
					</select>
				</div>

          ";
		}

		//CURSO MOTORES ELÉCTRICOS 2021
		if ($mostrar[10]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>MOTORES ELÉCTRICOS 2021</h4>
					</label>
					<select name='motores2021' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='9'>$mostrar[10]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>MOTORES ELÉCTRICOS 2021</h4>
					</label>
					<select name='motores2021' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='9'>MOTORES ELÉCTRICOS 2021</option>
					</select>
				</div>
			</div>
          ";
		}

		//SISTEMA DE PUESTA A TIERRA 2021
		if ($mostrar[18]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>SISTEMA DE PUESTA A TIERRA 2021</h4>
					</label>
					<select name='tierra2021' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='17'>$mostrar[18]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>SISTEMA DE PUESTA A TIERRA 2021</h4>
					</label>
					<select name='tierra2021' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='17'>SISTEMA DE PUESTA A TIERRA 2021</option>
					</select>
				</div>


          ";
		}
		
		//CURSO DE ELECTRICIDAD B&AacuteSICA
		if ($mostrar[19]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE ELECTRICIDAD B&AacuteSICA</h4>
					</label>
					<select name='electricidad' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='18'>$mostrar[19]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE ELECTRICIDAD B&AacuteSICA</h4>
					</label>
					<select name='electricidad' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='18'>CURSO DE ELECTRICIDAD B&AacuteSICA</option>
					</select>
				</div>
			</div>
				
          ";
		}
		
		//PROGRAMACIÓN BÁSICA DE PLC.
		if ($mostrar[20]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>PROGRAMACIÓN BÁSICA DE PLC.</h4>
					</label>
					<select name='progplc' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='19'>$mostrar[20]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>PROGRAMACIÓN BÁSICA DE PLC.</h4>
					</label>
					<select name='progplc' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='19'>PROGRAMACIÓN BÁSICA DE PLC.</option>
					</select>
				</div>
	
            

          ";
		}
		
		//RIESGO ELECTRICO.
		if ($mostrar[21]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>RIESGO ELÉCTRICO.</h4>
					</label>
					<select name='riesgo' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='20'>$mostrar[21]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>RIESGO ELÉCTRICO.</h4>
					</label>
					<select name='riesgo' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='20'>RIESGO ELÉCTRICO.</option>
					</select>
				</div>
	
            

          ";
		}
		
		
		//TRABAJO EN ALTURA.
		if ($mostrar[22]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>TRABAJO EN ALTURA.</h4>
					</label>
					<select name='altura' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='21'>$mostrar[22]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>TRABAJO EN ALTURA.</h4>
					</label>
					<select name='altura' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='21'>TRABAJO EN ALTURA.</option>
					</select>
				</div>
	
            

          ";
		}
		
		
		
		
		
		/////////////////////////////////////

		echo "

		<div>
			<label>
				<h2 class='mt-5 mb-4 ml-1 text-2xl font-bold text-gray-700'>ACTUALIZAR LOS CURSOS DE DERECHO QUE LLEVARA EL ESTUDIANTE</h2>
			</label>
		</div>

		";

		//CURSO SEMINARIO DE PROCESO DE DESALOJO EN LA CORTE SUPREMA
		if ($mostrar[7]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>SEMINARIO DE PROCESO DE DESALOJO EN LA CORTE SUPREMA</h4>
					</label>
					<select name='desalojo' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='6'>$mostrar[7]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>SEMINARIO DE PROCESO DE DESALOJO EN LA CORTE SUPREMA</h4>
					</label>
					<select name='desalojo' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='6'>SEMINARIO DE PROCESO DE DESALOJO EN LA CORTE SUPREMA</option>
					</select>
				</div>

          ";
		}



		//CURSO DE OBRA POR IMPUESTO
		if ($mostrar[11]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE OBRA POR IMPUESTO</h4>
					</label>
					<select name='obra' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='10'>$mostrar[11]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

			<div>
				<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
					<h4>CURSO DE OBRA POR IMPUESTO</h4>
				</label>
				<select name='obra' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
					<option value='1'>NO</option>
					<option value='10'>CURSO DE OBRA POR IMPUESTO</option>
				</select>
			</div>
		</div>

          ";
		}



		//MODIFICACIONES AL REGLAMENTO DE LA LEY DE CONTRATACIONES CON EL ESTADO
		if ($mostrar[6]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>MODIFICACIONES AL REGLAMENTO DE LA LEY DE CONTRATACIONES CON EL ESTADO</h4>
					</label>
					<select name='contratacion' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='5'>$mostrar[6]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>MODIFICACIONES AL REGLAMENTO DE LA LEY DE CONTRATACIONES CON EL ESTADO</h4>
					</label>
					<select name='contratacion' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='5'>MODIFICACIONES AL REGLAMENTO DE LA LEY DE CONTRATACIONES CON EL ESTADO</option>
					</select>
				</div>

          ";
		}



		//CURSO DE DERECHO AMBIENTAL
		if ($mostrar[3]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE DERECHO AMBIENTAL</h4>
					</label>
					<select name='ambiental' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='2'>$mostrar[3]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

			<div>
				<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
					<h4>CURSO DE DERECHO AMBIENTAL</h4>
				</label>
				<select name='ambiental' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
					<option value='1'>NO</option>
					<option value='2'>CURSO DE DERECHO AMBIENTAL</option>
				</select>
			</div>
		</div>

          ";
		}



		//CURSO DE DERECHO PENAL
		if ($mostrar[12]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE DERECHO PENAL</h4>
					</label>
					<select name='derecho' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='11'>$mostrar[12]</option>
						<option value='1'>NO</option>
					</select>
				</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>CURSO DE DERECHO PENAL</h4>
					</label>
					<select name='derecho' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='11'>CURSO DE DERECHO PENAL</option>
					</select>
				</div>

          ";
		}




		//ESPECIALIZACIÓN NUEVO CÓDIGO PROCESAL PENAL
		if ($mostrar[13]) {
			echo "

				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>ESPECIALIZACIÓN NUEVO CÓDIGO PROCESAL PENAL</h4>
					</label>
					<select name='procesal' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='12'>$mostrar[13]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

			<div>
				<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
					<h4>ESPECIALIZACIÓN NUEVO CÓDIGO PROCESAL PENAL</h4>
				</label>
				<select name='procesal' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
					<option value='1'>NO</option>
					<option value='12'>ESPECIALIZACIÓN NUEVO CÓDIGO PROCESAL PENAL</option>
				</select>
			</div>
		</div>

          ";
		}



		//LITIGACIÓN ORAI EN EL NUEVO CÓDIGO PROCESAL PENAL
		if ($mostrar[8]) {
			echo "

			<div class='mt-2 mb-8 -mx-3 md:flex'>
				<div class='px-3 mb-6 md:w-1/2 md:mb-0'>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>LITIGACIÓN ORAL EN EL NUEVO CODIGO PROCESAL</h4>
					</label>
					<select name='litigacion' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='7'>$mostrar[8]</option>
						<option value='1'>NO</option>
					</select>
				</div>
			</div>

			";
		} else {
			echo "

				<div>
					<label class='block mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker'>
						<h4>LITIGACIÓN ORAL EN EL NUEVO CODIGO PROCESAL</h4>
					</label>
					<select name='litigacion' class='block w-full px-4 py-3 mb-3 border rounded appearance-none bg-grey-lighter text-grey-darker border-red'>
						<option value='1'>NO</option>
						<option value='7'>LITIGACIÓN ORAL EN EL NUEVO CODIGO PROCESAL</option>
					</select>
				</div>

          ";
		}
			
		echo "
				<div>
					<button class='px-6 py-3 mt-8 font-bold text-white bg-blue-600 rounded-full text-1xl hover:bg-blue-800' type='submit' name='insertar'>Actualizar</button>
				</div>
			</form>
		</div>

		";

	}

	?>
</body>
</html>

<?php require '../../includes/footer.php' ?>