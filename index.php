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
        este es un header
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


</body>