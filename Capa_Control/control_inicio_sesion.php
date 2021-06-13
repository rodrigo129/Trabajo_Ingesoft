<?php
include "Conexion_base_de_datos.php";
$mensaje = json_decode($_POST["mensaje"]);
$user = $mensaje["0"];
$password = $mensaje["1"];
setcookie('permisos','',time()-100);



$paquete=["peticion" => "SELECT * FROM tienda_online.usuarios"];
$respuesta = conexion_db::realizar_query($paquete);




echo $respuesta
?>
