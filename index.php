<?php
#echo "corriendo en php";
$cookie_name="permisos";
$cookie_value=0;
setcookie("permisos", 0, time() + (86400 / 24), "/");
#setcookie("test", 2, time() + (86400 / 24), "/");
#$_GET["selecion"]="Inicio";
require_once "Capa_Control/control_barras.php";
require_once "Capa_Control/init.php";
$control_barra = new Controlador_barras();
$control_barra -> acceder();






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
<!--
    <h1>
        este es un header
    </h1>
-->
<div>
    <h2>
        <!--debug<br> -->
        <?php
        #echo "tamaño de de post <br>";
        #echo count($_POST);
        #echo "<br>contenido _POST<br>";
        #echo implode($_POST);
        #echo "<br>";
        #echo "<br>#######"
        ?>


    </h2>
</div>


</body>