<head>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <style>
        .parallax {
            /* The image used */
            background-image: url("../Imagenes/Malkuth Story.png");

            /* Set a specific height */
            height=100%;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
        Bienvenido a nuestra Tienda Online
    </h2>

    <div class="container">
        <!--<form action="Enviar_Datos.php" method="get">-->
        <h2 class=" text-warning">
            Servicio al Cliente
        </h2>
        <div class="d-grid gap-3">
            <p class=" text-warning">Términos y Condiciones:</p>
            <p class=" text-warning">[Inserte Vínculo Aquí]</p>
            <p class=" text-warning">Privacidad y seguridad:</p>
            <p class=" text-warning">[De momento no Disponible]:</p>
            <p class=" text-warning">Términos y Condiciones Servicio de Garantía y Danio:</p>
            <p class=" text-warning">[Inserte Manifiesto Aquí]:</p>
            <p class="text-warning">Fono Contacto:</p>
            <p class="text-warning">[Fono Contacto Sede]:</p>
            <p class="text-warning">E-Mail:</p>
            <p class="text-warning">[E-Mail@empresa.cl]:</p>
            <p class="text-warning">Representante Legal:</p>
            <p class="text-warning">[De momento no Disponible]:</p>
            <p class="text-warning">Bases y Promociones:</p>
            <p class="text-warning">[Inserte Vínculo Aquí]:</p>
            <p class=" text-warning">Términos y Condiciones Servicio de Garantía Extendida:</p>
            <p class=" text-warning">[Inserte Manifiesto Aquí]:</p>
        </div>
            <!--</form>-->
    </div>
</div>

</body>