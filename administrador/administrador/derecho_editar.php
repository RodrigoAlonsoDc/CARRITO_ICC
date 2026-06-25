<?php  

session_start();
if ($_SESSION['rol'] != 1 and $_SESSION['rol'] != 3) {
	header("location: ./");
}
include '../conexion.php';

if (!empty($_POST)) {
	$alert = '';

	if (empty($_POST['nombre']) || empty($_POST['usuario']) || empty($_POST['pass'])) {
		$alert = '
			<div class="alert alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Aviso - </strong> Todos los campos son obligatorios
            </div>
		';
	}else{
		$dos        = $_POST['2'];
        $tres        = $_POST['3'];
        $cuatro     = $_POST['4'];
        $cinco      = $_POST['5'];
        $seis       = $_POST['6'];
        $siete      = $_POST['7'];

        $idusuario     = $_POST['id_usuario'];
        $id_pla     = $_SESSION['idUser'];
        $nombre     = $_POST['nombre'];
        $correo     = $_POST['correo'];
        $telefono   = $_POST['telefono'];
        $dni        = $_POST['dni'];
        $nopera     = $_POST['nopera'];
        $mpagado    = $_POST['mpagado'];
        $encargado  = $_POST['encargado'];
        $banco      = $_POST['banco'];
        $fecha      = $_POST['fecha'];
        $usuario    = $_POST['usuario'];
        $pass       = $_POST['pass'];

        $imgBoucher 	= $_POST['foto_actual'];
		$imgRemove 	= $_POST['foto_remove'];

        $foto       = $_FILES['foto'];
        $nombre_foto= $foto['name'];
        $type       = $foto['type'];
        $url_temp   = $foto['tmp_name'];

        $upd = '';

        if ($nombre_foto != '') {
			$destino 		= 'img/uploads/';
			$img_nombre 	= 'img_'.md5(date('d-m-Y H:m:s'));
			$imgBoucher 	= $img_nombre.'.jpg';
			$src			= $destino.$imgBoucher;
		}else{
			if ($_POST['foto_actual'] != $_POST['foto_remove']) {
				$imgBoucher = 'ejemplo.png';
			}
		}

		$query_update = mysqli_query($conection, "UPDATE usuario_d AS u, inscrito_d AS i 
                                    SET u.iduser_d = i.iduser_d, 
                                        u.nombre = '$nombre',
                                        u.correo = '$correo',
                                        u.telefono = '$telefono',
                                        u.dni = '$dni',
                                        u.n_operacion = '$nopera',
                                        u.m_pagado = '$mpagado',
                                        u.encargado = '$encargado',
                                        u.banco = '$banco',
                                        u.fecha_deposito = '$fecha',
                                        u.usuario = '$usuario',
                                        u.password = '$pass',
                                        u.boucher = '$imgBoucher',
                                        i.proceso_d_c_s = '$dos',
                                        i.modi_r_l_c_e = '$tres',
                                        i.d_penal = '$cuatro',
                                        i.d_ambiental = '$cinco',
                                        i.espe_n_c_p = '$seis',
                                        i.liti_o_n_c_p_p = '$siete'
                                    WHERE u.iduser_d = i.iduser_d AND u.iduser_d = $idusuario;");
		if ($query_update) {
			if (($nombre_foto != '' && ($_POST['foto_actual'] != 'ejemplo.png')) || ($_POST['foto_actual'] != $_POST['foto_remove'])) {
					unlink('img/uploads/'.$_POST['foto_actual']);
			}
			if ($nombre_foto != '') {
				move_uploaded_file($url_temp, $src);
			}
			$alert = '
                <div class="alert alert-dismissible bg-success text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Exitoso - </strong> Registro Actualizado satisfactoriamente
                </div>
            ';
		}else{
			$alert = '
                <div class="alert alert-dismissible bg-warning border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Advertencia - </strong> Error al actualizar el registro
                </div>
            ';
		}
	}
}

//VALIDAR REGISTRO
if (empty($_REQUEST['id'])) {
	header("location: derecho_lista.php");
}else{
	$id_user = $_REQUEST['id'];
	if (!is_numeric($id_user)) {
		header("location: derecho_lista.php");
	}

	$query = mysqli_query($conection, "SELECT u.iduser_d,u.nombre,u.correo,u.telefono,u.dni,u.n_operacion,u.m_pagado,u.encargado,u.banco,u.fecha_deposito,u.usuario,u.password,u.boucher,i.idinscrito_d,i.proceso_d_c_s,i.modi_r_l_c_e,i.d_penal,i.d_ambiental,i.espe_n_c_p,i.liti_o_n_c_p_p FROM usuario_d u INNER JOIN inscrito_d i ON u.iduser_d = i.iduser_d WHERE u.iduser_d = $id_user AND u.estatus = 1");
	$result = mysqli_num_rows($query);

	$foto = '';
	$classRemove = 'notblock';

	if ($result > 0) {
		$data = mysqli_fetch_assoc($query);

		if ($data['boucher'] != 'ejemplo.png') {
			$classRemove = '';
			$foto = '<img id="img" src="img/uploads/'.$data['boucher'].'" alt="Producto">';
		}
	}else{
		header("location: derecho_lista.php");
	}
}

?>

<?php 
include 'includes/head.php';
include 'includes/header.php';

?>

<div class="mdk-drawer-layout__content page">



    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-center justify-content-between">
            <h1 class="m-0">Actualizar Curso</h1>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div><?php echo isset($alert) ? $alert : ''; ?></div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card-form__body card-body">

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <input type="hidden" name="id_usuario" value="<?php echo $data['iduser_d']; ?>">
                                        <input type="hidden" id="foto_actual" name="foto_actual" value="<?php echo $data['boucher']; ?>">
										<input type="hidden" id="foto_remove" name="foto_remove" value="<?php echo $data['boucher']; ?>">
                                        <label for="fname">Nombres y Apellifos completos</label>
                                        <input id="fname" type="text" name="nombre" class="form-control" value="<?php echo $data['nombre']; ?>" placeholder="Ingresar nombres y apellidos">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="fname">Correo Electronico</label>
                                        <input id="fname" type="text" name="correo" class="form-control" value="<?php echo $data['correo']; ?>" placeholder="Ingresar correo electronico">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">Telefono</label>
                                        <input id="fname" type="number" name="telefono" class="form-control" value="<?php echo $data['telefono']; ?>" placeholder="Ingresar número celular">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">DNI</label>
                                        <input id="fname" type="number" name="dni" class="form-control" value="<?php echo $data['dni']; ?>" placeholder="Ingresar DNI">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">Número de Operación</label>
                                        <input id="fname" type="number" name="nopera" class="form-control" value="<?php echo $data['n_operacion']; ?>" placeholder="Ingresar N. de operacion">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">Monto Pagado</label>
                                        <div class="input-group input-group-merge">
                                            <input type="number" step="any" name="mpagado" class="form-control form-control-prepended" required="" value="<?php echo $data['m_pagado']; ?>" placeholder="Ingresar monto pagar">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <span class="material-icons">S/</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="fname">Encargado de Registro</label>
                                        <?php  
                                        $rolindex = $_SESSION['rol'];
                                        $query_encargado = mysqli_query($conection,"SELECT * FROM plataforma WHERE estatus = 1 AND rol = $rolindex ");
                                        mysqli_close($conection);
                                        $result_encargado = mysqli_num_rows($query_encargado);
                                        ?>
                                        <?php  
                                        if ($result_encargado > 0) {
                                            while ($encargado = mysqli_fetch_array($query_encargado)) {
                                                ?>
                                                <input id="fname" type="text" name="encargado" class="form-control" readonly value="<?php echo $encargado["name"]; ?>">
                                                <?php 
                                            }
                                        }
                                        ?>
                                        
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="fname">Banco registrado</label><br>
                                        <select id="select01" data-toggle="select" name="banco" class="form-control">
                                            <option selected=""><?php echo $data['banco']; ?></option>
                                            <option>BCP</option>
                                            <option>BanBif</option>
                                            <option>Banco Pichincha</option>
                                            <option>BBVA</option>
                                            <option>Interbank</option>
                                            <option>MiBanco</option>
                                            <option>Scotiabank Perú</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <label for="flatpickrSample01">Fecha registro</label>
                                        <input id="flatpickrSample01" type="text" name="fecha" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr" value="<?php echo $data['fecha_deposito']; ?>">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="fname">Usuario</label>
                                        <input id="fname" type="text" class="form-control" name="usuario" value="<?php echo $data['usuario']; ?>" placeholder="Ingresar usuario">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="fname">Contraseña</label>
                                        <input id="fname" type="text" name="pass" class="form-control" value="<?php echo $data['password']; ?>" placeholder="Ingresar contraseña">
                                    </div>
                                </div>
                                <style type="text/css">
                                    img{
                                      max-width:180px;
                                    }
                                    input[type=file]{
                                    padding:10px;
                                    background:#efefef;}
                                </style>
                                <div class="form-group">
                                    <label>Ingresar Baucher</label><br><br>
                                    <input type="file" name="foto" onchange="readURL(this);" /><br><br>
                                    <img id="blah" src="img/uploads/<?php echo $data['boucher']; ?>" alt="your image" />
                                </div>
                                <script type="text/javascript">
                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#blah')
                                                    .attr('src', e.target.result);
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                </script>
                                <div class="form-group"><br>
                                    <label style="font-size: 20px;" for="fname">Seleccionar Cursos Matriculados</label><br><br>
                                    <div class="form-row">
                                        <?php  

                                        include '../conexion.php';
                                        $id_usuario = $_GET['id'];
                                        mysqli_set_charset($conection,"utf8");

                                        $sql = "SELECT i.idinscrito_d, p.titulo FROM inscrito_d i INNER JOIN usuario_d u ON i.iduser_d = u.iduser_d INNER JOIN derecho p ON i.proceso_d_c_s = p.id_de WHERE i.iduser_d = $id_usuario";

                                        $result = mysqli_query($conection, $sql);

                                        while ($mostrar = mysqli_fetch_row($result)) {

                                            //PRIMER CURSO PROCESO DE DESALOJO EN LA CORTE SUPREMA
                                            if ($mostrar[1]) {
                                                echo "

                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>PROCESO DE DESALOJO EN LA CORTE SUPREMA</label>
                                                    <select id='select01' data-toggle='select' name='2' class='form-control'>
                                                        <option value='2'>$mostrar[1]</option>
                                                        <option value='1'>No</option>
                                                    </select>
                                                </div>

                                                ";
                                            } else {
                                                echo "

                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>PROCESO DE DESALOJO EN LA CORTE SUPREMA</label>
                                                    <select id='select01' data-toggle='select' name='2' class='form-control'>
                                                        <option value='1'>No</option>
                                                        <option value='2'>PROCESO DE DESALOJO EN LA CORTE SUPREMA</option>
                                                    </select>
                                                </div>

                                              ";
                                            }
                                        }
                                        ?>

                                        <?php  

                                        include '../conexion.php';
                                        $id_usuario = $_GET['id'];
                                        mysqli_set_charset($conection,"utf8");

                                        $sql1 = "SELECT i.idinscrito_d, e.titulo FROM inscrito_d i INNER JOIN usuario_d u ON i.iduser_d = u.iduser_d INNER JOIN derecho e ON i.modi_r_l_c_e = e.id_de WHERE i.iduser_d = $id_usuario";

                                        $result1 = mysqli_query($conection, $sql1);

                                        while ($mostrar1 = mysqli_fetch_row($result1)) {
                                            //PRIMER CURSO MODIFICACION AL REGLAMENTO DE LA LEY DE C. CON EL ESTADO
                                            if ($mostrar1[1]) {
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>MODIFICACION AL REGLAMENTO DE LA LEY DE C. CON EL ESTADO</label>
                                                    <select id='select01' data-toggle='select' name='3' class='form-control'>
                                                        <option value='3'>$mostrar1[1]</option>
                                                        <option value='1'>No</option>
                                                    </select>
                                                </div>
                                                ";
                                            }else{
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>MODIFICACION AL REGLAMENTO DE LA LEY DE C. CON EL ESTADO</label>
                                                    <select id='select01' data-toggle='select' name='3' class='form-control'>
                                                        <option value='1'>No</option>
                                                        <option value='3'>MODIFICACION AL REGLAMENTO DE LA LEY DE C. CON EL ESTADO</option>
                                                    </select>
                                                </div>
                                                ";
                                            }
                                        }

                                        ?>
                                        
                                    </div>
                                    <div class="form-row">
                                        <?php  

                                        include '../conexion.php';
                                        $id_usuario = $_GET['id'];
                                        mysqli_set_charset($conection,"utf8");

                                        $sql2 = "SELECT i.idinscrito_d, s.titulo FROM inscrito_d i INNER JOIN usuario_d u ON i.iduser_d = u.iduser_d INNER JOIN derecho s ON i.d_penal = s.id_de WHERE i.iduser_d = $id_usuario";

                                        $result2 = mysqli_query($conection, $sql2);

                                        while ($mostrar2 = mysqli_fetch_row($result2)) {
                                            //PRIMER CURSO DERECHO PENAL
                                            if ($mostrar2[1]) {
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>DERECHO PENAL</label>
                                                    <select id='select01' data-toggle='select' name='4' class='form-control'>
                                                        <option value='4'>$mostrar2[1]</option>
                                                        <option value='1'>No</option>
                                                    </select>
                                                </div>
                                                ";
                                            }else{
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>DERECHO PENAL</label>
                                                    <select id='select01' data-toggle='select' name='4' class='form-control'>
                                                        <option value='1'>No</option>
                                                        <option value='4'>DERECHO PENAL</option>
                                                    </select>
                                                </div>
                                                ";
                                            }
                                        }

                                        ?>
                                        
                                        <?php  

                                        include '../conexion.php';
                                        $id_usuario = $_GET['id'];
                                        mysqli_set_charset($conection,"utf8");

                                        $sql3 = "SELECT i.idinscrito_d, m.titulo FROM inscrito_d i INNER JOIN usuario_d u ON i.iduser_d = u.iduser_d INNER JOIN derecho m ON i.d_ambiental = m.id_de WHERE i.iduser_d = $id_usuario";

                                        $result3 = mysqli_query($conection, $sql3);

                                        while ($mostrar3 = mysqli_fetch_row($result3)) {
                                            //PRIMER CURSO DERECHO AMBIENTAL
                                            if ($mostrar3[1]) {
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>DERECHO AMBIENTAL</label>
                                                    <select id='select01' data-toggle='select' name='5' class='form-control'>
                                                        <option value='5'>$mostrar3[1]</option>
                                                        <option value='1'>No</option>
                                                    </select>
                                                </div>
                                                ";
                                            }else{
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>DERECHO AMBIENTAL</label>
                                                    <select id='select01' data-toggle='select' name='5' class='form-control'>
                                                        <option value='1'>No</option>
                                                        <option value='5'>DERECHO AMBIENTAL</option>
                                                    </select>
                                                </div>
                                                ";
                                            }
                                        }

                                        ?>

                                        
                                    </div>
                                    <div class="form-row">
                                        <?php  

                                        include '../conexion.php';
                                        $id_usuario = $_GET['id'];
                                        mysqli_set_charset($conection,"utf8");

                                        $sql4 = "SELECT i.idinscrito_d, b.titulo FROM inscrito_d i INNER JOIN usuario_d u ON i.iduser_d = u.iduser_d INNER JOIN derecho b ON i.espe_n_c_p = b.id_de WHERE i.iduser_d = $id_usuario";

                                        $result4 = mysqli_query($conection, $sql4);

                                        while ($mostrar4 = mysqli_fetch_row($result4)) {
                                            //PRIMER CURSO ESPECIALIZACION NUEVO CODIGO PROCESAL PENAL
                                            if ($mostrar4[1]) {
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>ESPECIALIZACION NUEVO CODIGO PROCESAL PENAL</label>
                                                    <select id='select01' data-toggle='select' name='6' class='form-control'>
                                                        <option value='6'>$mostrar4[1]</option>
                                                        <option value='1'>No</option>
                                                    </select>
                                                </div>
                                                ";
                                            }else{
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>ESPECIALIZACION NUEVO CODIGO PROCESAL PENAL</label>
                                                    <select id='select01' data-toggle='select' name='6' class='form-control'>
                                                        <option value='1'>No</option>
                                                        <option value='6'>ESPECIALIZACION NUEVO CODIGO PROCESAL PENAL</option>
                                                    </select>
                                                </div>
                                                ";
                                            }
                                        }

                                        ?>
                                        
                                        <?php  

                                        include '../conexion.php';
                                        $id_usuario = $_GET['id'];
                                        mysqli_set_charset($conection,"utf8");

                                        $sql5 = "SELECT i.idinscrito_d, a.titulo FROM inscrito_d i INNER JOIN usuario_d u ON i.iduser_d = u.iduser_d INNER JOIN derecho a ON i.liti_o_n_c_p_p = a.id_de WHERE i.iduser_d = $id_usuario";

                                        $result5 = mysqli_query($conection, $sql5);

                                        while ($mostrar5 = mysqli_fetch_row($result5)) {
                                            //PRIMER CURSO LITIGACION ORAL EN EL NUEVO CODIGO PROCESAL PENAL
                                            if ($mostrar5[1]) {
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>LITIGACION ORAL EN EL NUEVO CODIGO PROCESAL PENAL</label>
                                                    <select id='select01' data-toggle='select' name='7' class='form-control'>
                                                        <option value='7'>$mostrar5[1]</option>
                                                        <option value='1'>No</option>
                                                    </select>
                                                </div>
                                                ";
                                            }else{
                                                echo "
                                                <div class='col-12 col-md-6 mb-3'>
                                                    <label for='fname'>LITIGACION ORAL EN EL NUEVO CODIGO PROCESAL PENAL</label>
                                                    <select id='select01' data-toggle='select' name='7' class='form-control'>
                                                        <option value='1'>No</option>
                                                        <option value='7'>LITIGACION ORAL EN EL NUEVO CODIGO PROCESAL PENAL</option>
                                                    </select>
                                                </div>
                                                ";
                                            }
                                        }

                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">

                            <button type="submit" class="btn btn-success">Guardar Registro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>
<!-- // END drawer-layout__content -->

<?php 
include 'includes/barra_lateral_derecho.php'; 
include 'includes/script.php';
?>