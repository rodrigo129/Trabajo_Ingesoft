<?php
echo "iniciar sesion";
require_once "Plantilla_barra.php"

?>
<body>
    <?php
    require_once "JavaScript/AJAX_Iniciar_session.php";
    echo "debug <br>";
    echo count($_POST);
    echo implode(array_keys($_POST));
    echo $_POST["Usuario"];
    echo "<br> fin <br>";

    ?>
    <script>
        function algo(){
            console.log("coso\n")
        }
    </script>
    <div class=".container p-5 "  >
        <!--<form action="Enviar_Datos.php" method="get">-->
        <h3>
            Iniciar Sesion
        </h3>
        <div class="d-grid gap-3" style="margin-right: 650px">
            E-Mail: <input type="text" class="form-control" id="user" name="name" style="width: 300px">
            Contraseña: <input type="password" class="form-control" id="password" name="name" style="width: 300px">
            <nav class="navbar navbar bg-dark justify-content-center"style="width: 300px">
                <ul class="nav">
                    <li class="nav-item">
                        <input class="btn btn-primary" type="submit" value="Iniciar Sesion" onclick="iniciar_sesion()">
                    </li>
                    <li class="nav-item">
                        <input class="btn btn-primary" type="submit" value="Crear Cuenta" onclick="algo()">
                    </li>
                </ul>
            </nav>
        </div>


    </div>


</body>