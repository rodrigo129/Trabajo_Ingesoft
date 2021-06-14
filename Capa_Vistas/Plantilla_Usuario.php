<head>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <style>
        .parallax {
            /* The image used */
            background-image: url("../Imagenes/Malkuth Story.png");

            /* Set a specific height */

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            height: 200vh;
        }
    </style>
    <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
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
            <p class=" text-warning">RUT: <!--Aqui la consulta--></p>
            <p class=" text-warning">Nombre: <!--Aqui la consulta--></p>
            <p class="text-warning">Apellido: <!--Aqui la consulta--></p>
            <p class="text-warning">Titulo: <!--Aqui la consulta--></p>
            <p class="text-warning">Permisos: <!--Aqui la consulta--></p>
        </div>
    </div>
</div>

</body>