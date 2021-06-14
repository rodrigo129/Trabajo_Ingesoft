<?php
if (session_status() != 2){
    session_start();
}
require_once "Conexion_base_de_datos.php";
require_once "Insert_Base_de_datos.php";
$mensaje = json_decode($_POST["mensaje"]);
$Usuario_crear = $mensaje["0"];
$correo_crear = $mensaje["1"];
$pass_crear = $mensaje["2"];
$nombre_crear = $mensaje["3"];
$rut_crear = $mensaje["4"];
$fono_crear = $mensaje["5"];
#query de si el usuario exsiste
$query="SELECT * FROM tienda_online.usuarios as Users
          WHERE Users.user='$Usuario_crear'";
$paquete=["peticion" => $query];
$respuesta = realizar_query($paquete);
$respuesta_objeto = json_decode($respuesta);
$respuesta_lista = (array)$respuesta_objeto;
$status = $respuesta_lista["status"];
if ($status){
    echo json_encode(["status"=>false,
        "resultado"=>"El usuario ya esta en uso"]);
    #existe, entregar error
}
else{
    $query2 = 'INSERT INTO tienda_online.usuarios('.'"user"'.', rut, '.'"password"'.", nombre, correo, fono)".
        " VALUES ('".$Usuario_crear."', '".$rut_crear."', '".$pass_crear."', '".$nombre_crear."', '".$correo_crear."',  '".$rut_crear."') ";
    $paquete2=["peticion" => $query2];
    $respuesta2 = insertar_a_tabla($paquete2);
    $_SESSION["Usuario"]=$Usuario_crear;

    $query3="SELECT * FROM tienda_online.usuarios as Users
          WHERE Users.user='$Usuario_crear'";
    $paquete3=["peticion" => $query3];
    $respuesta3 = realizar_query($paquete3);
    $respuesta_objeto2 = json_decode($respuesta3);
    $respuesta_lista2 = (array)$respuesta_objeto2;
    $array_resultado = (array)$respuesta_lista2["resultado"]["0"];
    $ID_respuesta = strval($array_resultado["ID"]);
    $_SESSION["ID"] = $ID_respuesta;
    session_write_close();
    echo json_encode(['status'=>true,
        'resultado'=>$ID_respuesta]);






    #no existe, crear y entregar positivo
}





?>