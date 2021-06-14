<?php
if (session_status() != 2){
    session_start();
}
$mensaje = json_decode($_POST["mensaje"]);
$Instruccion = $mensaje["0"];
if ($Instruccion == "Vaciar"){
    #vaciar



}
else{
    if ($Instruccion == "Añadir"){
        #$añadir



    }
    else{
        #comprar





    }




}



?>

