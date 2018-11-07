<?php

    include('Net/SSH2.php');
    include_once("config.php");
    
    $pos = $_GET["pos"];
  
    $nombreAlumno = $alumnos[$pos][0];
    $username = $alumnos[$pos][1];
    $password = $alumnos[$pos][2];
    $server = $alumnos[$pos][3];

    $command = "echo " . $password . "  | sudo -S iptables -A OUTPUT -p all -m owner --uid-owner alumnado -j DROP";

    $ssh = new Net_SSH2($server);
    if (!$ssh->login($username, $password)) {
        exit('Login Failed');
    }
   echo "Se procede a bloquear Internet a  " .   $nombreAlumno ."<br> NOTA: Si ".$nombreAlumno. " reinicia el ordenador recuperará el acceso a Internet. <br> Solo ejecutar el bloqueo una vez, sino habría que lanzar varias veces el desbloqueo para que funcione.";

   echo "<br> Log de ejecución <br>";
   echo $ssh->exec($command);

   echo "<br> <a href='index.php' >Volver</a>";

?>