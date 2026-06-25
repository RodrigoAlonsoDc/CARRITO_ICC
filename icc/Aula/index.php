<?php include '../DataBase/db.php' ?>

<?php include '../includes/header1.php' ?>

<style >

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');







        .font-family-karla {



            font-family: karla;



        } 







       .bg-contenido {



                    background: #0D1A2E;



                }







                .bg-panel {



                    background: #182637;



                }







                .bg-b {



                    background: #243345;



                }







                .bg-boton2 {



                    background: #67737e



                }











                .bg-fondo {



                    background: #0D1A2E;



                }



















</style>











<!-- INICO DE BODY -->



<body class=" bg-fixed h-full bg-fondo">











    <body class="antialiased bg-gray-200 text-gray-900 font-family-karla p-6">



        <div class="container mx-auto">



            <div class="flex flex-wrap -mx-4">




<?php

			$sql = "SELECT u.usuario, a.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos a ON i.ambiental = a.id_cursos WHERE u.usuario = '$usuario' AND i.ambiental = '2'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

				<a href='Cursos/derecho_ambiental.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>

				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php

			$sql = "SELECT u.usuario, an.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos an ON i.analisis = an.id_cursos WHERE u.usuario = '$usuario' AND i.analisis = '3'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>

                    <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>

                        <div class=' overflow-hidden'>

                            <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt='' >

                        </div>


                        <a href='Cursos/analisis_facturacion.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>



                    </div>



                </div>


				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, b.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos b ON i.banco = b.id_cursos WHERE u.usuario = '$usuario' AND i.banco = '4'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>


					<a href='Cursos/banco_condensadores.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>

				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, c.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos c ON i.contratacion = c.id_cursos WHERE u.usuario = '$usuario' AND i.contratacion = '5'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/contrataciones.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, d.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos d ON i.desalojo = d.id_cursos WHERE u.usuario = '$usuario' AND i.desalojo = '6'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/proceso_desalojo.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, l.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos l ON i.litigacion = l.id_cursos WHERE u.usuario = '$usuario' AND i.litigacion = '7'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/litigacion_oral.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, m.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos m ON i.motores = m.id_cursos WHERE u.usuario = '$usuario' AND i.motores = '8'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/motores.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, mo.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos mo ON i.motores2021 = mo.id_cursos WHERE u.usuario = '$usuario' AND i.motores2021 = '9'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/motores2021.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, o.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos o ON i.obra = o.id_cursos WHERE u.usuario = '$usuario' AND i.obra = '10'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/obra_impuesto.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, de.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos de ON i.derecho = de.id_cursos WHERE u.usuario = '$usuario' AND i.derecho = '11'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/derecho_penal.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, p.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos p ON i.procesal = p.id_cursos WHERE u.usuario = '$usuario' AND i.procesal = '12'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/procesal_penal.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, r.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos r ON i.redes = r.id_cursos WHERE u.usuario = '$usuario' AND i.redes = '13'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/analizador_redes.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, re.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos re ON i.regulacion = re.id_cursos WHERE u.usuario = '$usuario' AND i.regulacion = '14'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/regulacion_mercado.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, s.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos s ON i.seguridad = s.id_cursos WHERE u.usuario = '$usuario' AND i.seguridad = '15'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/seguridad_gestion.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>

			<?php  

			$sql = "SELECT u.usuario, t.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos t ON i.tierra = t.id_cursos WHERE u.usuario = '$usuario' AND i.tierra = '16'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/puesta_tierra.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>
			
			<?php  

			$sql = "SELECT u.usuario, ti.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos ti ON i.tierra2021 = ti.id_cursos WHERE u.usuario = '$usuario' AND i.tierra2021 = '17'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/puesta_tierra_2021.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>
			
			<?php  

			$sql = "SELECT u.usuario, e.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos e ON i.electricidad = e.id_cursos WHERE u.usuario = '$usuario' AND i.electricidad = '18'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>



                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>



                <div class=' overflow-hidden'>



                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>



                </div>

					<a href='Cursos/electricidad_basica.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>
			
			<?php  

			$sql = "SELECT u.usuario, pl.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos pl ON i.progplc = pl.id_cursos WHERE u.usuario = '$usuario' AND i.progplc = '19'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>

                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>

                <div class=' overflow-hidden'>

                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>

                </div>

					<a href='Cursos/progplc.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>
			
			<?php  

			$sql = "SELECT u.usuario, ri.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos ri ON i.riesgo = ri.id_cursos WHERE u.usuario = '$usuario' AND i.riesgo = '20'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>

                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>

                <div class=' overflow-hidden'>

                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>

                </div>

					<a href='Cursos/riesgo.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>
			
			<?php  

			$sql = "SELECT u.usuario, al.imagen FROM inscritos i INNER JOIN usuario u ON i.id_usuario = u.id_usuario INNER JOIN cursos al ON i.altura = al.id_cursos WHERE u.usuario = '$usuario' AND i.altura = '21'" ;

			$result = mysqli_query($conexion, $sql);
			$fila = mysqli_fetch_row($result);

			if ($fila) {
				echo "

				<div class='w-full h-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-3'>

                <div href='' class='c-card block bg-white shadow-md hover:shadow-xl rounded-lg transform transition duration-500 hover:scale-110 '>

                <div class=' overflow-hidden'>

                <img class=' inset-0 h-full w-full object-cover' src='$fila[1]' alt=''>

                </div>

					<a href='Cursos/altura.php' class=' bg-blue-500 p-4 flex justify-center text-white'>INGRESAR</a>
				
				</div>



                </div>

				";
			} else {
				echo "";
			}

			?>



</div>



        </div>



    </body>



</body>






<?php include '../includes/foot.php' ?>

