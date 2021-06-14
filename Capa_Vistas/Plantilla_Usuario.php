<?php
if (session_status() != 2){
    session_start();
}
?>


<head>
    <?php
    require_once "JavaScript/Pedir_Cerrar_Session.php";
    require_once "JavaScript/Obtener_Usuario.php"
    ?>
    <script>
        AJAX_Obtener_Usuario();
    </script>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <style>
        .parallax {
            /* The image used */
            background-image: url("Imagenes/Malkuth Story.png");

            /* Set a specific height */

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            height: 200vh;
        }
    </style>
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--<script src="JavaScript/jquery.js"></script> -->
<body>

<div class="parallax">
    <h1 class="text-warning">
        Tienda Online
    </h1>
    <?php
    #echo "plantilla inicio";
    require_once "Plantilla_barra.php"
    ?>
    <h2 class=" text-warning" style="text-align: center">
        Tu perfil
    </h2>

    <div class="container">
        <!--<form action="Enviar_Datos.php" method="get">-->
        <h2 class=" text-warning">
            Datos del Cliente
        </h2>
        <div class="d-grid gap-3">
            <p class="text-warning" id="user">Usuario: <!--Aqui la consulta--></p>
            <p class=" text-warning" id="nombre">Nombre: <!--Aqui la consulta--></p>
            <p class=" text-warning" id="rut">RUT: <!--Aqui la consulta--></p>
            <p class="text-warning" id="correo">Correo Electronico: <!--Aqui la consulta--></p>
            <p class="text-warning" id="fono">Fono: <!--Aqui la consulta--></p>
        </div>
        <input class="btn btn-danger" type="submit" value="Cerrar Session" onclick="cerrar_sesion()" href="Capa_Control/control_cerrar_session.php"">
    </div>
</div>

</body>
