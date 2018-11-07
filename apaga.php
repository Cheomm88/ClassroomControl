<?php
  $nombre = $_GET["ip"];

    include('Net/SSH2.php');
    include_once("config.php");
    $pos = $_GET["pos"];
  
    $nombreAlumno = $alumnos[$pos][0];
    $username = $alumnos[$pos][1];
    $password = $alumnos[$pos][2];
    $server = $alumnos[$pos][3];

    $command = "echo " . $password . " | sudo -S poweroff";

    $ssh = new Net_SSH2($server);
    if (!$ssh->login($username, $password)) {
        exit('Login Failed');
    }


   echo "Se procede a apagar el equipo de " . $nombreAlumno;

   echo $ssh->exec($command);

   echo "<br> <a href='index.php' >Volver</a>";

?>