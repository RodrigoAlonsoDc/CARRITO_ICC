
 
	  <?php

require '../aula/logica/conexion.php';
 


require_once 'cabecera.php';


  ?>





	<main>
		<ul id="cd-gallery-items" class="cd-container">

			<?php 




			 $sql="SELECT r.imagen1 FROM cursos c INNER JOIN regulacion_mercado r ON c.id_regulacion_mercado=r.id_regulacion_mercado INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' 	and r.id_regulacion_mercado='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='regulacion_mercado.php'>  <img src='$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>

			
		<?php 




			 $sql="SELECT m.imagen FROM cursos c INNER JOIN motores m ON c.id_motores=m.id_motores INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' 	and m.id_motores='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='motores.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>


				<?php 




			 $sql="SELECT s.imagen FROM cursos c INNER JOIN seguridad s ON c.id_seguridad=s.id_seguridad INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' 	and  s.id_seguridad='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='seguridad.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>
			
				<?php 




			 $sql="SELECT t.imagen FROM cursos c INNER JOIN tierra t ON c.id_tierra=t.id_tierra INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' 	and  t.id_tierra='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='tierra.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>
			<?php 




			 $sql="SELECT r.imagen FROM cursos c INNER JOIN redes r ON c.id_redes=r.id_redes INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' 	and  r.id_redes='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='redes.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>

			<?php 




			 $sql="SELECT a.imagen FROM cursos c INNER JOIN analisis a ON c.id_analisis=a.id_analisis INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' and  a.id_analisis='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='analisis.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>

      <?php 




			 $sql="SELECT b.imagen FROM cursos c INNER JOIN banco b ON c.id_banco=b.id_banco INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' and  b.id_banco='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='banco.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>

   <?php 




			 $sql="SELECT d.imagen FROM cursos c INNER JOIN desalojo d ON c.id_desalojo=d.id_desalojo INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' and  d.id_desalojo='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='desalojo.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>

			 <?php 




			 $sql="SELECT o.imagen FROM cursos c INNER JOIN obra o ON c.id_obra=o.id_obra INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' and  o.id_obra='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='obra.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>

       <?php 




			 $sql="SELECT n.imagen FROM cursos c INNER JOIN contratacion n ON c.id_contratacion=n.id_contratacion INNER JOIN usuarios u ON c.id=u.id  WHERE u.nombre='$usuario' and  n.id_contratacion='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		<li>
				<a href='contratacion.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
			</li>
		";
    }
    else{
    	echo "";
    }

      ?>



       <?php 




			 $sql="SELECT a.imagen FROM cursos c INNER JOIN ambiental a ON c.id_ambiental=a.id_ambiental INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and  a.id_ambiental='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "

				<li>
				<a href='ambiental.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>


 <?php 




			 $sql="SELECT p.imagen FROM cursos c INNER JOIN penal p ON c.id_penal=p.id_penal INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and  p.id_penal='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='penal.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>



 <?php 




			 $sql="SELECT p.imagen FROM cursos c INNER JOIN procesal p ON c.id_procesal=p.id_procesal INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and  p.id_procesal='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='procesal.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>




 <?php 


			 $sql="SELECT l.imagen FROM cursos c INNER JOIN litigacion l ON c.id_litigacion=l.id_litigacion INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and  l.id_litigacion='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='litigacion.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>





<?php 


			 $sql="SELECT mo.imagen FROM cursos c INNER JOIN motores_2021 mo ON c.id_motores2021=mo.id_motores2021 INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and mo.id_motores2021='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='motores2021.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>

<?php 


			 $sql="SELECT ti.imagen FROM cursos c INNER JOIN tierra_2021 ti ON c.id_tierra_2021=ti.id_tierra_2021 INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and ti.id_tierra_2021='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='tierra_2021.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>
      
      
      <?php 


			 $sql="SELECT e.imagen FROM cursos c INNER JOIN electricidad e ON c.id_electricidad=e.id_electricidad INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and e.id_electricidad='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='electricidad_basica.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>
      
      <?php 


			 $sql="SELECT pl.imagen FROM cursos c INNER JOIN progplc pl ON c.id_progplc=pl.id_progplc INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and pl.id_progplc='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='progplc.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>
      
      <?php 


			 $sql="SELECT ri.imagen FROM cursos c INNER JOIN riesgo ri ON c.id_riesgo=ri.id_riesgo INNER JOIN usuarios u ON c.id=u.id WHERE u.nombre='$usuario' and ri.id_riesgo='1'" ;
    $result=mysqli_query($conexion,$sql);
    $fila=mysqli_fetch_row($result);

     if ($fila) {

		echo "
		
				<li>
				<a href='riesgo.php'>  <img src='img/$fila[0]' alt='Preview image'> </a> 
				</li>
		";
    }
    else{
    	echo "";
    }

      ?>


		</ul> <!-- cd-gallery-items -->
	</main>



 
	  <?php


 


require_once 'footer.php';


  ?>