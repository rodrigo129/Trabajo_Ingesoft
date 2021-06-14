<?php


$algo=$_POST;
session_start();
#session_set_cookie_params ( int $lifetime , string $path = ? , string $domain = ? , bool $secure = false , bool $httponly = false )
#session_unset();
$_SESSION["Usuario"]=null;
$datos = session_get_cookie_params();

#session_destroy();

echo json_encode($datos);
?>
