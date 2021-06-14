<?php
#window.location.href = "http://localhost/Trabajo_Ingesoft/index.php"
?>
<script>
    function cerrar_sesion(){
        var conexion = new XMLHttpRequest();
        conexion.open("POST", "Capa_Control/control_cerrar_sesion.php", true);
        conexion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        conexion.send("mensaje="+JSON.stringify([1,2]));
        conexion.onreadystatechange = function (){
            var respuesta = conexion.responseText;
            window.location.href = "http://localhost/Trabajo_Ingesoft/index.php";

        }
    }
</script>
