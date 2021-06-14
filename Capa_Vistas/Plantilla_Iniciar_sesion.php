<?php
#echo "iniciar sesion";
require_once "Plantilla_barra.php"

?>
<body>
    <?php
    require_once "JavaScript/AJAX_Iniciar_session.php";
    require_once "JavaScript/Redireccionar_Crear_Cuenta.php"
    ?>
    <div class="bg-image"
         style="
     background-attachment:fixed ;
     background-image: url('Imagenes/Malkuth Story.png');
     height: 100vh;  >

        <!--<form action="Enviar_Datos.php" method="get">
        <h3 class="text-warning">
            Iniciar Sesion
        </h3>
        <div class="d-grid gap-3 text-warning justify-content-center" style="margin-right: 650px">
            E-Mail: <input type="text" class="text-primary" id="user" name="name" style="width: 300px">
            Contraseña: <input type="password" class="text-primary" id="password" name="name" style="width: 300px">
            <nav class="navbar navbar bg-dark justify-content-center"style="width: 300px">
                <ul class="nav">
                    <li class="nav-item">
                        <input class="btn btn-primary" type="submit" value="Iniciar Sesion" onclick="iniciar_sesion()">
                    </li>
                    <li class="nav-item">
                        <input class="btn btn-primary" type="submit" value="Crear Cuenta" onclick="ir_a_Crear_Cuenta()">
                    </li>
                </ul>
            </nav>
            <h6 class="text-danger" id ="mensaje">
            </h6>
        </div>

    </div>


</body>