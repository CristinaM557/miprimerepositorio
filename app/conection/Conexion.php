<?php

//variables globlales

    $usuario = 'root';
    $clave = 'localhost';
    $bd = 'bd_academico';
   //$usuario = 'id15020013_academico';
    //$clave = 'cO7l_K]BJbqRu85p';
    //$bd = 'id15020013_wordpress';
    //instanciamos la conexion
try {
    $conexion= new PDO('mysql:host=localhost;dbname=' . $bd, $usuario, $clave);
    echo "conexion establecida exitosamente";
    
} catch (Exception $ex) {
    echo 'error de conexion' . $ex->getMessage();
}
