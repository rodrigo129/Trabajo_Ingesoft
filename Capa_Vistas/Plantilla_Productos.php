

<head>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--<script src="JavaScript/jquery.js"></script> -->
<div class="bg-image"
     style="background-image: url('Imagenes/Malkuth Story.png');height: 100vh;">
    <h1 class=" text-warning">
        Tienda Online
    </h1>
    <?php
    #echo "plantilla inicio";
    require_once "Plantilla_barra.php"
    ?>
    <h2 class=" text-warning" style="text-align: center">
        Productos
    </h2>
    <body>
    <div style='text-align:center'>
        <ol class="list-group">
            <ol class="list-group list-group-horizontal">
                <li class="list-group-item" style="width: 75px" >IDP</li>
                <li class="list-group-item" style="width: 150px" >Categoría</li>
                <li class="list-group-item" style="width: 150px">Marca</li>
                <li class="list-group-item" style="width: 150px">Modelo</li>
                <li class="list-group-item" style="width: 150px">Valor</li>
            </ol>
            <!--Aqui debe consultar la SQL y mostrar los datos como una lista horizontal anidada
                Ejemplo:
            <ol class="list-group list-group-horizontal">
                <li class="list-group-item list-group-item-action" style="width: 75px" onclick="RevisarFicha('{IDP}')" >IDP</li>
                <li class="list-group-item list-group-item-action" style="width: 150px" onclick="RevisarFicha('{IDP}')" >Categoría</li>
                <li class="list-group-item list-group-item-action" style="width: 150px" onclick="RevisarFicha('{IDP}')" >Marca</li>
                <li class="list-group-item list-group-item-action" style="width: 150px" onclick="RevisarFicha('{IDP}')" >Modelo</li>
                <li class="list-group-item list-group-item-action" style="width: 150px" onclick="RevisarFicha('{IDP}')" >Valor</li>
            </ol>
                Fin Ejemplo-->
        </ol>
    </div>


    </body>
</div>
