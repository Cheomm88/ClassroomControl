<?php
	include('Net/SFTP.php');
	include_once("config.php");

	$hostsFile = file_get_contents('hosts');

	$pos = $_GET["pos"]; 
	$nombreAlumno = $alumnos[$pos][0];
	$username = $alumnos[$pos][1];
	$password = $alumnos[$pos][2];
	$server = $alumnos[$pos][3];

	$sftp = new Net_SFTP($server);
	if (!$sftp->login($username, $password)) {
	    exit('Login Failed');
	}

//	echo $sftp->pwd() . "\r\n";
	$sftp->put('/etc/hosts', $hostsFile);
//	print_r($sftp->nlist());

	echo "Se ha actualizado el bloqueo de webs al alumno: "  . $nombreAlumno . "<br>";
	echo "<a href='index.php'>Volver</a>";
?>


