<?php  

session_start();
if ($_SESSION['rol'] != 1 and $_SESSION['rol'] != 2) {
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
        $tre        = $_POST['3'];
        $cuatro     = $_POST['4'];
        $cinco      = $_POST['5'];
        $seis       = $_POST['6'];
        $siete      = $_POST['7'];
        $ocho       = $_POST['8'];
        $nueve      = $_POST['9'];
        $diez       = $_POST['10'];
        $once       = $_POST['11'];
        $doce       = $_POST['12'];
        $trece      = $_POST['13'];
        $catorce    = $_POST['14'];
        $quince     = $_POST['15'];
        $dieciseis  = $_POST['16'];
        $diecisiete = $_POST['17'];
        $dieciocho  = $_POST['18'];
        $diecinueve = $_POST['19'];
        $veinte     = $_POST['20'];
        $veintiuno  = $_POST['21'];
        //$iduser     = $_POST['id_user'];
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

        $foto       = $_FILES['foto'];
        $nombre_foto= $foto['name'];
        $type       = $foto['type'];
        $url_temp   = $foto['tmp_name'];

        $imgboucher = 'ejemplo.png';

        if ($nombre_foto != '') {
            $destino        = 'img/uploads/';
            $img_nombre     = 'img_'.md5(date('d-m-Y H:m:s'));
            $imgboucher    = $img_nombre.'.jpg';
            $src            = $destino.$imgboucher;
        }

        $query_insert = mysqli_query($conection, "INSERT INTO usuario(id_pla, nombre, correo, telefono, dni, n_operacion, m_pagado, encargado, banco, fecha_deposito, usuario, password, boucher) VALUES ('$id_pla', '$nombre', '$correo', '$telefono', '$dni', '$nopera', '$mpagado', '$encargado', '$banco', '$fecha','$usuario', '$pass', '$imgboucher')");

        if ($query_insert) {
            if ($nombre_foto != '') {
                move_uploaded_file($url_temp, $src);
            }
            $iduser = mysqli_insert_id($conection);
            $query_insert1 = mysqli_query($conection, "INSERT INTO inscrito(id_user,plc, e_basica, s_p_tierra, m_electrico, banco_c, a_facturas_t_e, g_seguridad_t, r_mercado_e, a_redes, riesgo_e, t_altura, e_motores_e, s_p_t_antiguo, costo_p, idtermo, id_residencial, id_medicion, m_t_electricos, redes_electricas, t_caliente) VALUES ('$iduser','$dos', '$tre', '$cuatro', '$cinco', '$seis', '$siete', '$ocho', '$nueve', '$diez', '$once', '$doce', '$trece', '$catorce', $quince, $dieciseis, $diecisiete, $dieciocho, $diecinueve, $veinte, $veintiuno)");
            $alert = '
                <div class="alert alert-dismissible bg-success text-white border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Exitoso - </strong> Registro guardado satisfactoriamente
                </div>
            ';
        }else{
            $alert = '
                <div class="alert alert-dismissible bg-warning border-0 fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Advertencia - </strong> Error al guardar el registro
                </div>
            ';
        }
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
            <h1 class="m-0">Registrar Curso</h1>
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
                                        <input type="hidden" name="idusuario">
                                        <label for="fname">Nombres y Apellifos completos</label>
                                        <input id="fname" type="text" name="nombre" class="form-control" placeholder="Ingresar nombres y apellidos">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="fname">Correo Electronico</label>
                                        <input id="fname" type="text" name="correo" class="form-control" placeholder="Ingresar correo electronico">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">Telefono</label>
                                        <input id="fname" type="number" name="telefono" class="form-control" placeholder="Ingresar número celular">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">DNI</label>
                                        <input id="fname" type="number" name="dni" class="form-control" placeholder="Ingresar DNI">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">Número de Operación</label>
                                        <input id="fname" type="number" name="nopera" class="form-control" placeholder="Ingresar N. de operacion">
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <label for="fname">Monto Pagado</label>
                                        <div class="input-group input-group-merge">
                                            <input type="number" step="any" name="mpagado" class="form-control form-control-prepended" required="" placeholder="Ingresar monto pagar">
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
                                            <option selected="">Seleccionar...</option>
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
                                        <input id="flatpickrSample01" type="text" name="fecha" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr" value="today">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="fname">Usuario</label>
                                        <input id="fname" type="text" class="form-control" name="usuario" placeholder="Ingresar usuario">
                                    </div>
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="fname">Contraseña</label>
                                        <input id="fname" type="text" name="pass" class="form-control" placeholder="Ingresar contraseña">
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
                                    <img id="blah" src="https://www.file-extension.info/images/resource/formats/img.png" alt="your image" />
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
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">PROGRAMACION BASICA P.L.C</label>
                                            <select id="select01" data-toggle="select" name="2" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="2">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">ELECTRICIDAD BASICA</label>
                                            <select id="select01" data-toggle="select" name="3" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="3">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">SISTEMA PUESTA A TIERRA</label>
                                            <select id="select01" data-toggle="select" name="4" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="4">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">MOTORES ELECTRICOS</label>
                                            <select id="select01" data-toggle="select" name="5" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="5">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">BANCO CONDENSADORES</label>
                                            <select id="select01" data-toggle="select" name="6" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="6">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">ANALISIS DE FACTURAS Y EVALUACION DE TARIFAS ELECTRICAS</label>
                                            <select id="select01" data-toggle="select" name="7" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="7">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">GESTION Y SEGURIDAD EN EL TRABAJO LEY N° 29783</label>
                                            <select id="select01" data-toggle="select" name="8" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="8">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">REGULACION DE MERCADO DE ENERGIA</label>
                                            <select id="select01" data-toggle="select" name="9" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="9">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">CONFIGURACION E INSTALACION DE ANALIZADORES DE REDES</label>
                                            <select id="select01" data-toggle="select" name="10" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="10">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">RIESGO ELECTRICO</label>
                                            <select id="select01" data-toggle="select" name="11" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="11">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">TRABAJO EN ALTURA</label>
                                            <select id="select01" data-toggle="select" name="12" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="12">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">ELECTRICIDAD RESIDENCIAL</label>
                                            <select id="select01" data-toggle="select" name="17" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="17">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">COSTOS Y PRESUPUESTOS PARA PROYECTOS ELECTRICOS</label>
                                            <select id="select01" data-toggle="select" name="15" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="15">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">TERMOGRAFIA INFRARROJA EN SISTEMAS ELECTRICOS</label>
                                            <select id="select01" data-toggle="select" name="16" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="16">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">MEDICION DE AISLAMIENTO EN BAJA Y MEDIA TENSION</label>
                                            <select id="select01" data-toggle="select" name="18" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="18">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">MANTENIMIENTO DE TABLEROS ELECTRICOS</label>
                                            <select id="select01" data-toggle="select" name="19" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="19">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">REDES DE DISTRIBUCION DE ENERGIA ELECTRICA</label>
                                            <select id="select01" data-toggle="select" name="20" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="20">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">TRABAJO EN CALIENTE</label>
                                            <select id="select01" data-toggle="select" name="21" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="21">Si</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"><br>
                                    <label style="font-size: 20px;" for="fname">Cursos Antiguos</label><br><br>
                                    <div class="form-row">
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">ESPECIALIZACION DE MOTORES ELECTRICOS TRIFASICOS</label>
                                            <select id="select01" data-toggle="select" name="13" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="13">Si</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 mb-3">
                                            <label for="fname">SISTEMA PUESTA A TIERRA ANTIGUO</label>
                                            <select id="select01" data-toggle="select" name="14" class="form-control">
                                                <option value="1" selected="">No</option>
                                                <option value="14">Si</option>
                                            </select>
                                        </div>
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
include 'includes/barra_lateral_ingenieria.php'; 
include 'includes/script.php';
?>