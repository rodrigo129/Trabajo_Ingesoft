<?php

function revisar_usuario(){
    if ($_POST["Usuario"]==null){
        echo "Iniciar sesion";
    }
    else{
        echo $_POST["Usuario"];
    }
}
function referencia_usuario(){
    if ($_POST["Usuario"]==null){
        echo "index.php?selecion=Iniciar_sesion";
    }
    else{
        echo "index.php?selecion=Usuario";
    }
}

?>
<nav class="navbar navbar-expand-xl bg-dark">
    <ul class="navbar">
        <li class="nav-item">
            <a class="nav-link" href="index.php?selecion=Inicio"">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?selecion=Productos"">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">link 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php?selecion=Iniciar_sesion"><?php revisar_usuario() ?></a>
        </li>
    </ul>

</nav>
