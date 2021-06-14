<?php
if (session_status() != 2){
    session_start();
}
$nada=$_POST;
$ID_usuario =$_SESSION["ID"];


require_once "Conexion_base_de_datos.php";
$query='SELECT * FROM tienda_online.usuarios as Users
          WHERE Users.'.'"ID"='.$ID_usuario;
$paquete=["peticion" => $query];
$respuesta = realizar_query($paquete);
$respuesta_objeto = json_decode($respuesta);
$respuesta_lista = (array)$respuesta_objeto;
$array_resultado = (array)$respuesta_lista["resultado"]["0"];
echo json_encode(['status'=>true,
    'resultado'=>$array_resultado]);
?>




