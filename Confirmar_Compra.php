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
        Retiro en Tienda
    </h2>
</div>

<div class="container">
    <!--<form action="Enviar_Datos.php" method="get">-->
        <h2>
            Datos del Cliente
        </h2>
        <div class="d-grid gap-3">
            Nombre: <input type="text" class="form-control" name="name" style="width: 300px">
            RUT: <input type="text" class="form-control" name="name" style="width: 300px">
            Fono Contacto: <input type="text" class="form-control" name="name" style="width: 300px">
            E-Mail: <input type="text" class="form-control" name="name" style="width: 300px">
        </div>
        <h2>
            Datos de Retiro
        </h2>
    <p>¿Quién retirará su compra?</p>
        <div class="d-grid gap-3">
            <div class="btn-group-vertical" role="group" aria-label="Retiro">
                <input type="radio" class="btn-check" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" name="btnradioRetiro" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary"  for="btnradio1">Yo mismo</label>

                <input type="radio" class="btn-check" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" name="btnradioRetiro" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">Alguien más</label>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Nombre: <input type="text" class="form-control" name="name" style="width: 300px">
                    RUT: <input type="text" class="form-control" name="name" style="width: 300px">
                </div>
            </div>


        <h3>
            Información de compra
        </h3>
        <div class="d-grid gap-3">

        </div>
        <h3>
            Forma de Pago
        </h3>
    <div class="btn-group" role="group" aria-label="Pago">
        <input type="radio" class="btn-check" name="btnradioPago" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Tarjeta de Débito</label>

        <input type="radio" class="btn-check" name="btnradioPago" id="btnradio4" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio4">Tarjeta de Crédito</label>
    </div>

            <button type="submit" class="btn btn-primary btn-sm" style="width: 100px">Confirmar</button>

    <!--</form>-->
</div>

</body>