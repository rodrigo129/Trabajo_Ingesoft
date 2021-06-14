<?php
?>
<script>
    function crear_cuenta(){
        var user = document.getElementById("usuario").value;
        var correo = document.getElementById("correo").value;
        var pass = document.getElementById("pass").value;
        var nombre = document.getElementById("nombre").value;
        var rut = document.getElementById("rut").value;
        var fono = document.getElementById("fono").value;

        var conexion = new XMLHttpRequest();
        var mensaje = [user,correo,pass,nombre,rut,fono];
        /*console.log("user="+user+",password="+password)*/
        conexion.open("POST", "Capa_Control/control_crear_cuenta.php", true);
        conexion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        conexion.send("mensaje="+JSON.stringify(mensaje));
        conexion.onreadystatechange = function (){
            var respuesta = conexion.responseText;
            console.log(respuesta);

            var objeto = JSON.parse(respuesta);

            if (objeto["status"]==false){
                document.getElementById("mensaje").innerHTML=objeto["resultado"];
            }
            else {

                window.location.href = "http://localhost/Trabajo_Ingesoft/index.php"
            }
        }
    }
</script>
