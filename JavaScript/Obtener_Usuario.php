<?php
?>
<script>
    function AJAX_Obtener_Usuario(){
        var conexion = new XMLHttpRequest();
        var mensaje = ["Nada"]
        /*console.log("user="+user+",password="+password)*/
        conexion.open("POST", "Capa_Control/control_llenar_usuario.php", true);
        conexion.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        conexion.send("mensaje="+JSON.stringify(mensaje));
        conexion.onreadystatechange = function (){
            var respuesta = conexion.responseText;

            var objeto = JSON.parse(respuesta);


            if (objeto["status"]==true){
                var resultado = objeto["resultado"];
                var nombre = resultado["nombre"];
                var correo = resultado["correo"];
                var rut = resultado["rut"];
                var usuario = resultado["user"];
                var fono = resultado["fono"];
                document.getElementById("user").innerHTML = "Usuario:   "+usuario;
                document.getElementById("nombre").innerHTML = "Nombre:   "+nombre;
                document.getElementById("rut").innerHTML = "RUT:    "+rut;
                document.getElementById("correo").innerHTML = "Correo Electronico:   "+correo;
                document.getElementById("fono").innerHTML = "Fono:  "+fono;
            }
            else{
            }
        }

    }
</script>
