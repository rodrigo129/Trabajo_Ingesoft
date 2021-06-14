<?php
function crear_elemento (){
require_once "Capa_Control/Conexion_base_de_datos.php";
$query="SELECT * FROM tienda_online.inventario";
$paquete=["peticion" => $query];
$respuesta = realizar_query($paquete);
#echo gettype($respuesta);SELECT * FROM tienda_online.inventario
#string
$respuesta_objeto = json_decode($respuesta);
$respuesta_lista = (array)$respuesta_objeto;
$array_resultado = (array)$respuesta_lista["resultado"]["0"];

$array_respuestas = $array_resultado;


$salida="";
$contador = 0;
$id_elemento = "producto_";
foreach (array_keys($respuesta_lista["resultado"]) as $llave){
    $array_resultado = (array)$respuesta_lista["resultado"][$llave];
    $array_respuestas = $array_resultado;
    $base="
    <ol class='list-group list-group-horizontal'>
        <li class='list-group-item list-group-item-action' style='width: 75px' id='".$id_elemento.$contador."' onclick='RevisarFicha('{IDP}')' >".$array_respuestas["idp"]."</li>
        <li class='list-group-item list-group-item-action' style='width: 150px' onclick='RevisarFicha('{IDP}')' >".$array_respuestas["categoria"]."</li>
        <li class='list-group-item list-group-item-action' style='width: 150px' onclick='RevisarFicha('{IDP}')' >".$array_respuestas["marca"]."</li>
        <li class='list-group-item list-group-item-action' style='width: 150px' onclick='RevisarFicha('{IDP}')' >".$array_respuestas["modelo"]."</li>
        <li class='list-group-item list-group-item-action' style='width: 150px' onclick='RevisarFicha('{IDP}')' >".$array_respuestas["valor"]."</li>
    </ol>";
    $contador = $contador+1;
    $salida=$salida.$base;
}









echo $salida;



}









?>
