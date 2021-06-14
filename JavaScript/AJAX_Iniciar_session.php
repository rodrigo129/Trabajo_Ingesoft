<?php
?>
<script>
    function iniciar_sesion(){
        var conexion = new XMLHttpRequest();
        var user = document.getElementById("user").value
        var password = document.getElementById("password").value
        var mensaje = [user,password]
        /*console.log("user="+user+",password="+password)*/
        conexion.open("POST", "Capa_Control/control_inicio_sesion.php", true);
        conexion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        conexion.send("mensaje="+JSON.stringify(mensaje));
        conexion.onreadystatechange = function (){
            var respuesta = conexion.responseText;
            gloval_test = respuesta;

            var objeto = JSON.parse(respuesta);

            if (objeto["status"]==false){
                document.getElementById("mensaje").innerHTML=objeto["resultado"];
            }
            else {
                console.log("inicio correcto");
            }
            /*document.cookie = "permisos="+String(respuesta)+"; max-age=60";
            console.log(document.cookie)
            console.log(respuesta)*/
        }
    }
</script>
