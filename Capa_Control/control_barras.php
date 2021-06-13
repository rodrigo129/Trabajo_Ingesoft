<?php
class Controlador_barras{

    public function acceder(){
        include "Capa_Modelo\Direcion_barra.php";
        if (count($_GET)==1){
            $link = $_GET["selecion"];


        }
        else{
            $link = "Inicio";
        }
        $respuesta = Direccionar::hacia($link);
        include $respuesta;
    }

}
?>