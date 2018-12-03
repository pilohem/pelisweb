## PELISWEB
Este proyecto es creado completamente con [Laravel](https://laravel.com/), con el fin de mostrar las diferentes funcionalidades y capacidades de este framework.

## Instrucciones

1. Para poder montar el proyecto, se recomienda hacerlo, primeramente creando un servidor virtual ya sea con:
* [XAMPP](https://www.apachefriends.org/index.html)
* [MAMP](https://www.mamp.info/en/)

O bien, montando un servidor virtual (en el caso de Ubuntu), siguiendo las intrucciones en [Digital Ocean](https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-16-04).

2. Descargar la base de datos (pelisweb.sql) que se encuentra dentro de la carpeta SQLDatabase.
    * Importar este archivo a su base de datos. [Más info](https://mediatemple.net/community/products/dv/204403864/export-and-import-mysql-databases)

**Nota:** El primer usuario de la base de datos es de tipo "admin", por lo que este usuario es aquel capaz de agregar y editar las peliculas. Los de más usuarios son de tipo "default", y sólo pueden agregar comentarios sobre las películas.
Si se quiere cambiar el tipo de usuario, se tiene que hacer editándolo desde la base de datos.

3. Modificar el archivo .env.example en las siguientes líneas, agregando el nombre de la base de datos, usuario y contraseña:
    ```
    DB_DATABASE=homestead
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    ```
    * Cambiar el nombre de .env.example a .env
