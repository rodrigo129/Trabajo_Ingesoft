

<head>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--<script src="JavaScript/jquery.js"></script> -->
<body>
<?php
require_once "JavaScript/Ir_Productos.php";
require_once "JavaScript/Ir_Carro.php";
require_once "JavaScript/AJAX_Vaciar_Carro.php";
?>
<div class="bg-image"
     style="
     background-image: url('Imagenes/Malkuth Story.png');
     height: 100vh;
  "
>
    <h1 class="text-warning">
        Tienda Online
    </h1>
    <?php
    #echo "plantilla inicio";
    require_once "Plantilla_barra.php";
    ?>
    <div class="text-warning" style='text-align:center'>
        <h2>
            Carro de Compras
        </h2>
    </div>
    <div style='text-align:center'>
        <ol class="list-group">
            <ol class="list-group list-group-horizontal">
                <li class="list-group-item" style="width: 75px" >IDP</li>
                <li class="list-group-item" style="width: 150px" >Marca</li>
                <li class="list-group-item" style="width: 150px">Modelo</li>
                <li class="list-group-item" style="width: 150px">Valor</li>
            </ol>
            <!--Aqui debe consultar la SQL y mostrar los datos como una lista horizontal anidada
                Ejemplo:
                <ol class="list-group list-group-horizontal">
                    <li class="list-group-item" style="width: 75px" >IDP</li>
                    <li class="list-group-item" style="width: 150px" >Wuahei</li>
                    <li class="list-group-item" style="width: 150px">CalculoBook C15</li>
                    <li class="list-group-item" style="width: 150px">$ Muchos dineros</li>
                </ol>
                Fin Ejemplo-->
        </ol>
    </div>
    <div class="container">
        <!--<form action="Enviar_Datos.php" method="get">-->
        <div style='text-align:center'>
            <a class="btn btn-primary" href="#" role="button" onclick="redirect_Produtos()">Volver a Productos</a>
            <a class="btn btn-secondary" href="#" role="button" onclick="redirect_Carro()">Actualizar Carro</a>
            <a class="btn btn-danger" href="#" role="button" onclick="Solicitus_Vaciar()">Vaciar Carro</a>
        </div>

        <div>
            <button type="submit" class="btn btn-success btn-sm">Confirmar Compra</button>
        </div>
    </div>
</div>

</body>