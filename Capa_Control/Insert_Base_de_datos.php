<?php
#php encargado de realizar la conexion con postgres
#la conexion recive una query valida la que debe ser
#entregada por el php intermediario
#su entrada esta definida por un array ["peticion"="query","tabla"="esquema","datos",]
#y su salida es un array ["status"=bool,"resultado"=json(resultado)"]
function insertar_a_tabla($solicitud){
    $db = "trabajo_ingesoft";
    $port = "5432";
    $usuario = "php_master";
    $password = "php_password";
    $host = "25.58.86.89";
    $conexion = pg_connect("host=$host port=$port dbname=$db user=$usuario password=$password");

    $respuesta = pg_query($conexion,$solicitud["peticion"]);



    #$i=0;
    #$objeto = [];

    #while ($row = pg_fetch_row($respuesta)) {
    #    $objeto[$i] = $row;
    #    $i = $i +1;
    #}
    #return $objeto;



}
?>