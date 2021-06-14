<?php
?>
<script>
    function Solicitus_Vaciar(){
        var conexion = new XMLHttpRequest();

        var mensaje = ["Vaciar"]
        /*console.log("user="+user+",password="+password)*/
        conexion.open("POST", "Capa_Control/control_Carro.php", true);
        conexion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        conexion.send("mensaje="+JSON.stringify(mensaje));
        conexion.onreadystatechange = function (){
            window.location.href = "http://localhost/Trabajo_Ingesoft/index.php?selecion=Carro";
        }
    }
</script>
