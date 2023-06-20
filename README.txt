¡¡¡OJO!!! para que funcione en el navegador hay que cambiar la configuración de Nginx o del programa que se está utilizando para que lea el archivo index.php

En este ejercicio se utilizó el siguiente código:


location /AccesoBBDD {
        rewrite ^(.*)$ /AccesoBBDD/index.php?$1 last;
    }
