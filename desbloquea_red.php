<?php

    include('Net/SSH2.php');
    include_once("config.php");
    
    $pos = $_GET["pos"];
  
    $nombreAlumno = $alumnos[$pos][0];
    $username = $alumnos[$pos][1];
    $password = $alumnos[$pos][2];
    $server = $alumnos[$pos][3];

     //TODO: 
    // alumnado es la cuenta de los alumnos (sin privilegios), sustituir por una variable
    $command = "echo " . $password . "  | sudo -S iptables -D OUTPUT -p all -m owner --uid-owner alumnado -j DROP";

    $ssh = new Net_SSH2($server);
    if (!$ssh->login($username, $password)) {
        exit('Login Failed');
    }
   echo "Se procede a desbloquear Internet del ordenador de " .   $nombreAlumno;

   echo $ssh->exec($command);

echo "<br> <a href='index.php' >Volver</a>";

?>
