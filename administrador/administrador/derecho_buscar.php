<?php  

session_start();
if ($_SESSION['rol'] != 1 and $_SESSION['rol'] != 3) {
    header("location: ./");
}
include '../conexion.php';
include 'includes/head.php';
include 'includes/header.php';

?>

<div class="mdk-drawer-layout__content page">

    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
            <h1 class="m-lg-0">Instructor Courses</h1>
            <a href="derecho_registro.php" class="btn btn-success ml-lg-3">Nuevo Curso <i class="material-icons">add</i></a>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="card card-form">
            <div class="row no-gutters">
                <div class="col-lg-12 card-form__body">

                    <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                    	<?php  

                    	$busqueda = strtolower($_REQUEST['busqueda']);
                    	if (empty($busqueda)) {
                    		header("location: derecho_lista.php");
                    		mysqli_close($conection);
                    	}

                    	?>

                        <form action="derecho_buscar.php" method="GET">
                            <div class="search-form search-form--light m-3">
                                <input type="text" name="busqueda" id="busqueda" class="form-control search" value="<?php echo $busqueda; ?>" placeholder="Search">
                                <button class="btn" type="submit" role="button"><i class="material-icons">search</i></button>
                            </div>
                        </form>

                        <table class="table mb-0 thead-border-top-0">
                            <thead>
                                <tr>

                                    <th>Nonbres Completos</th>

                                    <th style="width: 37px;">Usuario</th>
                                    <th style="width: 120px;">Contraseña</th>
                                    <th style="width: 120px;">Monto Pagado</th>
                                    <th style="width: 24px;"></th>
                                </tr>
                            </thead>
                            <?php 

                            $rol = '';
                            //PAGINADOR

                            $query_list = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM usuario_d 
                            	WHERE (	iduser_d LIKE '%$busqueda%' OR
                            			nombre	LIKE '%$busqueda%' OR
                            			usuario	LIKE '%$busqueda%' OR
                            			password LIKE '%$busqueda%' OR
                            			m_pagado LIKE '%$busqueda%'
                            			) 
                            	AND estatus = 1");

                            $result_list = mysqli_fetch_array($query_list);
                            $total_registro = $result_list['total_registro'];

                            $por_pagina = 10;

                            if (empty($_GET['pagina'])) {
                                $pagina = 1;
                            }else{
                                $pagina = $_GET['pagina'];
                            }

                            $desde = ($pagina-1) * $por_pagina;
                            $total_paginas = ceil($total_registro / $por_pagina);

                            $query = mysqli_query($conection, "SELECT * FROM usuario_d 
                            	WHERE (	iduser_d LIKE '%$busqueda%' OR
                            			nombre	LIKE '%$busqueda%' OR
                            			usuario	LIKE '%$busqueda%' OR
                            			password LIKE '%$busqueda%' OR
                            			m_pagado LIKE '%$busqueda%'
                            			)
                            	AND estatus = 1 ORDER BY iduser_d DESC LIMIT $desde, $por_pagina");

                            mysqli_close($conection);

                            $result = mysqli_num_rows($query);

                            if ($result > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>

                                    <tbody class="list" id="staff02">

                                        <tr class="<?php echo $data["iduser_d"]; ?>">

                                            <td>

                                                <span class="js-lists-values-employee-name"><?php echo $data["nombre"]; ?></span>

                                            </td>

                                            <td><span class=""><?php echo $data["usuario"]; ?></span></td>
                                            <td><small class="text-muted"><?php echo $data["password"]; ?></small></td>
                                            <td>S/ <?php echo $data["m_pagado"] ?></td>
                                            <td>
                                                <div class="dropdown ml-auto">
                                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="derecho_editar.php?id=<?php echo $data["iduser_d"]; ?>">Editar</a>
                                                        <?php if ($_SESSION['rol'] == 1) {
                                                            ?>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger lista__delete" href="derecho_delete.php?id=<?php echo $data["iduser_d"]; ?>">Eliminar</a>
                                                            <?php 
                                                        } ?>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <script type="text/javascript" src="ingenieria_eliminar.js"></script>

                                    <?php 
                                }
                            }

                            ?>
                            
                        </table>
                        <?php 
	
							if($total_registro != 0)
							{
						 ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="pagination-rounded">

                                    <ul class="pagination ">

                                        <?php  

                                        if ($pagina != 1) {
                                            ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?pagina=<?php echo 1; ?>" aria-label="Previous">
                                                    <span aria-hidden="true" class="material-icons">first_page</span>
                                                    <span class="sr-only">First</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="?pagina=<?php echo $pagina-1; ?>" aria-label="Previous">
                                                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                                                    <span class="sr-only">Prev</span>
                                                </a>
                                            </li>
                                            <?php 
                                        }

                                        for ($i=1; $i <= $total_paginas; $i++) { 
                                            if ($i == $pagina) {
                                                if ($i > 0) {
                                                    echo '
                                                        <li class="page-item active">
                                                            <a class="page-link" aria-label="1">
                                                                <span>'.$i.'</span>
                                                            </a>
                                                        </li>
                                                    ';
                                                }else{
                                                    echo '
                                                        <li class="page-item">
                                                            <a class="page-link" aria-label="1">
                                                                <span>'.$i.'</span>
                                                            </a>
                                                        </li>
                                                    ';
                                                }
                                            }else{
                                                echo '
                                                    <li class="page-item">
                                                        <a class="page-link" href="?pagina='.$i.'" aria-label="1">
                                                            <span>'.$i.'</span>
                                                        </a>
                                                    </li>
                                                ';
                                            }
                                        }

                                        if ($pagina != $total_paginas) {
                                            ?>
                                            <li class="page-item">
                                                <a class="page-link" href="?pagina=<?php echo $pagina + 1; ?>" aria-label="Next">
                                                    <span class="sr-only">Next</span>
                                                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="?pagina=<?php echo $total_paginas; ?>" aria-label="Next">
                                                    <span class="sr-only">Last</span>
                                                    <span aria-hidden="true" class="material-icons">last_page</span>
                                                </a>
                                            </li>
                                            <?php 
                                        }

                                        ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    	<?php } ?>
                    </div>

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