<?php
#php encargado de realizar la conexion con postgres
#la conexion recive una query valida la que debe ser
#entregada por el php intermediario
#su entrada esta definida por un array ["peticion"="query"]
#y su salida es un array ["status"=bool,"resultado"=json(resultado)"]
function realizar_query($solicitud){
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







    $objeto = pg_fetch_all($respuesta, $result_type = PGSQL_ASSOC);
    $status = true;
    if ($objeto == false){
        $status = false;
    }
    $retorno = [
        "status" => $status ,
        "resultado" => $objeto];
    #"resultado" => json_encode($objeto)];
    return json_encode($retorno);
    #echo json_encode($retorno);
    #return json_encode($retorno);


}
