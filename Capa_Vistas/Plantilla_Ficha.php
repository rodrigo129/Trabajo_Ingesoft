<?php
#echo "corriendo en php";
$cookie_name="permisos";
$cookie_value=0;
setcookie("permisos", 0, time() + (86400 / 24), "/");
setcookie("test", 2, time() + (86400 / 24), "/");
require_once "../Capa_Control/control_barras.php";

function RevisarFicha(){
    echo "funciona";
}

?>

<head>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--<script src="JavaScript/jquery.js"></script> -->
<div>
    <h1>
        Tienda Online
    </h1>
</div>
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
        Ficha Técnica
    </h2>
</div>
<body>
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
<div style='text-align:center'>
    <a class="btn btn-primary" href="#" role="button">Volver a Productos</a>
    <a class="btn btn-primary" href="#" role="button">Añadir al Carro</a>
</div>


</body>