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
        <div>
            <h1 class="text-warning">
                Tienda Online
            </h1>
            <?php
                #echo "plantilla inicio";
                require_once "Plantilla_barra.php"
            ?>
        </div>
        <div style='text-align:center'>
            <h2 class="text-warning">
                Ficha Técnica
            </h2>
        </div>
        <div>
            <div style='text-align:center'>
                <ol class="list-group">
                    <ol class="list-group list-group-horizontal">
                        <li class="list-group-item" style="width: 75px" >IDP</li>
                        <li class="list-group-item" style="width: 250px" >Descripción</li>
                        <li class="list-group-item" style="width: 150px">Características</li>
                        <li class="list-group-item" style="width: 150px">Valor</li>
                        <li class="list-group-item" style="width: 150px">Garantía (meses)</li>
                    </ol>
                <!--Aqui debe consultar la SQL y mostrar los datos como una lista horizontal anidada
                    Ejemplo:
                    <ol class="list-group list-group-horizontal">
                        <li class="list-group-item" style="width: 75px" >IDP</li>
                        <li class="list-group-item" style="width: 250px" >Ejemplo de descripción Larga para un producto, inserte chamullo sobre ergonomía y diseño aquí</li>
                        <li class="list-group-item" style="width: 150px">Características asdfasdfsdfg asdfasdfsdfg asdfasdfsdfg asdfasdfsdfg asdfasdfsdfg </li>
                        <li class="list-group-item" style="width: 150px">$ Muchos dineros</li>
                        <li class="list-group-item" style="width: 150px">pongamosle que tiene 12 meses de garantía</li>
                    </ol>
                    Fin Ejemplo-->
                </ol>
            </div>
        </div>
        <div style='text-align:center'>
            <a class="btn btn-primary" href="#" role="button">Volver a Productos</a>
            <a class="btn btn-primary" href="#" role="button">Añadir al Carro</a>
        </div>
    </div>
</body>