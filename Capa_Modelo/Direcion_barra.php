<?php
class Direccionar{
    public function hacia ($vista_pedida){
        $plantilla = "Capa_Vistas\Plantilla_Inicio.php";
        if($vista_pedida == "Inicio" ||
            $vista_pedida == "Productos" ||
            $vista_pedida == "Carro" ||
            $vista_pedida == "Confirmar_Compra" ||
            $vista_pedida == "Ficha" ||
            $vista_pedida == "Crear_Cuenta" ||
            $vista_pedida == "Carro" ||
            $vista_pedida == "Usuario" ||
            $vista_pedida == "Iniciar_sesion"){
            $plantilla = "Capa_Vistas\Plantilla_".$vista_pedida.".php";
        }
        return $plantilla;
    }
}