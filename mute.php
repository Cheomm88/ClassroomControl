<?php

// Para el correcto funcionamiento del silenciador es necesario que exista el fichero mute.sh en el equipo que se accede de manera remota.
  $nombre = $_GET["ip"];

    include('Net/SSH2.php');
    include_once("config.php");
    $pos = $_GET["pos"];
  
    $nombreAlumno = $alumnos[$pos][0];
    $username = $alumnos[$pos][1];
    $password = $alumnos[$pos][2];
    $server = $alumnos[$pos][3];

/*

#mutear sonido
#amixer set Master mute

*/

    $command = 'echo ' .$password.' | sudo -S ./mute.sh';
    $ssh = new Net_SSH2($server);
    if (!$ssh->login($username, $password)) {
        exit('Login Failed');
    }


   echo "Se procede a silenciar el sonido en el equipo de " . $nombreAlumno  . "<br>";

   echo $ssh->exec($command);

   echo "<br> <a href='index.php' >Volver</a>";


/*

#!/bin/bash
#mute.sh
CURRENT_STATE=`amixer get Master | egrep 'Playback.*?\[o' | egrep -o '\[o.+\]'`

if [[ $CURRENT_STATE == '[on]' ]]; then
    amixer set Master mute
else
    amixer set Master unmute
    amixer set Front unmute
    amixer set Headphone unmute
fi



*/

?>
