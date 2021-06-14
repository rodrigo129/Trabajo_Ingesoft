<?php
if (session_status() != 2){
    session_start();
}

if (! array_key_exists("ID", $_SESSION)){
    $_SESSION["ID"] = 0;
}

if (! array_key_exists("Usuario", $_SESSION)){
    $_SESSION["Usuario"] = null;
}
if (! array_key_exists("Lista_Carro", $_SESSION)){
    $_SESSION["Lista_Carro"] = null;
}
?>