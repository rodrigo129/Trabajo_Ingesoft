<?php
if (session_status() != 2){
    session_start();
}
function revisar_usuario(){
    if ( $_SESSION["Usuario"]==null){
        echo "Iniciar sesion";
    }
    else{
        echo $_SESSION["Usuario"];
    }
}
function referencia_usuario(){
    if ($_SESSION["Usuario"]==null){
        echo "index.php?selecion=Iniciar_sesion";
    }
    else{
        echo "index.php?selecion=Usuario";
    }
}
function referencia_carro(){
    if ($_SESSION["Usuario"]==null){
        echo "index.php?selecion=Iniciar_sesion";
    }
    else{
        echo "index.php?selecion=Carro";
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
            <a class="nav-link" href="<?php referencia_carro()?>">Carro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php referencia_usuario()?>"><?php revisar_usuario() ?></a>
        </li>
    </ul>

</nav>
