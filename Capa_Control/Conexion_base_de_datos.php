<?php
#php encargado de realizar la conexion con postgres
#la conexion recive una query valida la que debe ser
#entregada por el php intermediario
#su entrada esta definida por un array ["peticion"="query"]
#y su salida por el arrat ["status"=bool,"resultado"=json(resultado)"]
class conexion_db{

    function realizar_query($solicitud){
        $db = "trabajo_ingesoft";
        $port = "5432";
        $usuario = "php_master";
        $password = "php_password";
        $host = "25.58.86.89";
        $conexion = pg_connect("host=$host port=$port dbname=$db user=$usuario password=$password");
        $respuesta = pg_query($conexion,$solicitud["peticion"]);
        $objeto = pg_fetch_all($respuesta);

        $retorno = [
            "status" => true ,
            "resultado" => json_encode($objeto)];
        echo json_encode($retorno);


    }


}