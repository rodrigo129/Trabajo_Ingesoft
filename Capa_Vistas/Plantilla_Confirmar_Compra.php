

<head>
    <meta charset="UTF-8">
    <title>Trabajo Ingenieria de software</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</head>
<!--<script src="JavaScript/jquery.js"></script> -->
<body>

<div class="bg-image"
     style="
     background-image: url('Imagenes/Malkuth Story.png');
     background-attachment:fixed;
     height: 100vh;">
    <h1 class=" text-warning">
        Tienda Online
    </h1>
    <?php
    #echo "plantilla inicio";
    require_once "Plantilla_barra.php"
    ?>
<h2 class=" text-warning" style="text-align: center">
    Retiro en Tienda
</h2>

<div class="container">
    <!--<form action="Enviar_Datos.php" method="get">-->
    <h2 class=" text-warning">
        Datos del Cliente
    </h2>
    <div class="d-grid gap-3">
        <p class=" text-warning">Nombre: <input type="text" class="form-control" name="name" style="width: 300px"></p>
        <p class=" text-warning">RUT: <input type="text" class="form-control" name="name" style="width: 300px"></p>
        <p class="text-warning">Fono Contacto: <input type="text" class="form-control" name="name" style="width: 300px"></p>
        <p class="text-warning">E-Mail: <input type="text" class="form-control" name="name" style="width: 300px"></p>
    </div>
    <h2 class="text-warning">
        Datos de Retiro
    </h2>
    <p class="text-warning">¿Quién retirará su compra?</p>
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


        <h3 class="text-warning">
            Información de compra

        </h3>
        <div style='text-align:center'>
            <ol class="list-group">
                <ol class="list-group list-group-horizontal">
                    <li class="list-group-item" style="width: 90px" >Cantidad</li>
                    <li class="list-group-item" style="width: 75px" >IDP</li>
                    <li class="list-group-item" style="width: 150px">Valor Unitario</li>
                    <li class="list-group-item" style="width: 150px">SubTotal</li>
                </ol>
                <!--Aqui debe consultar la SQL y mostrar los datos como una lista horizontal anidada
                    Ejemplo:
                <ol class="list-group list-group-horizontal">
                    <li class="list-group-item" style="width: 75px" >10</li>
                    <li class="list-group-item" style="width: 75px" >IDP</li>
                    <li class="list-group-item" style="width: 150px">$Muchos Dineros</li>
                    <li class="list-group-item" style="width: 150px">$Dineros Acumulados</li>
                </ol>
                    Fin Ejemplo-->
            </ol>
        </div>
        <h3 class="text-warning">
            Forma de Pago
        </h3>
        <div class="btn-group" role="group" aria-label="Pago">
            <input type="radio" class="btn-check" name="btnradioPago" id="btnradio3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio3">Tarjeta de Débito</label>

            <input type="radio" class="btn-check" name="btnradioPago" id="btnradio4" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio4">Tarjeta de Crédito</label>
        </div>
        <div style='text-align:center'>
            <a class="btn btn-primary" href="#" role="button">Subir</a>
            <a class="btn btn-primary" href="#" role="button">Volver al Carro</a>
            <input class="btn btn-primary" type="submit" value="Confirmar Compra">
        </div>

        <!--</form>-->
    </div>
</div>

</body>
