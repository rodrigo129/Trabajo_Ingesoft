<?php
#echo "corriendo en php";
$cookie_name="permisos";
$cookie_value=0;
setcookie("permisos", 0, time() + (86400 / 24), "/");
setcookie("test", 2, time() + (86400 / 24), "/");
require_once "Capa_Control/control_barras.php";

?>

<head>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--<script src="JavaScript/jquery.js"></script> -->
<body>
<h1>
    Tienda Online
</h1>
<nav class="navbar navbar-expand-xl bg-dark">
    <ul class="navbar">
        <li class="nav-item">
            <a class="nav-link" href="#">productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Iniciar sesion</a>
        </li>
    </ul>

</nav>

<div style='text-align:center'>
    <h2>
        Carro de Compras
    </h2>
</div>
    <!--Aqui debería mostrar el carro, acceder a la BD-->
<div class="container">
    <!--<form action="Enviar_Datos.php" method="get">-->
    <div style='text-align:center'>
    <button type="button" class="btn btn-primary btn">Agregar Productos</button>
    <button type="button" class="btn btn-primary btn">Actualizar Carro</button>
    <button type="button" class="btn btn-primary btn-danger">Vaciar Carro</button>
    </div>

    <div>
        <button type="submit" class="btn btn-success btn-sm">Confirmar Compra</button>
    </div>
</div>

</body>