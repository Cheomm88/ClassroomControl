# ClassroomControl
Este repositorio contiene una aplicación en PHP que permite el control de ordenadores dentro de una red local/aula.

# Requisitos
Esta aplicación funciona como una aplicación WEB por lo que es necesario tener instalado Apache o un servidor web, por otro lado los equipos que serán controlados deben tener acceso por SSH habilitado.

# Configuración

Para configurar la aplicación es necesario modificar el fichero config.php en el cual encontraremos un usuario y password que serán los usados para conectar a los equipos del alumnado, este usuario deberá tener permisos de root.

Por otro lado existe un array denominado "$alumnos" en el podemos incorporar a todos los alumnos/ordenadores del aula que hagan uso de Ubuntu.

Habrá que modificar los datos para que correspondan con los adecuados, en caso de tener diferentes contraseñas y usuarios en los equipos se puede modificar en este array.




# Agradecimientos
Esta aplicación es posible gracias a:

- http://phpseclib.sourceforge.net/
- http://php.net/
- https://getbootstrap.com/
