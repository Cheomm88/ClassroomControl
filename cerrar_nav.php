<?php

    include('Net/SSH2.php');
    include_once("config.php");
    
    $pos = $_GET["pos"];
  
    $nombreAlumno = $alumnos[$pos][0];
    $username = $alumnos[$pos][1];
    $password = $alumnos[$pos][2];
    $server = $alumnos[$pos][3];

    $command = "echo " . $password . "  | sudo -S pkill chromium | sudo -S pkill firefox";

    $ssh = new Net_SSH2($server);
    if (!$ssh->login($username, $password)) {
        exit('Login Failed');
    }
   echo "Se procede a cerrar los navegadores de " .   $nombreAlumno;

   echo $ssh->exec($command);

echo "<br> <a href='index.php' >Volver</a>";

?>