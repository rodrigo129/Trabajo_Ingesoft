<?php
require_once "Conexion_base_de_datos.php";
$mensaje = json_decode($_POST["mensaje"]);
$user = $mensaje["0"];
$password = $mensaje["1"];
setcookie('permisos','',time()-100);

/*
if ($user == ""){
    echo json_encode(['status'=>false,
        'resultado'=>'El nombre de usuario es invalido']);
}
else{
    $query="SELECT * FROM tienda_online.usuarios as Users
WHERE Users.user='$user'";

    $paquete=["peticion" => $query];
    $respuesta = realizar_query($paquete);###########################################
    $objeto = json_decode($respuesta);
#$objeto = json_decode($_RESPUESTA);
    $convertido_a_array = (array)$objeto;
    $status = $convertido_a_array["status"];
    $retorno = $convertido_a_array["resultado"];

    if ($retorno==false){
        echo json_encode(['status'=>false,
            'resultado'=>'El usuario no exsiste']);
    }
    else{
        echo json_encode($status);
#echo json_encode($retorno);
#[{"ID":"1","user":"qwe","password":"asd"}]
#echo json_encode($retorno[0]);
#{"ID":"1","user":"qwe","password":"asd"}
        $a = (array)$retorno[0];
        $b=$a["password"];

        if ($a["password"] == $password){
            echo $respuesta;


        }
        else{
            echo json_encode(["status"=>false,
                "resultado"=>"La contraseña es incorecta"]);
        }

    }

*/

$query="SELECT * FROM tienda_online.usuarios as Users
          WHERE Users.user='$user'";
$paquete=["peticion" => $query];
$respuesta = realizar_query($paquete);
#echo gettype($respuesta);
#string
$respuesta_objeto = json_decode($respuesta);
$respuesta_lista = (array)$respuesta_objeto;
$status = $respuesta_lista["status"];
if ($status==false){
    echo json_encode(['status'=>false,
        'resultado'=>'El nombre de usuario es invalido']);
    #cuenta no existe
}
else{
    #cuenta existe
    $array_resultado = (array)$respuesta_lista["resultado"]["0"];
    #$array_resultado = $respuesta_lista["resultado"];
    $password_respuesta = $array_resultado["password"];
    if ($password == $password_respuesta){
        $ID_respuesta = $array_resultado["ID"];
        #la contraseña indicada es la correcta
        echo json_encode(['status'=>true,
            'resultado'=>$ID_respuesta]);
    }
    else {
        echo json_encode(["status"=>false,
            "resultado"=>"La contraseña es incorecta"]);
        #la contraseña indicada es incorrecta
    }
}








?>
