<title>Central de control</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<p>
<div class="container">
  <!-- Content here -->
<main role ="main">
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Bienvenido a la central de control de FPB2</h1>
          <p class="lead text-muted">Esta web permite controlar los ordenadores de los alumnos, a continuación se explican las diferentes funcionalidades.</p>
          <p class="lead text-muted">Cerrar para cerrar los navedores web de un determinado alumno.</p>
          <p class="lead text-muted">Apagar permite apagar el ordenador del alumno.</p>
          <p class="lead text-muted">Silenciar quita el sonido del ordenador.</p>
<!--          <p class="lead text-muted">"Actualizar" copia el fichero /var/www/html/Web/hosts en el equipo del alumno, permite bloquear webs. Consultar con administrador del sistema.</p> -->
          <p class="lead text-muted">Se puede bloquear el acceso a Internet del alumno pulsando la opción correspondiente, para recuperar el acceso a Internet basta con pulsar desbloquear.</p>

          </p>
        </div>
      </section>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Alumno</th>
      <th scope="col">Navegadores</th>
      <th scope="col">Apagar</th>
      <th scope="col">Sonido</th> 
      <th scope="col">Bloquear Internet</th>
      <th scope="col">Desbloquear Internet</th>
    </tr>
  </thead>

  <tbody>
	<?php
	include_once("config.php");
		for($i = 0; $i < count($alumnos); $i++)
		{
			echo "<tr>";
			echo '<th scope="row">' .$i . '</th>';
		        echo '<td>'. $alumnos[$i][0] . '</td>';
			echo '<td><a href="./cerrar_nav.php?pos=' .$i .' ">Cerrar</a></td>';
			echo '<td><a href="./apaga.php?pos=' .$i .' ">Apaga</a></td>';
			echo '<td><a href="./mute.php?pos=' .$i .' ">Silenciar</a></td>';
			//echo '<td><a href="./actualiza_hosts.php?pos=' .$i .' ">Actualizar</a></td>';
			echo '<td><a href="./bloquea_red.php?pos=' .$i .' ">Bloquea</a></td>';
			echo '<td><a href="./desbloquea_red.php?pos=' .$i .' ">Desbloquea</a></td>';
			echo "</tr>";
		}
	?>
  </tbody>
</table>
<!-- end --> 

</div>