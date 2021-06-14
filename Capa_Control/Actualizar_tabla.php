<?php
function update_tabla($solicitud)
{
    $db = "trabajo_ingesoft";
    $port = "5432";
    $usuario = "php_master";
    $password = "php_password";
    $host = "25.58.86.89";
    $conexion = pg_connect("host=$host port=$port dbname=$db user=$usuario password=$password");

    $respuesta = pg_query($conexion, $solicitud["peticion"]);
}

?>