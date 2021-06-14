<?php
require_once "Plantilla_barra.php"
?>
<body>
<?php
require_once "JavaScript/AJAX_Crear_Cuenta.php"
?>
    <div class="bg-image"
         style="
         background-attachment:fixed ;
         background-image: url('Imagenes/Malkuth Story.png');
         height: 100vh;>
        <div class="container">
            <!--<form action="Enviar_Datos.php" method="get">-->
            <h3 class="text-warning">
                Creacion De Cuenta
            </h3>
            <div class="d-grid gap-3 text-warning justify-content-center">
                Usuario: <input type="text" id="usuario" class="form-control text-primary" name="name" style="width: 300px">
                E-Mail: <input type="text" id="correo" class="form-control text-primary" name="name" style="width: 300px">
                Contraseña: <input type="text" id="pass" class="form-control text-primary" name="name" style="width: 300px">
                Nombre: <input type="text" id="nombre" class="form-control text-primary" name="name" style="width: 300px">
                RUT: <input type="text" id="rut" class="form-control text-primary" name="name" style="width: 300px">
                Fono Contacto: <input type="text" id="fono" class="form-control text-primary" name="name" style="width: 300px">
                <input class="btn btn-primary ju" type="submit" value="Submit" onclick="crear_cuenta()">
                <h6 class="text-danger" id ="mensaje">

            </div>

        </div>
    </div>
</body>